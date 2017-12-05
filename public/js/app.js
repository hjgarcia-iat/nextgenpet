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
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(2);


/***/ }),
/* 1 */
/***/ (function(module, exports) {

$(function () {
    $('.page-side-menu a[data-file="true"]').on('click', function (e) {
        e.preventDefault();

        var index = $(this).index();

        $('.page-side-menu a.active').removeClass('active');
        $(this).siblings('a').removeClass('active');

        $(this).addClass('active');

        $('#html-content').hide().siblings('#pdf-content').show();
        $('#pdf-content').html('<h3>' + $(this).text() + '</h3><iframe class="iframe" src="' + $(this).attr('href') + '"></iframe>');
    });

    $('li.dropdown').on('show.bs.dropdown', function () {
        $(this).siblings('li').find('.dropdown-menu.shown').removeClass('shown show').slideUp();
    });

    $('.sps').Stickyfill();

    $('#mobileCloseBtn').bind('click', function (e) {
        e.preventDefault();
        $("#js-bootstrap-offcanvas").trigger("offcanvas.toggle");
    });
});

/***/ }),
/* 2 */
/***/ (function(module, exports) {

throw new Error("Module build failed: ModuleBuildError: Module build failed: \n        color       : $general-color-orange;ew\n                                           ^\n      Property \"ew\" must be followed by a ':'\n      in /Users/henrygarcia/Desktop/Code/activatelearning/nextgenpet.activatelearning.com/resources/assets/sass/theme/_header.scss (line 109, column 45)\n    at runLoaders (/Users/henrygarcia/Desktop/Code/activatelearning/nextgenpet.activatelearning.com/node_modules/webpack/lib/NormalModule.js:195:19)\n    at /Users/henrygarcia/Desktop/Code/activatelearning/nextgenpet.activatelearning.com/node_modules/loader-runner/lib/LoaderRunner.js:364:11\n    at /Users/henrygarcia/Desktop/Code/activatelearning/nextgenpet.activatelearning.com/node_modules/loader-runner/lib/LoaderRunner.js:230:18\n    at context.callback (/Users/henrygarcia/Desktop/Code/activatelearning/nextgenpet.activatelearning.com/node_modules/loader-runner/lib/LoaderRunner.js:111:13)\n    at Object.asyncSassJobQueue.push [as callback] (/Users/henrygarcia/Desktop/Code/activatelearning/nextgenpet.activatelearning.com/node_modules/sass-loader/lib/loader.js:55:13)\n    at Object.<anonymous> (/Users/henrygarcia/Desktop/Code/activatelearning/nextgenpet.activatelearning.com/node_modules/sass-loader/node_modules/async/dist/async.js:2257:31)\n    at Object.callback (/Users/henrygarcia/Desktop/Code/activatelearning/nextgenpet.activatelearning.com/node_modules/sass-loader/node_modules/async/dist/async.js:958:16)\n    at options.error (/Users/henrygarcia/Desktop/Code/activatelearning/nextgenpet.activatelearning.com/node_modules/node-sass/lib/index.js:294:32)");

/***/ })
/******/ ]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAgMjc0ZmZhZDRhNjlmY2U4OTE3Y2YiLCJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Fzc2V0cy9qcy9hcHAuanMiXSwibmFtZXMiOlsiJCIsIm9uIiwiZSIsInByZXZlbnREZWZhdWx0IiwiaW5kZXgiLCJyZW1vdmVDbGFzcyIsInNpYmxpbmdzIiwiYWRkQ2xhc3MiLCJoaWRlIiwic2hvdyIsImh0bWwiLCJ0ZXh0IiwiYXR0ciIsImZpbmQiLCJzbGlkZVVwIiwiU3RpY2t5ZmlsbCIsImJpbmQiLCJ0cmlnZ2VyIl0sIm1hcHBpbmdzIjoiO0FBQUE7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7OztBQUdBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLGFBQUs7QUFDTDtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBLG1DQUEyQiwwQkFBMEIsRUFBRTtBQUN2RCx5Q0FBaUMsZUFBZTtBQUNoRDtBQUNBO0FBQ0E7O0FBRUE7QUFDQSw4REFBc0QsK0RBQStEOztBQUVySDtBQUNBOztBQUVBO0FBQ0E7Ozs7Ozs7Ozs7Ozs7OztBQzdEQUEsRUFBRSxZQUFZO0FBQ1ZBLE1BQUUscUNBQUYsRUFBeUNDLEVBQXpDLENBQTRDLE9BQTVDLEVBQXFELFVBQVVDLENBQVYsRUFBYTtBQUM5REEsVUFBRUMsY0FBRjs7QUFFQSxZQUFJQyxRQUFRSixFQUFFLElBQUYsRUFBUUksS0FBUixFQUFaOztBQUVBSixVQUFFLDBCQUFGLEVBQThCSyxXQUE5QixDQUEwQyxRQUExQztBQUNBTCxVQUFFLElBQUYsRUFBUU0sUUFBUixDQUFpQixHQUFqQixFQUFzQkQsV0FBdEIsQ0FBa0MsUUFBbEM7O0FBRUFMLFVBQUUsSUFBRixFQUFRTyxRQUFSLENBQWlCLFFBQWpCOztBQUVBUCxVQUFFLGVBQUYsRUFBbUJRLElBQW5CLEdBQTBCRixRQUExQixDQUFtQyxjQUFuQyxFQUFtREcsSUFBbkQ7QUFDQVQsVUFBRSxjQUFGLEVBQWtCVSxJQUFsQixDQUF1QixTQUFTVixFQUFFLElBQUYsRUFBUVcsSUFBUixFQUFULEdBQTBCLG1DQUExQixHQUFnRVgsRUFBRSxJQUFGLEVBQVFZLElBQVIsQ0FBYSxNQUFiLENBQWhFLEdBQXVGLGFBQTlHO0FBRUgsS0FiRDs7QUFlQVosTUFBRSxhQUFGLEVBQWlCQyxFQUFqQixDQUFvQixrQkFBcEIsRUFBd0MsWUFBWTtBQUNoREQsVUFBRSxJQUFGLEVBQVFNLFFBQVIsQ0FBaUIsSUFBakIsRUFBdUJPLElBQXZCLENBQTRCLHNCQUE1QixFQUFvRFIsV0FBcEQsQ0FBZ0UsWUFBaEUsRUFBOEVTLE9BQTlFO0FBQ0gsS0FGRDs7QUFJQWQsTUFBRSxNQUFGLEVBQVVlLFVBQVY7O0FBRUFmLE1BQUUsaUJBQUYsRUFBcUJnQixJQUFyQixDQUEwQixPQUExQixFQUFtQyxVQUFVZCxDQUFWLEVBQWE7QUFDNUNBLFVBQUVDLGNBQUY7QUFDQUgsVUFBRSx5QkFBRixFQUE2QmlCLE9BQTdCLENBQXFDLGtCQUFyQztBQUNILEtBSEQ7QUFJSCxDQTFCRCxFIiwiZmlsZSI6Ii9qcy9hcHAuanMiLCJzb3VyY2VzQ29udGVudCI6WyIgXHQvLyBUaGUgbW9kdWxlIGNhY2hlXG4gXHR2YXIgaW5zdGFsbGVkTW9kdWxlcyA9IHt9O1xuXG4gXHQvLyBUaGUgcmVxdWlyZSBmdW5jdGlvblxuIFx0ZnVuY3Rpb24gX193ZWJwYWNrX3JlcXVpcmVfXyhtb2R1bGVJZCkge1xuXG4gXHRcdC8vIENoZWNrIGlmIG1vZHVsZSBpcyBpbiBjYWNoZVxuIFx0XHRpZihpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXSkge1xuIFx0XHRcdHJldHVybiBpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXS5leHBvcnRzO1xuIFx0XHR9XG4gXHRcdC8vIENyZWF0ZSBhIG5ldyBtb2R1bGUgKGFuZCBwdXQgaXQgaW50byB0aGUgY2FjaGUpXG4gXHRcdHZhciBtb2R1bGUgPSBpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXSA9IHtcbiBcdFx0XHRpOiBtb2R1bGVJZCxcbiBcdFx0XHRsOiBmYWxzZSxcbiBcdFx0XHRleHBvcnRzOiB7fVxuIFx0XHR9O1xuXG4gXHRcdC8vIEV4ZWN1dGUgdGhlIG1vZHVsZSBmdW5jdGlvblxuIFx0XHRtb2R1bGVzW21vZHVsZUlkXS5jYWxsKG1vZHVsZS5leHBvcnRzLCBtb2R1bGUsIG1vZHVsZS5leHBvcnRzLCBfX3dlYnBhY2tfcmVxdWlyZV9fKTtcblxuIFx0XHQvLyBGbGFnIHRoZSBtb2R1bGUgYXMgbG9hZGVkXG4gXHRcdG1vZHVsZS5sID0gdHJ1ZTtcblxuIFx0XHQvLyBSZXR1cm4gdGhlIGV4cG9ydHMgb2YgdGhlIG1vZHVsZVxuIFx0XHRyZXR1cm4gbW9kdWxlLmV4cG9ydHM7XG4gXHR9XG5cblxuIFx0Ly8gZXhwb3NlIHRoZSBtb2R1bGVzIG9iamVjdCAoX193ZWJwYWNrX21vZHVsZXNfXylcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubSA9IG1vZHVsZXM7XG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlIGNhY2hlXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmMgPSBpbnN0YWxsZWRNb2R1bGVzO1xuXG4gXHQvLyBkZWZpbmUgZ2V0dGVyIGZ1bmN0aW9uIGZvciBoYXJtb255IGV4cG9ydHNcbiBcdF9fd2VicGFja19yZXF1aXJlX18uZCA9IGZ1bmN0aW9uKGV4cG9ydHMsIG5hbWUsIGdldHRlcikge1xuIFx0XHRpZighX193ZWJwYWNrX3JlcXVpcmVfXy5vKGV4cG9ydHMsIG5hbWUpKSB7XG4gXHRcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsIG5hbWUsIHtcbiBcdFx0XHRcdGNvbmZpZ3VyYWJsZTogZmFsc2UsXG4gXHRcdFx0XHRlbnVtZXJhYmxlOiB0cnVlLFxuIFx0XHRcdFx0Z2V0OiBnZXR0ZXJcbiBcdFx0XHR9KTtcbiBcdFx0fVxuIFx0fTtcblxuIFx0Ly8gZ2V0RGVmYXVsdEV4cG9ydCBmdW5jdGlvbiBmb3IgY29tcGF0aWJpbGl0eSB3aXRoIG5vbi1oYXJtb255IG1vZHVsZXNcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubiA9IGZ1bmN0aW9uKG1vZHVsZSkge1xuIFx0XHR2YXIgZ2V0dGVyID0gbW9kdWxlICYmIG1vZHVsZS5fX2VzTW9kdWxlID9cbiBcdFx0XHRmdW5jdGlvbiBnZXREZWZhdWx0KCkgeyByZXR1cm4gbW9kdWxlWydkZWZhdWx0J107IH0gOlxuIFx0XHRcdGZ1bmN0aW9uIGdldE1vZHVsZUV4cG9ydHMoKSB7IHJldHVybiBtb2R1bGU7IH07XG4gXHRcdF9fd2VicGFja19yZXF1aXJlX18uZChnZXR0ZXIsICdhJywgZ2V0dGVyKTtcbiBcdFx0cmV0dXJuIGdldHRlcjtcbiBcdH07XG5cbiBcdC8vIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbFxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5vID0gZnVuY3Rpb24ob2JqZWN0LCBwcm9wZXJ0eSkgeyByZXR1cm4gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsKG9iamVjdCwgcHJvcGVydHkpOyB9O1xuXG4gXHQvLyBfX3dlYnBhY2tfcHVibGljX3BhdGhfX1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5wID0gXCJcIjtcblxuIFx0Ly8gTG9hZCBlbnRyeSBtb2R1bGUgYW5kIHJldHVybiBleHBvcnRzXG4gXHRyZXR1cm4gX193ZWJwYWNrX3JlcXVpcmVfXyhfX3dlYnBhY2tfcmVxdWlyZV9fLnMgPSAwKTtcblxuXG5cbi8vIFdFQlBBQ0sgRk9PVEVSIC8vXG4vLyB3ZWJwYWNrL2Jvb3RzdHJhcCAyNzRmZmFkNGE2OWZjZTg5MTdjZiIsIiQoZnVuY3Rpb24gKCkge1xuICAgICQoJy5wYWdlLXNpZGUtbWVudSBhW2RhdGEtZmlsZT1cInRydWVcIl0nKS5vbignY2xpY2snLCBmdW5jdGlvbiAoZSkge1xuICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XG5cbiAgICAgICAgdmFyIGluZGV4ID0gJCh0aGlzKS5pbmRleCgpO1xuXG4gICAgICAgICQoJy5wYWdlLXNpZGUtbWVudSBhLmFjdGl2ZScpLnJlbW92ZUNsYXNzKCdhY3RpdmUnKTtcbiAgICAgICAgJCh0aGlzKS5zaWJsaW5ncygnYScpLnJlbW92ZUNsYXNzKCdhY3RpdmUnKTtcblxuICAgICAgICAkKHRoaXMpLmFkZENsYXNzKCdhY3RpdmUnKTtcblxuICAgICAgICAkKCcjaHRtbC1jb250ZW50JykuaGlkZSgpLnNpYmxpbmdzKCcjcGRmLWNvbnRlbnQnKS5zaG93KCk7XG4gICAgICAgICQoJyNwZGYtY29udGVudCcpLmh0bWwoJzxoMz4nICsgJCh0aGlzKS50ZXh0KCkgKyAnPC9oMz48aWZyYW1lIGNsYXNzPVwiaWZyYW1lXCIgc3JjPVwiJyArICQodGhpcykuYXR0cignaHJlZicpICsgJ1wiPjwvaWZyYW1lPicpO1xuXG4gICAgfSk7XG5cbiAgICAkKCdsaS5kcm9wZG93bicpLm9uKCdzaG93LmJzLmRyb3Bkb3duJywgZnVuY3Rpb24gKCkge1xuICAgICAgICAkKHRoaXMpLnNpYmxpbmdzKCdsaScpLmZpbmQoJy5kcm9wZG93bi1tZW51LnNob3duJykucmVtb3ZlQ2xhc3MoJ3Nob3duIHNob3cnKS5zbGlkZVVwKCk7XG4gICAgfSk7XG5cbiAgICAkKCcuc3BzJykuU3RpY2t5ZmlsbCgpO1xuXG4gICAgJCgnI21vYmlsZUNsb3NlQnRuJykuYmluZCgnY2xpY2snLCBmdW5jdGlvbiAoZSkge1xuICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgICQoXCIjanMtYm9vdHN0cmFwLW9mZmNhbnZhc1wiKS50cmlnZ2VyKFwib2ZmY2FudmFzLnRvZ2dsZVwiKTtcbiAgICB9KVxufSk7XG5cblxuLy8gV0VCUEFDSyBGT09URVIgLy9cbi8vIC4vcmVzb3VyY2VzL2Fzc2V0cy9qcy9hcHAuanMiXSwic291cmNlUm9vdCI6IiJ9