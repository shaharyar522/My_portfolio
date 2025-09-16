if ($('.typed').length) {
  var typed_strings = $(".typed").data('typed-items').split(',')
  new Typed('.typed', {
    strings: typed_strings,
    loop: true,
    typeSpeed: 30,   // faster typing
    backSpeed: 20,   // faster erase
    backDelay: 800   // shorter pause
  });
}
