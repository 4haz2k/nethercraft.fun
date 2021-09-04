/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/mainpage.js":
/*!**********************************!*\
  !*** ./resources/js/mainpage.js ***!
  \**********************************/
/***/ (() => {

var swiper = new Swiper('.swiper-container', {
  // Optional parameters
  autoplay: true,
  direction: 'vertical',
  effect: 'fade',
  loop: true,
  speed: 400,
  noSwiping: true,
  allowTouchMove: false,
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true
  },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  }
});
swiper.on('slideChange', function () {
  var realIndex = swiper.activeIndex;

  if (realIndex == 1) {
    swiper.allowSlidePrev = false;
    $('.swiper-button-prev').addClass('swiper-button-disabled');
    $('.swiper-button-next').removeClass('swiper-button-disabled');
  } else if (realIndex == 5) {
    swiper.allowSlideNext = false;
    $('.swiper-button-next').addClass('swiper-button-disabled');
    $('.swiper-button-prev').removeClass('swiper-button-disabled');
  } else {
    swiper.allowSlideNext = true;
    swiper.allowSlidePrev = true;
    $('.swiper-button-prev').removeClass('swiper-button-disabled');
    $('.swiper-button-next').removeClass('swiper-button-disabled');
  }
});
var $container = $('.grid');
$container.masonry({
  itemSelector: '.grid-item',
  columnWidth: 255,
  gutter: 20,
  fitWidth: true
});
particlesJS.load('particles-js', 'config/particlesjs-config.json');

function cropAndCenterImage(el, size) {
  //el = img wrapper
  //img = img element
  if (size === undefined || size === null) {
    size = 154;
  }

  var $el = $(el);
  var $img = $(el + " img"); //console.log($el);
  //console.log($img);

  $img.width("auto").height("auto");
  var imgWidth = $img.width();
  var imgHeight = $img.height(); //console.log(imgHeight, imgWidth);
  //hopefully that returns the img to it's default height and width by making the inline style to empty quotes

  if (imgWidth > imgHeight) {
    //Crop image
    //console.log("width greater than height");
    if (imgHeight >= size) {
      //console.log("hit if");
      $img.height(size);
      imgHeight = $img.height();
      imgWidth = $img.width();
      $el.height(imgHeight).width(imgHeight);
    } else {
      //console.log("hit else");
      $el.height(imgHeight).width(imgHeight);
      $img.height(imgHeight).width(imgWidth);
    } //Center image horizontally


    var leftInt = (imgWidth - $el.width()) / 2;
    $img.css({
      "margin-left": "-" + leftInt + "px",
      "margin-top": "0"
    });
  } else {
    //Crop image
    //console.log("height greater than width");
    if (imgWidth >= size) {
      $img.width(size);
      imgHeight = $img.height();
      imgWidth = $img.width();
      $el.height(imgWidth).width(imgWidth);
    } else {
      $el.height(imgWidth).width(imgWidth);
      $img.height(imgHeight).width(imgWidth);
    }

    imgHeight = $img.height(); //Center image vertically

    var topInt = (imgHeight - $el.height()) / 2; //console.log(topInt);

    $img.css({
      "margin-top": "-" + topInt + "px",
      "margin-left": "0"
    });
  }
}

$(function () {
  $('#navbutton').click(function () {
    $('#MenuClosed').toggleClass('hidden');
    $('#MenuOpened').toggleClass('hidden');
  }); // var classes = $('.grid-item').attr('class').split(' ');
  //
  // for(var i=0; i < classes.length; i++){
  //    cropAndCenterImage(".news-img", $('.'+classes[i]).height());
  // }
  // cropAndCenterImage(".news-img", $('.news-img').attr('class').split(' ')[1].height());
});

/***/ }),

/***/ "./resources/css/layout.css":
/*!**********************************!*\
  !*** ./resources/css/layout.css ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/css/homepage.css":
/*!************************************!*\
  !*** ./resources/css/homepage.css ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/css/errors_style.css":
/*!****************************************!*\
  !*** ./resources/css/errors_style.css ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/mainpage": 0,
/******/ 			"css/errors_style": 0,
/******/ 			"css/homepage": 0,
/******/ 			"css/layout": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			for(moduleId in moreModules) {
/******/ 				if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 					__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 				}
/******/ 			}
/******/ 			if(runtime) var result = runtime(__webpack_require__);
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkIds[i]] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/errors_style","css/homepage","css/layout"], () => (__webpack_require__("./resources/js/mainpage.js")))
/******/ 	__webpack_require__.O(undefined, ["css/errors_style","css/homepage","css/layout"], () => (__webpack_require__("./resources/css/layout.css")))
/******/ 	__webpack_require__.O(undefined, ["css/errors_style","css/homepage","css/layout"], () => (__webpack_require__("./resources/css/homepage.css")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/errors_style","css/homepage","css/layout"], () => (__webpack_require__("./resources/css/errors_style.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;