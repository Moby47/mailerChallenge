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
                          <b-nav-text><router-link to='/subscribers'>Subscribers</router-link></b-nav-text>
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
                        class='mt-4'
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
                      
                          <v-btn
                            color="success"
                            class="mr-4 mb-3"
                          >
                            Subscribe
                          </v-btn>
                      
                          
                        </v-form>
                        </v-card>
                      </template>

                      


    </v-card>
</template>



<script>

        export default {
        
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