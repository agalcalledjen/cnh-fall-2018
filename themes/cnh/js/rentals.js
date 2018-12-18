(function($) {
  $(function() {
    // const $carousel = $('.main-carousel').each(function() {
    //   $(this).flickity({
    //     cellAlign: 'left',
    //     constain: true
    //   });
    // });
    // const $roomsList = $('.rooms-carousel-list');
    // const $roomsListItem = $roomsList.find('li');
    // $roomsListItem.eq(0).addClass('is-selected');

    if ($(window).width() < 600) {
      $('.room-title').on('click', function() {
        $('.room-title').removeClass('mobile-active');
        $(this).addClass('mobile-active');
        $('.room-content').hide();
        $(this)
          .next()
          .toggle();
      });
    }
    if ($(window).width() > 600) {
      $('.rooms-carousel-list li').on('click', function() {
        let roomId = $(this).attr('data-id');
        $('.room-content').css('display', 'inline');
        $('.rooms-carousel-list li:first').addClass('list-active');
        $('.rooms-carousel-list li').removeClass('list-active');
        $(this).addClass('list-active');
        $('.room-separate').hide();
        $('.room-separate[data-id="' + roomId + '"]').toggle();
      });
    }
  }); // end of doc ready
})(jQuery);
