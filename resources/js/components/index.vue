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
                        <b-nav-text><router-link to='/subscribers'>All Subscribers</router-link></b-nav-text>
                      </b-navbar-nav>
                    </b-collapse>
                </b-navbar>
              </div>



              <template>
                  <div>
                    <b-carousel
                      id="carousel-1"
                      v-model="slide"
                      :interval="2000"
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
                        img-src="/images/home.png"
                      ></b-carousel-slide>
                
                      <!-- Text slides with image -->
                      <b-carousel-slide
                        text="Supercharge your email marketing today."
                        img-src="/images/home.png"
                      ></b-carousel-slide>
                
                      <!-- Text slides with image -->
                      <b-carousel-slide
                        text="Supercharge your email marketing today."
                        img-src="/images/home.png"
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
                          Join our happy subscriberss worldwide.
                      </p>
                  
                      <b-button variant="primary" ><router-link to='/subscribe' class='text-style'>Join Now</router-link></b-button>
                      <b-button variant="success" ><router-link to='/subscribers' class='text-style'>Our Subscribers</router-link></b-button>
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