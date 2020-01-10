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
                                </b-navbar>
                              </div>



                  <template>
                       
                            <v-container>
                            <v-row dense>

                              <v-col cols="6" v-for='sub in subscribers' v-bind:key='sub.id'>
                                <v-card
                                  color="#6c757d"
                                  dark
                                >
                              <v-card-title class="headline">{{sub.name}}</v-card-title>
                      
                               <v-card-subtitle>{{sub.email}}</v-card-subtitle>
                               <v-card-subtitle>{{sub.state}}</v-card-subtitle>
                      
                                  <v-card-actions>
                                   <b-button  variant="success"><router-link :to="'/fields/'+sub.id" class='text-style'>My Fields</router-link></b-button>
                                  </v-card-actions>
                                </v-card>
                              </v-col>
                      
                                
                                </v-row>
                          </v-container>
                           <div class='text-center mt-4 mb-2'>
                           <b-button pill variant="outline-success m-3" @click.prevent="getSubscribers(pagination.prev_page_url)" :disabled="!pagination.prev_page_url">PREV</b-button>
                          <span>{{pagination.current_page}} of {{pagination.last_page}}</span>
                           <b-button pill variant="outline-success m-3" @click.prevent="getSubscribers(pagination.next_page_url)" :disabled="!pagination.next_page_url">NEXT</b-button>
                              </div>

                      </template>

                       <!-- loader-->
                      <template>
                    <div class="text-center">
                      <v-overlay :value="overlay">
                        <v-progress-circular indeterminate size="54"></v-progress-circular>
                      </v-overlay>
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
     subscribers: [],
     pagination:[],
     overlay: false
        }),
          
 methods: {
        
    getSubscribers(page_url){
         if(page_url)
         {
        NProgress.start();
         }else{
      this.overlay = !this.overlay
        }

      var   page_url = page_url || '/api/subscribers';
     
     fetch(page_url)
    .then(res => res.json())
    .then(res=>{

    this.subscribers = res.data;
    this.overlay = false

     if(res.data[0] == undefined)
     {
     alert('No subscribers found...') 
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

      

   makePagination(meta, links){
   var pagination = {
      current_page: meta.current_page,
      last_page: meta.last_page,
      next_page_url: links.next,
      prev_page_url: links.prev
     }

    this.pagination = pagination;
    }
    
  },
        
 mounted() {
    this.getSubscribers()    
 }
        
  }
        </script>