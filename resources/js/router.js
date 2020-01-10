import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

import index from './components/index.vue'
import subscribers from './components/subscribers.vue'
import subscribe from './components/subscribe.vue'
import fields from './components/fields.vue'
import notfound from './components/notfound.vue'


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
        {
            path: '/subscribers',
            name: 'subscribers',
            component: subscribers,
             meta:{
              //  auth: true
            }
        },
        {
            path: '/subscribe',
            name: 'subscribe',
            component: subscribe,
             meta:{
              //  auth: true
            }
        },
        {
            path: '/fields/:id',
            name: 'fields',
            component: fields,
             meta:{
              //  auth: true
            }
        },
        {
            path: '*',
            name: 'notfound',
            component: notfound,
             meta:{
              
            }
        },

    ]
})
