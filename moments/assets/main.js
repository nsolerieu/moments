window.addEventListener('load', function(event) {
    $("body").toggleClass( "loading-done" );

    $('.lazy').Lazy({
          scrollDirection: 'vertical',
          placeholder: "https://slrncl.com/dev/moments/assets/img/loader.gif",
          effect: 'fadeIn',
          effectTime: 1000,
          threshold: 0,
          visibleOnly: true,
          onError: function(element) {
              console.log('error loading ' + element.data('src'));
          }
      });
});
