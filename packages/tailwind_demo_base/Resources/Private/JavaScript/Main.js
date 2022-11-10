import { createApp } from 'petite-vue'

// Mount petite-vue 
// on all elements with the `data-reactive` attribute 
// <div data-reactive v-scope="{ count: 0 }"></div>
createApp().mount('[data-reactive]')

