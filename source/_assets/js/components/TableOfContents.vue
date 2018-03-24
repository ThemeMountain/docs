<template>
  <div>
    <h4 class="font-normal text-grey-darkest mb-4 mt-2">Quickies</h4>
    <ul class="list-reset text-xs text-grey-dark" v-if="links.length > 0">
      <li class="mb-3" :class="link.isChild ? 'pl-2' : ''" v-for="link in links">
        <a :href="link.href" v-on:click.prevent="scrollTo" class="quickie text-grey-dark hover:text-grey-darkest">{{ link.text }}</a>
      </li>
    </ul>
  </div>
</template>

<script>
import includes from 'lodash/includes'
const anchorJS = require('anchor-js')
const scrollToElement = require('scroll-to-element')
const anchors = new anchorJS()

function getHeadingText(element) {
  let text = ''
  for (var i = 0; i < element.childNodes.length; ++i) {
    if (element.childNodes[i].nodeType === 3) {
      text += element.childNodes[i].textContent;
    }
  }
  return text
}

export default {
  data() {
    return {
      links: []
    }
  },
  methods: {
    scrollTo: function(event) {
      scrollToElement(event.target.hash, {
        offset: -100,
        ease: 'in-out-expo',
        duration: 400
      })
    }
  },
  mounted() {
    anchors.options = { placement: 'left', class: 'text-grey-dark' }
    anchors.add('.content h2, .content h3, .content h4')
    this.links = anchors.elements.filter((el) => includes(['H2', 'H3', 'H4'], el.tagName)).map((el) => {
      return {
        isChild: includes(['H3', 'H4'], el.tagName),
        text: getHeadingText(el),
        href: el.querySelector('.anchorjs-link').getAttribute('href'),
        el: el,
      }
    })
  }
}
</script>
