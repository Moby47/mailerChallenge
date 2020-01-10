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
                        <v-card >
                            <v-container>
                            <v-row dense>



                              <v-col cols="6">
                                <v-card
                                  color="#385F73"
                                  dark
                                >
                              <v-card-title class="headline">First name surname</v-card-title>
                      
                               <v-card-subtitle>email@gmail.com</v-card-subtitle>
                               <v-card-subtitle>State</v-card-subtitle>
                      
                                  <v-card-actions><router-link to='/fields' class='text-style'>
                                    <v-btn >My Fields</v-btn></router-link>
                                  </v-card-actions>
                                </v-card>
                              </v-col>
                      


                              <v-col cols="6">
                                    <v-card
                                      color="#385F73"
                                      dark
                                    >
                                  <v-card-title class="headline">First name surname</v-card-title>
                          
                                   <v-card-subtitle>email@gmail.com</v-card-subtitle>
                                   <v-card-subtitle>State</v-card-subtitle>
                          
                                      <v-card-actions>
                                        <v-btn >My Fields</v-btn>
                                      </v-card-actions>
                                    </v-card>
                                  </v-col>
                                

                                  <v-col cols="6">
                                        <v-card
                                          color="#385F73"
                                          dark
                                        >
                                      <v-card-title class="headline">First name surname</v-card-title>
                              
                                       <v-card-subtitle>email@gmail.com</v-card-subtitle>
                                       <v-card-subtitle>State</v-card-subtitle>
                              
                                          <v-card-actions>
                                            <v-btn >My Fields</v-btn>
                                          </v-card-actions>
                                        </v-card>
                                      </v-col>


                                </v-row>
                          </v-container>
                        </v-card>


                        <div class='text-center mt-4 mb-2'>
                                <b-button pill variant="outline-secondary">PREV</b-button>
                                <b-button pill variant="outline-secondary">NEXT</b-button>
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
     
        }),
          
 methods: {
        
                
  },
        
 mounted() {
        
 }
        
  }
        </script>