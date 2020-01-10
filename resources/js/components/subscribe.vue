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
                          <b-nav-text><router-link to='/subscribers'>Our Subscribers</router-link></b-nav-text>
                        </b-navbar-nav>
                      </b-collapse>
                    </b-navbar>
                  </div>



                  <template>
                        <v-card
                        class="mx-auto"
                        height="300"
                        width="300"
                      >
                        <v-form
                        class='m-4'
                        >
                          <v-text-field
                            v-model="name"
                            :counter="15"
                            label="Name"
                            name='name'
                            v-validate='"required|max:15"'
                          ></v-text-field>
                           <p class='text-danger' v-show="errors.has('name')">{{ errors.first('name') }}</p>
                      
                          <v-text-field
                            v-model="email"
                            label="E-mail"
                            name='email'
                            :counter="100"
                            v-validate='"required|email|max:100"'
                          ></v-text-field>
                        <p class='text-danger' v-show="errors.has('email')">{{ errors.first('email') }}</p>

                          <b-button variant="success" @click.prevent='subscribe()'>Subscribe</b-button>
                      
                          
                        </v-form>
                        </v-card>
                      </template>

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
                      Subscribtion successful. Redirecting...
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
     title: 'Subscribe to Mailer Challenge',
     meta: [{
           'name': 'description',
        'content': 'A simple web app built with laravel + vue to show a bit of my skills',
      }],
      noscript: [
      { innerHTML: 'JavaScript is required.' }
    ]
    },

data: () => ({
   name: '',
   email: '',
   overlay: false,
   snackbar: false,
   x: null,
   y: 'top',
   }),
          
methods: {
        
    subscribe(){
       //validate then proceed
      this.$validator.validateAll().then(() => {
     if (!this.errors.any()) 
     {
       this.overlay = true
       var input = {'name':this.name,'email':this.email}
       axios.post('/api/subscribers',input)
          .then(res=>{
            if(res.data == 1)
            {
              this.overlay = false
              this.snackbar = true
              setTimeout(() => {
                this.$router.push({name: "subscribers"});
              }, 2000);
              
            }else{
              alert('Error. Please try again.')
            }
          })
          .catch(error=>{
            this.overlay = false
            console.log(error)
            if(error.response.status == 422)
            {
            alert('Email already exists...')
            }
          })
     }
      })
    }
    
},
        
mounted() {
        
}
        
}
        </script>