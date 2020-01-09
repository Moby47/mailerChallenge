<template>
        <v-card
          class="mx-auto"
          height="600"
          width="900"
        >
           
    
                    <div>
                        <b-jumbotron>
                          <template v-slot:header>404</template>
                      
                          <template v-slot:lead>
                              Sorry, this page was not found.
                          </template>
                      
                          <hr class="my-4">
                      
                          <b-button variant="primary" ><router-link to='/' class='text-style'>Go Home</router-link></b-button>
                        </b-jumbotron>
                      </div>
    
    
                      
                        
    </v-card>
    </template>
    
    
    
    <script>
    
        export default {
        
        data: () => ({
          slide: 0,
            sliding: null
        }),
          
        methods: {
          onSlideStart(slide) {
            this.sliding = true
          },
          onSlideEnd(slide) {
            this.sliding = false
          }
                
        },
        
        mounted() {
        
        }
        
        }
        </script>