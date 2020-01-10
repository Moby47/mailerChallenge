            <template>
             <v-card
             class="mx-auto"
             height="600"
             width="900"
             >       
            <div>
                    <b-navbar toggleable="sm" type="light" variant="light">
                      <b-navbar-toggle target="nav-text-collapse"></b-navbar-toggle>
                      <b-collapse id="nav-text-collapse" is-nav>
                            <b-navbar-nav>
                              <b-nav-text><router-link to='/'>Home</router-link></b-nav-text>
                            </b-navbar-nav>
                          </b-collapse>
                           <b-collapse id="nav-text-collapse" is-nav>
                            <b-navbar-nav>
                              <b-nav-text><router-link to='/subscribe'>Subscribe</router-link></b-nav-text>
                            </b-navbar-nav>
                          </b-collapse>
                      <b-collapse id="nav-text-collapse" is-nav>
                        <b-navbar-nav>
                          <b-nav-text><router-link to='/subscribers'>Our Subscribers</router-link></b-nav-text>
                        </b-navbar-nav>
                      </b-collapse>
                    </b-navbar>
                  </div>

                <br>
                <template>
                <div>
                <b-button variant="outline-success m-3" v-b-modal.modal-center>New Field</b-button>
                </div>
                </template>

                  <template>
                      <div class='table-responsive'>
                      <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Type</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for='fil in fieldsData' v-bind:key='fil.id'>
                    <td>{{fil.title}}</td>
                    <td>{{fil.type}}</td>
                    <td> <b-button variant="outline-primary m-3" @click.prevent='comingSoon()'>Edit</b-button></td>
                    <td><b-button variant="outline-danger m-3" @click.prevent='remove(fil.id)'>Delete</b-button></td>
                    </tr>
                </tbody>
                </table>
                      </div>
                      </template>

                   <!--modal-->
                <b-modal id="modal-center"  title="Create New Field" hide-footer>
                                       <v-form
                                        class='m-4'
                                         >
                                        <v-text-field
                                            v-model="title"
                                            :counter="50"
                                            label="Title"
                                            name='title'
                                            v-validate='"required|max:50"'
                                        ></v-text-field>
                                        <p class='text-danger' v-show="errors.has('title')">{{ errors.first('title') }}</p>
                                    
                                        <v-text-field
                                            v-model="type"
                                            :counter="50"
                                            label="Type"
                                            name='type'
                                            v-validate='"required|max:50"'
                                        ></v-text-field>
                                        <p class='text-danger' v-show="errors.has('type')">{{ errors.first('type') }}</p>
                                    
                                        <b-button variant="success" @click.prevent='createField()'>Create</b-button>
                                    
                                        
                                        </v-form>
                </b-modal>


                  <!-- loader-->
                      <template>
                    <div class="text-center">
                      <v-overlay :value="overlay">
                        <v-progress-circular indeterminate size="54"></v-progress-circular>
                      </v-overlay>
                    </div>
                  </template>

                      <!--snackbar-->
                      <template>
                  <div class="text-center ma-2">
                    <v-snackbar
                      v-model="snackbar"
                      :top="y === 'top'"
                      :right="x === 'right'"
                    >
                      {{text}}
                    </v-snackbar>
                  </div>
                </template>

                 </v-card>
                </template>



<script>

        export default {
        //meta
metaInfo: {
      charset: 'utf-8' ,
      name: 'viewport', content: 'width=device-width, initial-scale=1',
      title: 'Mailer Challenge Subscribers',
      meta: [{
           'name': 'description',
        'content': 'A simple web app built with laravel + vue to show a bit of my skills',
      }],
      noscript: [
      { innerHTML: 'JavaScript is required.' }
    ]
    },
 
data: () => ({
  title:'',
  type:'',
  userId: '',
  overlay: false,
  snackbar: false,
  x: null,
  y: 'top',
  fieldsData:[],
  text: ''
}),
          
methods: {
     //get all fields fora specific subscriber by id
   getFields(page_url){
         if(page_url)
         {
        NProgress.start();
         }else{
      this.overlay = !this.overlay
        }

      var   page_url = page_url || '/api/subscriber-fields/'+this.userId;
     
     fetch(page_url)
    .then(res => res.json())
    .then(res=>{

    this.fieldsData = res.data;
    this.overlay = false

     if(res.data[0] == undefined)
     {
     this.text = 'Fields are empty...'
     this.snackbar = true 
     }else{

    }

    this.makePagination(res.meta, res.links);

    NProgress.done();
   })
   .catch(error =>{
   console.log(error)
   this.overlay = false
    NProgress.done();   
   })

  },

   //pagination method
   makePagination(meta, links){
   var pagination = {
      current_page: meta.current_page,
      last_page: meta.last_page,
      next_page_url: links.next,
      prev_page_url: links.prev
     }

    this.pagination = pagination;
    },

    comingSoon(){
      this.text = 'Sorry, This feature is under maintenance.'
      this.snackbar = true
    },

    remove(id){
      var prompt = confirm('You are about to delete this field.')
      if(prompt)
      {
        //delete
        var input = {'id':id}
        axios.post('/api/destroy-field',input)
        .then(res=>{
            if(res.data == 1)
            {
              this.overlay = false
              this.snackbar = true
              this.text = 'Field deleted.'
              this.getFields()

            }else{
              alert('Error. Please try again.')
            }
          })
          .catch(error=>{
            this.overlay = false
            console.log(error)
          })
      }
    },

      createField(){
       //validate then proceed
      this.$validator.validateAll().then(() => {
     if (!this.errors.any()) 
     {
       this.overlay = true
       var input = {'type':this.type,'title':this.title,'subscribers_id':this.userId}

       axios.post('/api/fields',input)
          .then(res=>{
            if(res.data == 1)
            {
              this.$bvModal.hide('modal-center')
              this.overlay = false
              this.text = 'Field created successfully!'
              this.snackbar = true
              this.getFields()
            }else{
              this.$bvModal.hide('modal-center')
              alert('Error. Please try again.')
              this.overlay = false
            }
          })
          .catch(error=>{
            this.$bvModal.hide('modal-center')
            this.overlay = false
            console.log(error)
          })
     }
      })
    }
                
},
        
mounted() {
  //get route id
this.userId = this.$route.params.id
  //fetch the fields
this.getFields()
}
        
   }
        </script>