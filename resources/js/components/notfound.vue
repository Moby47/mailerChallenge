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
                      
                          <b-button variant="success" ><router-link to='/' class='text-style'>Go Home</router-link></b-button>
                        </b-jumbotron>
                      </div>
    
    
                </v-card>
                </template>
    
    
    
    <script>
    
export default {
  //meta
metaInfo: {
      charset: 'utf-8' ,
      name: 'viewport', content: 'width=device-width, initial-scale=1',
      title: 'Page not found',
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