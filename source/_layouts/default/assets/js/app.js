window.Vue = require('vue')
const helpers = require('./helpers').default
const toggle = require('./toggle/toggle')
const ClipboardJS = require('clipboard')
const scrollToElement = require('scroll-to-element')

Vue.component('table-of-contents', require('./components/TableOfContents.vue').default)

module.exports.boot = () => {

  const app = new Vue({
    el: '#app',
    data: {
      showMobileMenu: false
    },
    mounted: () => {
      if (window.location.hash) {
        scrollToElement(window.location.hash, {
          offset: -100,
          ease: 'out-expo',
          duration: 400
        })
      }

      let collapsables = new Toggle({
          buttonClassExpanded: 'active',
          buttonSelector: '.toggle-trigger'
      })

      let tabs = new Toggle({
        buttonClassExpanded: 'tab-active',
        buttonSelector: '#{id}',
        expandOnly: true,
        single: true,
        targetSelector: '.tab-panel'
      })

      let filetree = new Toggle({
        buttonClassExpanded: 'toggle-btn-active',
        buttonSelector: 'a',
        parentClass: 'toggle-parent',
        parentClassExpanded: 'toggle-parent-active',
        targetSelector: '.filetree ul ul'
      })
    }
  })

  function addScrollTo(e) {

    let offset = null !== e.target.getAttribute('data-offset') ? parseInt(e.target.getAttribute('data-offset'), 10) : -100

    if (!e.target.classList.contains('scroll-to'))
      return;

    scrollToElement(e.target.getAttribute('href'), {
      offset: offset,
      ease: 'out-expo',
      duration: 400
    })
  }

  document.addEventListener ? document.addEventListener('click', addScrollTo, false) : document.attachEvent('onclick', addScrollTo)

  /**
   * Add copy to clipboard button to code blocks
   */
  let codeBlocks = [].slice.call(document.querySelectorAll('pre'))

  codeBlocks.map((block) => {

    let btn = document.createElement('button')
    let wrapper = document.createElement('div')

    wrapper.classList.add('code-block', 'relative')
    btn.classList.add('copy-to-clipboard')
    btn.innerText = 'Copy'

    helpers.wrap(block, wrapper)
    wrapper.appendChild(btn)

  })

  /**
   * Copy to clipboard
   */
  let clipboard = new ClipboardJS('.copy-to-clipboard', {
    target: (target) => {
      return target.previousElementSibling.firstChild;
    }
  })

  clipboard.on('success', (e) => {
    e.clearSelection()
    e.trigger.textContent = 'Copied'
    window.setTimeout(() => {
      e.trigger.textContent = 'Copy';
    }, 2000)
  })

  clipboard.on('error', (e) => {
    e.trigger.textContent = 'Press "Ctrl + C" to copy';
    window.setTimeout(function () {
      e.trigger.textContent = 'Copy';
    }, 2000);
  })

}
