/**
 * Helpers method class
 * @type {Object}
 */
const Helpers = {
  /**
   * Wrap an HTMLElement around another HTMLElement or an array of them.
  */
  wrap(el, wrapper) {
    el.parentNode.insertBefore(wrapper, el);
    wrapper.appendChild(el);
  }
}

export default Helpers
