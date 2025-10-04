(function(){
  window.App = {
    init: function(){
      // Basic init
    }
  };
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', App.init);
  } else {
    App.init();
  }
})();