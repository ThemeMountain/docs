/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./source/_assets/js/toggle/options.js":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/**
 * Toggle configuration options
 * @type {Object}
 */
var Options = {
  /**
   * Collapse targets when clicking away
   * @type {Boolean}
   */
  blur: false,

  /**
   * Query selector for click targets that don't trigger blur; this is optional
   * and is automatically generated, but you may need to customize this to get
   * blur working just right in your specific application
   * @type {String}
   */
  blurFilter: null,

  /**
   * Class added to toggle buttons
   * @type {String}
   */
  buttonClass: null,

  /**
   * Class added to toggle buttons when the target is expanded
   * @type {String}
   */
  buttonClassExpanded: null,

  /**
   * HTML content to be added to created buttons, if enabled (see
   * "createButtons")
   * @type {String}
   */
  buttonContent: 'Toggle',

  /**
   * Elements matching this query selector will toggle the target on click; note
   * that this query selector applies only to siblings of the target by default;
   * see "scoped" option for additional configuration options; set this to
   * "#{id}" to scope to any button whose [href] or [data-href] attribute
   * reference the target's [id] (example: <a href="#one"> and <div id="one">)
   * @type {String}
   */
  buttonSelector: 'button',

  /**
   * Insert a toggle button before each toggle target
   * @type {Boolean}
   */
  createButtons: false,

  /**
   * Enable to disable toggle target collapse; useful for patterns such as tabs
   * and accordions where the target should stay open at all times
   * @type {Boolean}
   */
  expandOnly: false,

  /**
   * Class applied to toggle target's parent element
   * @type {String}
   */
  parentClass: null,

  /**
   * Class applied to toggle target's parent element when expanded
   * @type {String}
   */
  parentClassExpanded: null,

  /**
   * Search for toggle targets that are siblings of the toggle button
   *   true: The button's parent element will be searched for toggle targets
   *   false: The entire document will be searched for toggle targets
   * @type {Boolean}
   */
  scoped: true,

  /**
   * Allow only a single target to be expanded at one time
   * @type {Boolean}
   */
  single: false,

  /**
   * Allow only a single target sibling to be expanded at one time; enabling
   * this option will search the target parent's siblings for expanded targets
   * and close them if they are open; this is especially useful when you have a
   * multi-level navigation menu accordion
   * @type {Boolean}
   */
  singleSibling: false,

  /**
   * Class added to toggle targets
   * @type {String}
   */
  targetClass: null,

  /**
   * Class added to toggle targets when expanded
   * @type {String}
   */
  targetClassExpanded: null,

  /**
   * Query selector for toggle targets
   * @type {String}
   */
  targetSelector: '.toggle'
};

/* harmony default export */ __webpack_exports__["a"] = (Options);

/***/ }),

/***/ "./source/_assets/js/toggle/polyfills.js":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/**
 * Polyfill method class
 * @type {Object}
 */
