window.Vue = require('vue')

Vue.component('table-of-contents', require('./components/TableOfContents.vue'))

const app = new Vue({
  el: '#app'
})

let toggle = new Toggle({
    buttonClassExpanded: 'active',
    buttonSelector: '.toggle-trigger'
})
