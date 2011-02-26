$(document).ready(function() {
    $('#search-btn').click(function() {
      $('#search-card').animate({top: -1000}, 'slow');
      $('#register-account-card').css({top: $(document).height() + 10}).animate({top: 182}, 'slow');
    });
});