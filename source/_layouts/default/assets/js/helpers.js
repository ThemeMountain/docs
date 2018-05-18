/**
 * Helpers method class
 * @type {Object}
 */
const Helpers = {
  getHeadingText(el) {
    let text = ''
    for (var i = 0; i < el.childNodes.length; ++i) {
      if (el.childNodes[i].nodeType === 3) {
        text += el.childNodes[i].textContent
      }
    }
    return text
  },
  /**
   * Wrap an HTMLElement around another HTMLElement or an array of them.
  */
  wrap(el, wrapper) {
    el.parentNode.insertBefore(wrapper, el)
    wrapper.appendChild(el)
  },

  getChildren(n, skipMe) {
    var r = []
    for ( ; n; n = n.nextSibling )
       if ( n.nodeType == 1 && n != skipMe)
          r.push( n )
    return r
  },

  getSiblings(n) {
    return this.getChildren(n.parentNode.firstChild, n)
  }
}

export default Helpers
