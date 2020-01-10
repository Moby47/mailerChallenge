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
                            :counter="10"
                            label="Name"
                            name='name'
                          ></v-text-field>
                      
                          <v-text-field
                            v-model="email"
                            label="E-mail"
                            name='email'
                          ></v-text-field>
                      
                          <b-button variant="success" ><router-link to='/subscribe' class='text-style'>Subscribe</router-link></b-button>
                      
                          
                        </v-form>
                        </v-card>
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
   }),
          
methods: {
        
                
},
        
mounted() {
        
}
        
}
        </script>