var Polyfill = {
  /**
   * Determine if the element is an object
   * @param {Object} el
   * @return {Boolean}
   */
  objectAssign: function objectAssign() {
    if (typeof Object.assign != 'function') {
      // Must be writable: true, enumerable: false, configurable: true
      Object.defineProperty(Object, "assign", {
        value: function assign(target, varArgs) {
          // .length of function is 2
          'use strict';

          if (target == null) {
            // TypeError if undefined or null
            throw new TypeError('Cannot convert undefined or null to object');
          }

          var to = Object(target);

          for (var index = 1; index < arguments.length; index++) {
            var nextSource = arguments[index];

            if (nextSource != null) {
              // Skip over if undefined or null
              for (var nextKey in nextSource) {
                // Avoid bugs when hasOwnProperty is shadowed
                if (Object.prototype.hasOwnProperty.call(nextSource, nextKey)) {
                  to[nextKey] = nextSource[nextKey];
                }
              }
            }
          }
          return to;
        },
        writable: true,
        configurable: true
      });
    }
  },
  arrayFrom: function arrayFrom() {
    if (!Array.from) {
      Array.from = function () {
        var toStr = Object.prototype.toString;
        var isCallable = function isCallable(fn) {
          return typeof fn === 'function' || toStr.call(fn) === '[object Function]';
        };
        var toInteger = function toInteger(value) {
          var number = Number(value);
          if (isNaN(number)) {
            return 0;
          }
          if (number === 0 || !isFinite(number)) {
            return number;
          }
          return (number > 0 ? 1 : -1) * Math.floor(Math.abs(number));
        };
        var maxSafeInteger = Math.pow(2, 53) - 1;
        var toLength = function toLength(value) {
          var len = toInteger(value);
          return Math.min(Math.max(len, 0), maxSafeInteger);
        };

        // The length property of the from method is 1.
        return function from(arrayLike /*, mapFn, thisArg */) {
          // 1. Let C be the this value.
          var C = this;

          // 2. Let items be ToObject(arrayLike).
          var items = Object(arrayLike);

          // 3. ReturnIfAbrupt(items).
          if (arrayLike == null) {
            throw new TypeError('Array.from requires an array-like object - not null or undefined');
          }

          // 4. If mapfn is undefined, then let mapping be false.
          var mapFn = arguments.length > 1 ? arguments[1] : void undefined;
          var T;
          if (typeof mapFn !== 'undefined') {
            // 5. else
            // 5. a If IsCallable(mapfn) is false, throw a TypeError exception.
            if (!isCallable(mapFn)) {
              throw new TypeError('Array.from: when provided, the second argument must be a function');
            }

            // 5. b. If thisArg was supplied, let T be thisArg; else let T be undefined.
            if (arguments.length > 2) {
              T = arguments[2];
            }
          }

          // 10. Let lenValue be Get(items, "length").
          // 11. Let len be ToLength(lenValue).
          var len = toLength(items.length);

          // 13. If IsConstructor(C) is true, then
          // 13. a. Let A be the result of calling the [[Construct]] internal method
          // of C with an argument list containing the single item len.
          // 14. a. Else, Let A be ArrayCreate(len).
          var A = isCallable(C) ? Object(new C(len)) : new Array(len);

          // 16. Let k be 0.
          var k = 0;
          // 17. Repeat, while k < len… (also steps a - h)
          var kValue;
          while (k < len) {
            kValue = items[k];
            if (mapFn) {
              A[k] = typeof T === 'undefined' ? mapFn(kValue, k) : mapFn.call(T, kValue, k);
            } else {
              A[k] = kValue;
            }
            k += 1;
          }
          // 18. Let putStatus be Put(A, "length", len, true).
          A.length = len;
          // 20. Return A.
          return A;
        };
      }();
    }
  }
};

/* harmony default export */ __webpack_exports__["a"] = (Polyfill);

/***/ }),

