jQuery(function($) {

  var mainHeader = $('.main-header-container');
  var mainMenu = $('#main-menu');
  // var menuItems = mainMenu.find('a');
  // var sections = menuItems.map(function() {
  //   var id = $(this).attr('href').split('#')[1];
  //   if (id) { return $('#' + id); }
  // });

  mainHeader.hcSticky({ stickTo: document });

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

  $('#store-tabs').tabs().find('.store-list .store').click(function () {
    id = $(this).children('a').attr('href');
    map = window.maps[id.replace(/[^-]+-/, '')];
    google.maps.event.trigger(map, 'resize');
    map.setCenter(map.origin);
  });

  // var openingHours = $('#otvaracia-doba');
  // openingHours.find('.show-more').click(function() {
  //   openingHours.find('.day').animate({ height: 'toggle',
  //                                       opacity: 'toggle'});
  //   $(this).toggleClass('opened');
  // });

});

function initMap() {
  var maps = {
    'liptovsky-mikulas': {
      center: { lat: 49.07998, lng: 19.621558 },
       zoom: 15},
    'liptovsky-hradok': {
      center: { lat: 49.038086, lng: 19.717175 },
      zoom: 15}};

  if (!window.maps)
    window.maps = {};
  for (var slug in maps) {
    if (!window.maps[slug]) {
      var elem = document.getElementById('map-' + slug);
      if (elem) {
        map = new google.maps.Map(elem, maps[slug]);
        new google.maps.Marker({
          position: map.getCenter(),
          map: map});
        window.maps[slug] = map;
        window.maps[slug].origin = maps[slug].center;
      }
    }
  }
}

// google.maps.event.addDomListener(window, 'load', initMap);


