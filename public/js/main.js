/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/resources/js/main.js":
/*!*************************************!*\
  !*** ./assets/resources/js/main.js ***!
  \*************************************/
/***/ (() => {

// ВЫЗОВ BURGER MENU
var burgerMenu = document.querySelector('#burger_menu');
var burgerBtnOpen = document.querySelector('#burger_btn_open');
var burgerBtnClose = document.querySelector('#burger_btn_close');
var hamburger = function hamburger() {
  burgerMenu.classList.toggle('hidden');
  burgerMenu.classList.toggle('flex');
};
burgerBtnOpen.addEventListener('click', hamburger);
burgerBtnClose.addEventListener('click', hamburger);
// ВЫЗОВ BURGER MENU

// Передача значений inputs из offet_form_mini в offer_form_modal и обратно START

var offerFormMiniInputs = document.querySelectorAll('#offer_form_mini input');
var offerFormModalInputs = document.querySelectorAll('#offer_form_modal input');
offerFormMiniInputs.forEach(function (el, index) {
  el.addEventListener('input', function () {
    var offerFormModalInputsName = document.querySelector("#offer_form_modal input[ name=".concat(el.name, "]"));
    offerFormModalInputsName.value = el.value;
  });
});
var _loop = function _loop(i) {
  offerFormModalInputs[i].addEventListener('input', function () {
    var _document$querySelect;
    var offerFormMiniInputsName = (_document$querySelect = document.querySelector("#offer_form_mini input[name=".concat(offerFormModalInputs[i].name, "]"))) !== null && _document$querySelect !== void 0 ? _document$querySelect : null;
    if (offerFormMiniInputsName !== null) {
      offerFormMiniInputsName.value = offerFormModalInputs[i].value;
    }
  });
};
for (var i = 0; i < offerFormModalInputs.length; i++) {
  _loop(i);
}
// Передача значений inputs из offer_form_mini в offer_form_modal и обратно END

/***/ }),

/***/ "./assets/resources/js/offer_form.js":
/*!*******************************************!*\
  !*** ./assets/resources/js/offer_form.js ***!
  \*******************************************/
/***/ (() => {

// *** маска телефона ***
document.getElementsByName('phone').forEach(function (el) {
  IMask(el, {
    mask: '+{7}(000)-000-00-00'
  });
});
// *** маска телефона ***

// Форма мини при "Запросить КП" START
var offerFormMini = document.getElementById('offer_form_mini');
var offerFormMiniOpen = document.getElementsByClassName('offer_mini__open');
for (var i = 0; i < offerFormMiniOpen.length; i++) {
  offerFormMiniOpen[i].addEventListener('click', function () {
    offerFormMini.classList.toggle('hidden');
    offerFormMini.classList.toggle('flex');
  });
}
// Форма мини при "Запросить КП" END

// Форма модальное окно при "Добавить поле" в offer_form_mini START
var modal = document.getElementById("my-modal");
var openModal = document.querySelector(".open-btn");

// Open Modal
openModal.addEventListener('click', function () {
  modal.style.display = "block";
  offerFormMini.classList.add('hidden');
});

// Close Modal
var closeModal = document.getElementById("close-btn");
closeModal.onclick = function () {
  modal.style.display = "none";
  offerFormMini.classList.remove('hidden');
  offerFormMini.classList.add('flex');
};
// Форма модальное окно при "Добавить поле" в offer_form_mini END
$(document).ready(function () {
  var formMini = $('#offer_form_mini');
  var form = $('#offer_form_modal');
  formOfferSubmit(formMini, '-mini');
  formOfferSubmit(form);
  function formOfferSubmit(formID) {
    var typeForm = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : '';
    var form = $(formID);
    $(form).on('submit', function (e) {
      $(".pop_up__input").removeClass("has-error");
      $(".error-message").remove();
      var data = $(form).serializeArray();
      $.post('assets/base/snippets/form_processing.php', data, function (response) {
        response = JSON.parse(response);
        console.log(response);
        if (!response.success) {
          if (response.errors.count) {
            $.each(response.errors.count, function (index, value) {
              $("#group-".concat(index).concat(typeForm)).children('.pop_up__input').addClass('has-error');
              $("#group-".concat(index).concat(typeForm)).append(value);
            });
          }
          if (response.errors.phone) {
            $("#group-phone".concat(typeForm, " input")).addClass('has-error');
            $("#group-phone".concat(typeForm)).append('<div class="help-block">' + response.errors.phone + '</div>');
          }
          if (response.errors.email) {
            $("#group-email".concat(typeForm, " input")).addClass('has-error');
            $("#group-email".concat(typeForm)).append('<div class="help-block">' + response.errors.email + '</div>');
          }
          // else {
          //     $(formID).html(
          //         '<div class="alert alert-success flex flex-col justify-center items-center gap-y-4 py-24 px-10">' +
          //         '<p class="text-66B645">Спасибо за вашу заявку!</p>' +
          //         '<p>Мы свяжемся с вами в ближайшее время, чтобы обсудить детали</p>' +
          //         '</div>'
          //     );
          // }
        }
      }).fail(function () {
        $(formID).html('<div class="alert alert-danger">Не получилось отправить форму, попробуйте позже.</div>');
      });
      e.preventDefault();
    });
  }

  // $(document).ready(() => {
  //
  // let formMini = $('#offer_form_mini');
  // $(formMini).on('submit', (e) => {
  //
  //     $(".pop_up__input").removeClass("has-error");
  //     $(".error-message").remove();
  //
  //     const data = $(formMini).serializeArray();
  //
  //     $.post('assets/base/snippets/form_processing.php', data, (response) => {
  //         response = JSON.parse(response)
  //         console.log(response)
  //         if (!response.success) {
  //
  //             if (response.errors.count) {
  //                 $.each(response.errors.count, (index, value) => {
  //                     $(`#group-${index}-mini`).children('.pop_up__input').addClass('has-error');
  //                     $(`#group-${index}-mini`).append(
  //                         value
  //                     );
  //                 })
  //             }
  //
  //             if (response.errors.phone) {
  //                 $('#group-phone-mini input').addClass('has-error');
  //                 $('#group-phone-mini').append(
  //                     '<div class="help-block">' + response.errors.phone + '</div>'
  //                 );
  //             }
  //             if (response.errors.email) {
  //                 $('#group-email-mini input').addClass('has-error');
  //                 $('#group-email-mini').append(
  //                     '<div class="help-block">' + response.errors.email + '</div>'
  //                 );
  //             } else {
  //                 $("#offer_form_mini").html(
  //                     '<div class="alert alert-success flex flex-col justify-center items-center gap-y-4 py-24 px-10">' +
  //                     '<p class="text-66B645">Спасибо за вашу заявку!</p>' +
  //                     '<p>Мы свяжемся с вами в ближайшее время, чтобы обсудить детали</p>' +
  //                     '</div>'
  //                     // '<div class="alert alert-success">' + response.message + "</div>"
  //                 );
  //             }
  //         }
  //     })
  //         .fail(() => {
  //             $("#offer_form_mini").html(
  //                 '<div class="alert alert-danger">Не получилось отправить форму, попробуйте позже.</div>'
  //             );
  //         })
  //
  //
  //     e.preventDefault();
  // })
});

/***/ }),