/***/ "./source/_assets/js/toggle/toggle.js":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__options__ = __webpack_require__("./source/_assets/js/toggle/options.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__polyfills__ = __webpack_require__("./source/_assets/js/toggle/polyfills.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__utility__ = __webpack_require__("./source/_assets/js/toggle/utility.js");
/*! toggle.js v1.1.0 | MIT License | https://github.com/oldrivercreative/toggle */





__WEBPACK_IMPORTED_MODULE_1__polyfills__["a" /* default */].objectAssign();
__WEBPACK_IMPORTED_MODULE_1__polyfills__["a" /* default */].arrayFrom();

/**
 * Create new toggle object
 * @param {Object} config
 * @override {String} targetSelector
 * @return {Toggle}
 */
var Toggle = function Toggle() {
  var _this = this;

  var config = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

  // Override: targetSelector
  if (typeof config === 'string') {
    var selector = config;
    config = {
      targetSelector: selector
    };
  }

  // Options scaffolding
  this.options = {};

  /**
   * Toggle events
   * @return {Toggle}
   */
  this.options.onInit = function () {
    return _this;
  };
  this.options.onBeforeToggle = function () {
    return _this;
  };
  this.options.onToggle = function () {
    return _this;
  };

  // Configure
  __WEBPACK_IMPORTED_MODULE_2__utility__["a" /* default */].merge(this.options, __WEBPACK_IMPORTED_MODULE_2__utility__["a" /* default */].clone(__WEBPACK_IMPORTED_MODULE_0__options__["a" /* default */]), config);

  // Target scaffolding
  this.targets = {};

  /**
   * Get all toggle targets
   * @return {Array}
   */
  this.targets.all = function () {
    return Array.from(document.querySelectorAll(_this.options.targetSelector));
  };

  /**
   * Get expanded state of target
   * @return {Boolean}
   */
  this.targets.get = function (target) {
    return target.getAttribute('aria-expanded') === 'true';
  };

  /**
   * Set expanded state of target
   * @param {HTMLElement} target
   * @param {Boolean} expanded
   * @return {void}
   */
  this.targets.set = function (target) {
    var expanded = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : null;

    // Expand only
    if (_this.options.expandOnly && expanded === null && _this.targets.get(target)) return;

    // Get new expanded state
    if (expanded === null) expanded = !_this.targets.get(target);

    // Expand
    if (expanded) {
      if (_this.options.single) _this.blur();
      if (_this.options.singleSibling) _this.blurSiblings(target);
      target.setAttribute('aria-expanded', 'true');
      if (_this.options.targetClassExpanded) target.classList.add(_this.options.targetClassExpanded);
      if (_this.options.buttonClassExpanded) _this.buttons.fromTarget(target).forEach(function (button) {
        return button.classList.add(_this.options.buttonClassExpanded);
      });
      if (_this.options.parentClassExpanded) target.parentNode.classList.add(_this.options.parentClassExpanded);
    }

    // Collapse
    else {
        target.setAttribute('aria-expanded', 'false');
        if (_this.options.targetClassExpanded) target.classList.remove(_this.options.targetClassExpanded);
        if (_this.options.buttonClassExpanded) _this.buttons.fromTarget(target).forEach(function (button) {
          return button.classList.remove(_this.options.buttonClassExpanded);
        });
        if (_this.options.parentClassExpanded) target.parentNode.classList.remove(_this.options.parentClassExpanded);
      }
  };

  /**
   * Set expanded state of all targets
   * @param {Boolean} expanded
   * @return {void}
   */
  this.targets.setAll = function () {
    var expanded = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;

    _this.targets.all().forEach(function (target) {
      _this.targets.set(target, expanded);
    });
  };

  /**
   * Get toggle targets from button
   * @param {HTMLElement} button
   * @return {Array}
   */
  this.targets.fromButton = function (button) {
    // Unscoped
    if (!_this.options.scoped) return _this.targets.all();

    // Scoped to [href]/[id] pair
    if (_this.options.buttonSelector === '#{id}') {
      var href = button.getAttribute('href');
      href = href ? href : button.getAttribute('data-href');
      return Array.from(document.querySelectorAll(href));
    }

    // Scoped to parent
    var next = button.nextElementSibling;
    if (next && __WEBPACK_IMPORTED_MODULE_2__utility__["a" /* default */].matches(next, _this.options.targetSelector)) return [next];else return [];
  };

  /**
   * Initialize all targets
   * @return {void}
   */
  this.targets.init = function () {
    _this.targets.all().forEach(function (target) {
      // Create buttons
      if (_this.options.createButtons) {
        var button = document.createElement('button');
        button.innerHTML = _this.options.buttonContent;
        target.parentNode.insertBefore(button, target);
      }

      // Add target class
      if (_this.options.targetClass) target.classList.add(_this.options.targetClass);

      // Add parent class
      if (_this.options.parentClass) target.parentNode.classList.add(_this.options.parentClass);

      // Collapse/expand target
      if (_this.targets.get(target) !== true) _this.targets.set(target, false);else _this.targets.set(target, true);
    });
  };

  // Buttons scaffolding
  this.buttons = {};

  /**
   * Get all toggle buttons
   * @return {Array}
   */
  this.buttons.all = function () {
    // Scoped to toggle target siblings
    if (_this.options.scoped) {
      var buttons = [];
      _this.targets.all().forEach(function (target) {
        var targetBtns = _this.buttons.fromTarget(target);
        targetBtns.forEach(function (button) {
          return buttons.push(button);
        });
      });
      return buttons;
    }

    // Unscoped (search whole document)
    else {
        return Array.from(document.querySelectorAll(_this.options.buttonSelector));
      }
  };

  /**
   * Get toggle buttons from target
   * @param {HTMLElement} target
   * @return {Array}
   */
  this.buttons.fromTarget = function (target) {
    // Unscoped, get all buttons
    if (!_this.options.scoped) return _this.buttons.all();

    // Scoped to [href]/[id] pair
    if (_this.options.buttonSelector === '#{id}') return Array.from(document.querySelectorAll('[href="#' + target.id + '"], [data-href="#' + target.id + '"]'));

    // Scoped to parent
    var prev = target.previousElementSibling;
    if (prev && __WEBPACK_IMPORTED_MODULE_2__utility__["a" /* default */].matches(prev, _this.options.buttonSelector)) return [prev];else return [];
  };

  /**
   * Get toggle button from click event
   * @param {Event} e
   * @return {HTMLElement|null}
   */
  this.buttons.fromClick = function (e) {
    var button = void 0;

    // Scoped to [href]/[id] pair
    if (_this.options.buttonSelector === '#{id}') {
      button = __WEBPACK_IMPORTED_MODULE_2__utility__["a" /* default */].matches(e.target, '[href], [data-href]') ? e.target : __WEBPACK_IMPORTED_MODULE_2__utility__["a" /* default */].closest(e.target, '[href], [data-href]');
    }

    // Scoped to parent
    else {
        button = __WEBPACK_IMPORTED_MODULE_2__utility__["a" /* default */].matches(e.target, _this.options.buttonSelector) ? e.target : __WEBPACK_IMPORTED_MODULE_2__utility__["a" /* default */].closest(e.target, _this.options.buttonSelector);
      }

    if (button) return button;else return null;
  };

  /**
   * Handle button click event
   * @param {Eveent} e
   * @return {void}
   */
  this.buttons.click = function (e) {
    e.preventDefault();
    var button = _this.buttons.fromClick(e);
    if (!button) return;
    var targets = _this.targets.fromButton(button);
    targets.forEach(function (target) {
      _this.targets.set(target);
    });
  };

  /**
   * Initialize all buttons
   * @return {void}
   */
  this.buttons.init = function () {
    _this.buttons.all().forEach(function (button) {
      // Add button class
      if (_this.options.buttonClass) button.classList.add(_this.options.buttonClass);

      // Click handler
      button.addEventListener('click', _this.buttons.click);
    });
  };

  /**
   * Blur all targets
   * @param {Event} e
   * @return {void}
   */
  this.blur = function () {
    var e = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;

    if (e === null || _this.options.blur && _this.options.blurFilter && !__WEBPACK_IMPORTED_MODULE_2__utility__["a" /* default */].matches(e.target, _this.options.blurFilter)) {
      _this.targets.setAll(false);
    }
  };

  /**
   * Blur siblings of target parent
   * @param {HTMLElement} target
   * @return {void}
   */
  this.blurSiblings = function (target) {
    Array.from(target.parentNode.parentNode.children).forEach(function (parent) {
      Array.from(parent.children).forEach(function (child) {
        if (__WEBPACK_IMPORTED_MODULE_2__utility__["a" /* default */].matches(child, _this.options.targetSelector)) _this.targets.set(child, false);
      });
    });
  };

  // Listen for blur
  document.addEventListener('click', this.blur);

  // Configure blur filters if not set
  if (this.options.blur && !this.options.blurFilter) {
    this.options.blurFilter = this.options.targetSelector + ', ' + this.options.targetSelector + ' *, ' + this.options.buttonSelector + ', ' + this.options.buttonSelector + ' *';
  }

  // Initialize targets and buttons
  this.targets.init();
  this.buttons.init();

  // Event: onInit
  this.options.onInit();

  return this;
};

// Global accessor
window.Toggle = Toggle;

/* harmony default export */ __webpack_exports__["default"] = (Toggle);

/***/ }),

