import { createApp } from 'petite-vue'

// Mount petite-vue 
// on all elements with the `data-reactive` attribute.
// We use square brackets as custom delimiters for rendering petite-vue values.
// <div data-reactive v-scope="{ count: 0 }"></div>
// <p>[ count ]</p>

const reactiveElements = document.querySelectorAll('[data-reactive]');
reactiveElements.forEach(element => {
	createApp({
		$delimiters: ['[', ']'] 
	}).mount(element)
})


