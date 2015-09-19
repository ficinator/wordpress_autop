jQuery(function($) {

  var mainHeader = $('.main-header-container');
  var mainMenu = $('#main-menu');
  var slider = $('#slider');
  // var menuItems = mainMenu.find('a');
  // var sections = menuItems.map(function() {
  //   var id = $(this).attr('href').split('#')[1];

  //   if (id) { return $('#' + id); }
  // });

  slider.slick({
    arrows: false,
    centerMode: false,
    variableWidth: false,
    responsive: [
      {
        breakpoint: 1280,
        settings: {
          centerMode: true,
          variableWidth: true
        }
      }
    ]
  });

  // $(window).resize(function() {
  //   if ($(window).width() >= 1280)
  //     slider.slick('slickSetOption', 'centerMode', true, true);
  // })

  // $(window).scroll(function() {
  //   var fromTop = $(this).scrollTop();
  //   var section = sections.map(function() {
  //     if ($(this).offset().top < fromTop) {
  //       return this;
  //     }
  //   });
  //   section = section[section.length - 1];
  //   var id =
  // });

  $('#store-tabs').tabs({
    show: { effect: 'fade', duration: 500 },
    hide: { effect: 'fade', duration: 100 }
  }).find('.store-title').click(function () {
    id = $(this).children('a').attr('href');
    marker = window.markers[id.replace(/[^-]+-/, '')];
    window.map.panTo(marker);
  });

  // var openingHours = $('#otvaracia-doba');
  // openingHours.find('.show-more').click(function() {
  //   openingHours.find('.day').animate({ height: 'toggle',
  //                                       opacity: 'toggle'});
  //   $(this).toggleClass('opened');
  // });

  $('.mc4wp-alert').click(function() {
    $(this).fadeOut();
  });

  $('.gallery').slick({
    arrows: false,
    slidesToShow: 4,
    variableWidth: true,
    infinite: false
  });

  mainHeader.hcSticky();
  $('#sidebar').hcSticky({ top: mainHeader.height()});

});

function initMap() {
  markers = {
    'liptovsky-mikulas': { lat: 49.07998, lng: 19.621558 },
    'liptovsky-hradok': { lat: 49.038086, lng: 19.717175 }};

  elem = document.getElementById('map');
  map = new google.maps.Map(elem, {
    center: markers['liptovsky-mikulas'],
    zoom: 13 });
  for (slug in markers) {
    marker = new google.maps.Marker({
      position: markers[slug],
      map: map});
  }
  window.markers = markers;
  window.map = map;
}
