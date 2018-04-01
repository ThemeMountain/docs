<template>
  <div>
    <h4 class="font-normal text-grey-darkest mb-4 mt-2 p-0" v-if="links.length > 0" v-text="title">Quickies</h4>
    <ul class="list-reset text-xs text-grey-dark" v-if="links.length > 0">
      <li class="mb-3" :class="link.isChild ? 'pl-2' : ''" v-for="link in links">
        <a :href="link.href" class="quickie scroll-to" :class="['hover:text-grey-darkest', link.href == selected ? 'text-grey-darkest' : 'text-grey-dark']">{{ link.text }}</a>
      </li>
    </ul>
  </div>
</template>

<script>
const anchorJS = require('anchor-js')
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
  props: ['title'],
  data() {
    return {
      links: [],
      selected: ''
    }
  },
  mounted() {
    anchors.options = { placement: 'left', class: 'text-grey-dark' }
    anchors.add('.content h2, .content h3, .content h4')
    this.links = anchors.elements.filter((el) => ['H2'].indexOf(el.tagName) > -1).map((el) => {
      return {
        isChild: ['H3'].indexOf(el.tagName) > -1,
        text: getHeadingText(el),
        href: el.querySelector('.anchorjs-link').getAttribute('href'),
        el: el,
      }
    })
  }
}
</script>