/***/ "./source/_assets/js/toggle/utility.js":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

/**
 * Utility method class
 * @type {Object}
 */
var Utility = {
  /**
   * Determine if the element is an object
   * @param {Object} el
   * @return {Boolean}
   */
  isObject: function isObject(el) {
    return el && (typeof el === 'undefined' ? 'undefined' : _typeof(el)) === 'object' && !Array.isArray(el);
  },


  /**
   * Clone an object
   * @param {Object} obj
   * @return {Object}
   */
  clone: function clone(obj) {
    return JSON.parse(JSON.stringify(obj));
  },


  /**
   * Deep merge one or more source objects into the target object
   * @param {Object} target
   * @param {Object} sources
   * @return {Object}
   */
  merge: function merge(target) {
    for (var _len = arguments.length, sources = Array(_len > 1 ? _len - 1 : 0), _key = 1; _key < _len; _key++) {
      sources[_key - 1] = arguments[_key];
    }

    if (!sources.length) return target;
    var source = sources.shift();
    if (Utility.isObject(target) && Utility.isObject(source)) {
      for (var key in source) {
        if (Utility.isObject(source[key])) {
          if (!target[key]) Object.assign(target, _defineProperty({}, key, {}));
          Utility.merge(target[key], source[key]);
        } else {
          Object.assign(target, _defineProperty({}, key, source[key]));
        }
      }
    }
    return Utility.merge.apply(Utility, [target].concat(_toConsumableArray(sources)));
  },


  /**
   * Determine if DOM element matches the CSS selector
   * @param {Object} el
   * @param {String} selector
   * @return {Boolean}
   */
  matches: function matches(el, selector) {
    return (el.matches || el.matchesSelector || el.msMatchesSelector || el.mozMatchesSelector || el.webkitMatchesSelector || el.oMatchesSelector).call(el, selector);
  },


  /**
   * Find closest DOM element ancestor that matches the CSS selector
   * @param {Object} el
   * @param {String} selector
   * @return {Object|null}
   */
  closest: function closest(el, selector) {
    var parent = void 0;
    while (el) {
      parent = el.parentElement;
      if (parent && Utility.matches(parent, selector)) return parent;
      el = parent;
    }
    return null;
  }
};

/* harmony default export */ __webpack_exports__["a"] = (Utility);

/***/ }),

/***/ "./source/_assets/sass/main.scss":
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__("./source/_assets/js/toggle/toggle.js");
module.exports = __webpack_require__("./source/_assets/sass/main.scss");


/***/ })

/******/ });