/***/ "./assets/resources/js/pagination.js":
/*!*******************************************!*\
  !*** ./assets/resources/js/pagination.js ***!
  \*******************************************/
/***/ (() => {

document.addEventListener("DOMContentLoaded", function () {
  var searchForm = document.querySelector('#search-form');
  searchForm.addEventListener('submit', function (e) {
    var searchField = document.querySelector('#default-search');
    var searchingString = searchField.value;
    var option = {
      "task": "updateFilter",
      "props": {
        "view": ["form_materials", "connect_size_1", "connect_size_2", "connect_type_1", "connect_type_2"],
        "search": searchingString
      }
      // 'task': 'updateTable',
      // 'props': {
      //     "level": 0,
      //     "SeriaId": "_17",
      //     "tableId": 6,
      //     "offset": 5,
      //     "limit": 10,
      //     "sort": false,
      //     "filter": {
      //         'view': ["form_materials", "connect_size_1", "connect_size_2", "connect_type_1", "connect_type_2"],
      //         'search': 'ss',
      //     }
      // }
    };
    // console.log(option);

    fetch('http://avy.ru:575', {
      method: 'post',
      headers: {
        'Content-Type': 'application/json;charset=utf-8'
      },
      // body: option
      body: JSON.stringify(option)
    }).then(function (response) {
      console.log(response);
      return response;
    }).then(function (result) {
      return console.log(result);
    });
    e.preventDefault();
  });
});

/***/ }),

/***/ "./assets/resources/styles/scss/style.scss":
/*!*************************************************!*\
  !*** ./assets/resources/styles/scss/style.scss ***!
  \*************************************************/
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
/******/ 			"/public/js/main": 0,
/******/ 			"public/css/style": 0
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
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunkswagelok_modx"] = self["webpackChunkswagelok_modx"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["public/css/style"], () => (__webpack_require__("./assets/resources/js/main.js")))
/******/ 	__webpack_require__.O(undefined, ["public/css/style"], () => (__webpack_require__("./assets/resources/js/offer_form.js")))
/******/ 	__webpack_require__.O(undefined, ["public/css/style"], () => (__webpack_require__("./assets/resources/js/pagination.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["public/css/style"], () => (__webpack_require__("./assets/resources/styles/scss/style.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;