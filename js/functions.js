jQuery(function($) {

  // var pageHeader = $('#page-header');
  var mainMenu = $('#main-menu');
  // var menuItems = mainMenu.find('a');
  // var sections = menuItems.map(function() {
  //   var id = $(this).attr('href').split('#')[1];
  //   if (id) { return $('#' + id); }
  // });

  mainMenu.hcSticky({ stickTo: document });

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

  var openingHours = $('#otvaracia-doba');
  openingHours.find('.show-more').click(function() {
    openingHours.find('.day').slideToggle();
    $(this).toggleClass('opened');
  });

});
