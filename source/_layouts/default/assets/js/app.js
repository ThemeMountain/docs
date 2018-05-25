const helpers = require('./helpers').default
const anchorJS = require('anchor-js')
const ClipboardJS = require('clipboard')
const scrollToElement = require('scroll-to-element')

module.exports.boot = () => {

  /**
   * Mobile menu
   */
  const menuToggle = document.getElementById('menu-toggle')
  const contentOverlay = document.querySelector('.content-overlay')
  const nav = document.querySelector('.sidebar-navigation')
  const content = document.querySelectorAll('.content')
  function toggleMenu() {
    nav.getAttribute('aria-expanded') == 'true' ? nav.setAttribute('aria-expanded', 'false') : nav.setAttribute('aria-expanded', 'true')
    Array.from(content).map((el) => {
      el.classList.toggle('mobile-menu-opened')
    })
    contentOverlay.classList.toggle('hidden')
    Array.from(menuToggle.children).map((el) => {
      el.classList.toggle('hidden')
    })
  }
  if (menuToggle) menuToggle.addEventListener('click', toggleMenu, false)
  if (contentOverlay) contentOverlay.addEventListener('click', toggleMenu, false)


  function scrollToOnLoad() {
    if (window.location.hash) {
      scrollToElement(window.location.hash, {
        offset: -100,
        ease: 'out-expo',
        duration: 400
      })
    }
  }
  window.onload = scrollToOnLoad

  /**
   * AnchorsJS
   */
  const anchors = new anchorJS()
  anchors.options = { placement: 'left', class: 'text-grey-dark scroll-to' }
  anchors.add('.content h2, .content h3, .content h4')
  let tocLinks = anchors.elements.filter((el) => ['H2'].indexOf(el.tagName) > -1).map((el) => {
    return {
      isChild: ['H3'].indexOf(el.tagName) > -1,
      text: helpers.getHeadingText(el),
      href: el.querySelector('.anchorjs-link').getAttribute('href'),
      el: el,
    }
  })
  let tocWrapper = document.querySelector('.quickies')
  if (tocWrapper && tocLinks.length < 1) {
    tocWrapper.previousElementSibling.remove()
  }
  let tocLinksHTML = tocLinks.map((el) => {
    let pl = el.isChild ? ' pl-2' : ''
    el = '<li class="mb-3'+pl+'">' +
            '<a href="'+el.href+'" class="quickie scroll-to hover:text-grey-darkest">'+el.text+'</a>' +
          '</li>'
    tocWrapper.insertAdjacentHTML('beforeend', el)
  })

  /**
   * Toggles
   * Desktop menu, file tree...
   */
  let collapseables = document.querySelectorAll('.toggle-trigger, .filetree a')
  const toggle = (e) => {
    e.preventDefault();
    let target = e.target
    let panel = target.nextElementSibling
    target.classList.toggle('active')
    panel.getAttribute('aria-expanded') == 'true' ? panel.setAttribute('aria-expanded', 'false') : panel.setAttribute('aria-expanded', 'true')
  }
  for (var i = 0; i < collapseables.length; i++) {
    if(!collapseables[i].nextElementSibling.getAttribute('aria-expanded')) collapseables[i].nextElementSibling.setAttribute('aria-expanded', 'false');
    collapseables[i].addEventListener('click', toggle, false)
  }

  /**
   * Tabs
   */
  function onTabClick(e){
    e.preventDefault();

    let otherLinks = helpers.getSiblings(e.target.parentNode);
    let otherPanels = helpers.getSiblings(document.getElementById(e.target.href.split('#')[1]));
    let siblings = otherLinks.concat(otherPanels);

    // deactivate existing active tab and panel
    for (let i=0; i < siblings.length; i++){
      siblings[i].classList.remove('active');
      siblings[i].setAttribute('aria-expanded', 'false');
    }

    // activate new tab
    e.target.parentNode.classList.add('active');
    // activate new panel
    let panel =  document.getElementById(e.target.href.split('#')[1]);
    panel.getAttribute('aria-expanded') == 'true' ? panel.setAttribute('aria-expanded', 'false') : panel.setAttribute('aria-expanded', 'true');
  }

  let tabLinks = document.querySelectorAll('.tabs a');
  for (let i=0; i < tabLinks.length; i++){
    tabLinks[i].addEventListener('click', onTabClick, false);
  }

  /**
   * Smooth scroll
   */
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
   * Copy to clipboard
   * Adds copy to clipboard button to code blocks
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

  // Create a new ClipboardJS instance
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

  /**
   * Responsive example switcher
   * Resizes preview iframe between 'desktop' and 'mobile' widths
   */
  let previewButtons = document.querySelectorAll('[data-preview]')

  function togglePreview(e) {
    let button = e.target
    let previewType = button.getAttribute('data-preview')
    let iframe = button.parentElement.nextElementSibling

    if (previewType == 'mobile') {
      button.classList.remove('text-grey')
      button.classList.add('text-grey-darkest')

      button.nextElementSibling.classList.remove('text-grey-darkest')
      button.nextElementSibling.classList.add('text-grey')

      iframe.classList.add('w-3/5')
    }
    else {
      button.classList.remove('text-grey')
      button.classList.add('text-grey-darkest')

      button.previousElementSibling.classList.remove('text-grey-darkest')
      button.previousElementSibling.classList.add('text-grey')

      iframe.classList.remove('w-3/5')
    }
  }
  for (var i = 0; i < previewButtons.length; i++) {
    previewButtons[i].addEventListener('click', togglePreview, false)
  }

}
