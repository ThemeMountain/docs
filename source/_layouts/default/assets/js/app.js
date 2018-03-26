window.Vue = require('vue')
const toggle = require('./toggle/toggle')

Vue.component('table-of-contents', require('./components/TableOfContents.vue').default)

module.exports.boot = () => {

    const app = new Vue({
      el: '#app'
    })

    new Toggle({
        buttonClassExpanded: 'active',
        buttonSelector: '.toggle-trigger'
    })

}

