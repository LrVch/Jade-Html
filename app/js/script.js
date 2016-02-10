$(document).ready(function() {

  /*************** myModule ***************/
  var myModule = (function () {

    function init() {
      _setUpListners();
      _modules();
    };

    function _setUpListners() {
      $('#id').on('click', _doSome);
    };

    function _modules() {
      console.log("ready");
    };

    function _doSome(e) {
      e.preventDefault();
    };

    return {
      init: init
    };

  })(); // => END module

  // Вызов модуля
  if (true) {
    myModule.init();
  }
  /***************END myModule***************/

});
