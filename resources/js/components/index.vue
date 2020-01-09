<template>
  <v-card
    class="mx-auto"
    height="600"
    width="900"
  >
    <v-navigation-drawer
      absolute
      dark
      src="/images/home.png"
      width="100%"
      permanent
    >
      <v-list>
        <v-list-item
          v-for="([link, text], i) in items"
          :key="i"
          link
        >
          <v-list-item-content>
            <v-list-item-title><b ><v-btn><router-link :to='link' class='text-style'>{{ text }}</router-link></v-btn></b></v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
  </v-card>
</template>


<script>

export default {

data: () => ({
  items: [
        ['/subscribe', 'Subscribe'],
        ['/subscribers', 'Our Subscribers'],
      ]     
}),
  
methods: {

        
},

mounted() {

}

}
</script>
