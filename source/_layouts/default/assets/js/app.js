window.Vue = require('vue')
const toggle = require('./toggle/toggle')
const scrollToElement = require('scroll-to-element')

Vue.component('table-of-contents', require('./components/TableOfContents.vue').default)

module.exports.boot = () => {

    const app = new Vue({
      el: '#app'
    })

    new Toggle({
        buttonClassExpanded: 'active',
        buttonSelector: '.toggle-trigger'
    })

    function callback(e) {
        var e = window.e || e;

        if (!e.target.classList.contains('scroll-to'))
            return;

        // Do something
        scrollToElement(e.target.getAttribute('href'), {
          offset: -100,
          ease: 'out-expo',
          duration: 400
        })
    }

    document.addEventListener ? document.addEventListener('click', callback, false) : document.attachEvent('onclick', callback);

    if (window.location.hash) {
      scrollToElement(window.location.hash, {
        offset: -100,
        ease: 'out-expo',
        duration: 400
      })
    }

}

