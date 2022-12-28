window.addEventListener('load', function(event) {
    $("body").toggleClass( "loading-done" );

    $('.lazy').Lazy({
          scrollDirection: 'vertical',
          placeholder: "https://slrncl.com/moments/assets/img/loader.gif",
          effect: 'fadeIn',
          effectTime: 1000,
          threshold: 0,
          visibleOnly: true,
          onError: function(element) {
              console.log('error loading ' + element.data('src'));
          }
      });
});

$(document).ready(function(){

  var activediapo = "";
  var lightboximage = "";
  var nextlightboximage = "";
  var previouslightboximage = "";

  $('.une-diapo').on( 'click', function() {
    activediapo = $(this);
    lightboximage = $(this).attr('data-image-src');
    nextlightboximage = activediapo.parent().next().find('.une-diapo').attr('data-image-src');
    previouslightboximage = activediapo.parent().prev().find('.une-diapo').attr('data-image-src');

     $('#body').prepend(
      '<div class="lightbox-container">' +
        '<div class="close-lightbox">Close</div>' +
        '<div class="prev-image"><<</div>' +
        '<div class="next-image">>></div>' +
        '<img src="' + lightboximage + '" class="lightbox-image"/>' +
        '<div class="lightbox-image-name">' + lightboximage.substr(42) + ' </div>' +
      '</div>'
    );

  });

  $(document).on("click", ".close-lightbox" , function() {
    $(this).parent().remove();
  });

  $(document).on("click", ".next-image" , function() {
    activediapo = activediapo.parent().next().find('.une-diapo');
    nextlightboximage = activediapo.parent().next().find('.une-diapo').attr('data-image-src');
    $( ".lightbox-image" ).attr( "src", nextlightboximage );
    $( ".lightbox-image-name" ).html( nextlightboximage.substr(42) );
  });

  $(document).on("click", ".prev-image" , function() {
    activediapo = activediapo.parent().prev().find('.une-diapo');
    previouslightboximage = activediapo.parent().prev().find('.une-diapo').attr('data-image-src');
    $( ".lightbox-image" ).attr( "src", previouslightboximage );
    $( ".lightbox-image-name" ).html( previouslightboximage.substr(42) );
  });

});
