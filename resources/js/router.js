import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

import index from './components/index.vue'
//import notfound from './components/notfound.vue'


export default new Router({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'index',
            component: index,
             meta:{
              //  auth: true
            }
        },
        
       /* {
            path: '*',
            name: 'notfound',
            component: notfound,
             meta:{
              
            }
        },*/

    ]
})
