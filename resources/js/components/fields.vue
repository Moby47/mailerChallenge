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
                          <b-nav-text><router-link to='/subscribers'>All Subscribers</router-link></b-nav-text>
                        </b-navbar-nav>
                      </b-collapse>
                    </b-navbar>
                  </div>

                <br>
                <template>
                <div>
                <b-button variant="outline-primary m-3" v-b-modal.modal-center>New Field</b-button>
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
                    <tr>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td><button class='btn btn-primary'>Edit</button></td>
                    <td><button class='btn btn-danger'>Delete</button></td>
                    </tr>
                    <tr>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td><button class='btn btn-primary'>Edit</button></td>
                    <td><button class='btn btn-danger'>Delete</button></td>
                    </tr>
                    <tr>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td><button class='btn btn-primary'>Edit</button></td>
                    <td><button class='btn btn-danger'>Delete</button></td>
                    </tr>
                </tbody>
                </table>
                      </div>
                      </template>

                      
                <b-modal id="modal-center"  title="Create New Field" hide-footer>
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
                                    
                                        <v-btn
                                            color="success"
                                            class="mr-4 mb-3"
                                        >
                                            Subscribe
                                        </v-btn>
                                    
                                        
                                        </v-form>
                </b-modal>

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