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



              <template>
                  <div>
                    <b-carousel
                      id="carousel-1"
                      v-model="slide"
                      :interval="2500"
                      controls
                      indicators
                      background="#ababab"
                      img-width="1024"
                      img-height="440"
                      style="text-shadow: 1px 1px 2px #333;"
                      @sliding-start="onSlideStart"
                      @sliding-end="onSlideEnd"
                    >

                      <!-- Text slides with image -->
                      <b-carousel-slide
                        text="Supercharge your email marketing today."
                        img-src="https://www.mailerlite.com/img/containers/main/blog/updating-passwords-regulary.jpg/a9929b0147e2166a96708beacd9e87a2.jpg"
                      ></b-carousel-slide>
                
                      <!-- Text slides with image -->
                      <b-carousel-slide
                        text="Supercharge your email marketing today."
                        img-src="https://www.mailerlite.com/img/containers/main/blog/hero-1540311120.jpg/90dab387258083eb894d82c4ba40d09a.jpg"
                      ></b-carousel-slide>
                
                      <!-- Text slides with image -->
                      <b-carousel-slide
                        text="Supercharge your email marketing today."
                        img-src="https://www.mailerlite.com/img/containers/main/blog/blog-nps-final.jpg/0ca476054371e8b274501aceb9d73c25.jpg"
                      ></b-carousel-slide>

                    </b-carousel>
                  </div>
                </template>


                <div>
                    <b-jumbotron>
                      <template v-slot:header>Welcome</template>
                  
                      <template v-slot:lead>
                          Our support team works 24/7 to assist you . Reach out to us and we will get back to you.
                      </template>
                  
                      <hr class="my-4">
                  
                      <p>
                          Join our happy subscribers worldwide.
                      </p>
                  
                      <b-button variant="success" ><router-link to='/subscribe' class='text-style'>Join Now</router-link></b-button>
                      <b-button  ><router-link to='/subscribers' class='text-style'>Our Subscribers</router-link></b-button>
                    </b-jumbotron>
                  </div>


                  
                      <v-footer padless>
                        <v-col
                          class="text-center"
                          cols="12"
                        >
                          {{ new Date().getFullYear() }} — <strong>Henry Onyemaobi</strong>
                        </v-col>
                      </v-footer>

                  </v-card>
                  </template>



<script>

export default {
//meta
metaInfo: {
       charset: 'utf-8' ,
       name: 'viewport', content: 'width=device-width, initial-scale=1',
       title: 'Mailer Challenge Home page',
       meta: [{
           'name': 'description',
        'content': 'A simple web app built with laravel + vue to show a bit of my skills',
      }],
      noscript: [
      { innerHTML: 'JavaScript is required.' }
    ]
    },

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