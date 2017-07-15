$(document).ready(function(){
  slider();

  // =============== SUBMIT MESSAGE ================= //

  $('#messageus').submit(function(e){
    e.preventDefault();

    var me = $(this);

    $.ajax({
      url: me.attr('action'), 
      type: 'post',
      data: me.serialize(),
      dataType: 'json',
      success: function(response){
        if(response.success == true) {
          me[0].reset();
          me.children().css('border', '0');
          $('.submit-message').val("Message Sent! ✔");
        } else {
          $.each(response.messages, function(key, value){
            $('#' + key).attr('placeholder', value)
                  .css('border', '1px solid red');
          });
        }
      }
    });
  }); 
});

function slider(){
  var $item = $('.carousel .item'); 
  var $wHeight = $(window).height();
  $item.eq(0).addClass('active');
  $item.height($wHeight); 
  $item.addClass('full-screen');

  $('.carousel img').each(function() {
    var $src = $(this).attr('src');
    var $color = $(this).attr('data-color');
    $(this).parent().css({
      'background-image' : 'url(' + $src + ')',
      'background-color' : $color
    });
    $(this).remove();
  });

  $(window).on('resize', function (){
    $wHeight = $(window).height();
    $item.height($wHeight);
  });

  $('.carousel').carousel({
    interval: 6000,
    pause: "false"
  });
}