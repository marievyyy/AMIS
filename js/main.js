jQuery(function($) {'use strict',
	
	//Countdown js
	 $("#countdown").countdown({
			date: "10 july 2017 12:00:00",
			format: "on"
		},
		
		function() {
			// callback function
		});
	

	
	//Scroll Menu

	function menuToggle()
	{
		var windowWidth = $(window).width();

		if(windowWidth > 767 ){
			$(window).on('scroll', function(){
				if( $(window).scrollTop()>405 ){
					$('.main-nav').addClass('fixed-menu animated slideInDown');
				} else {
					$('.main-nav').removeClass('fixed-menu animated slideInDown');
				}
			});
		}else{
			
			$('.main-nav').addClass('fixed-menu animated slideInDown');
				
		}
	}

	menuToggle();
	
	
	// Carousel Auto Slide Off
	$('#event-carousel, #twitter-feed, #sponsor-carousel ').carousel({
		interval: false
	});


	$( window ).resize(function() {
		menuToggle();
	});


});

$(document).ready(function(){

  // =============== INITIAL TWEAKS ================= //

  $('ul.nav').on('click', 'li', function(e){
	var x = e.target.id;

	$(this).children().removeClass('active');
	$('#nav' + x).addClass('active');

  });

  var link = window.location.href;
  var amis = "http://amis.likesyou.org/";
  var events = amis + "events";
  var announcements = amis + "announcement";
  var accomplishments = amis + "accomplishments";
  var about = amis + "about";
  
  if(link == amis) {
  	$('ul.nav').children().removeClass('active');
  	$('#navhome').addClass('active');
  } else if(link == events) {
  	$('ul.nav').children().removeClass('active');
  	$('#navevents').addClass('active');	
  } else if(link == announcements) {
  	$('ul.nav').children().removeClass('active');
  	$('#navannouncements').addClass('active');	
  } else if(link == about || link == accomplishments) {
  	$('ul.nav').children().removeClass('active');
  	$('#navabout').addClass('active');	
  }

  // ============ PASSWORD STRENGTH ============ //

    var result = $(".strength");
  
    $('#newPassword').keyup(function(){
        $(".result").html(checkStrength($('#newPassword').val()))
    })
 
    function checkStrength(password){
 
        //initial strength
        var strength = 0
        
        if (password.length == 0) {
            result.removeClass()
            return ''
        }
        //if the password length is less than 6, return message.
        if (password.length < 6) {
            result.removeClass()
            result.addClass('short')
            return 'too short'
        }
     
        //length is ok, lets continue.
     
        //if length is 8 characters or more, increase strength value
        if (password.length > 7) strength += 1
     
        //if password contains both lower and uppercase characters, increase strength value
        if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/))  strength += 1
     
        //if it has numbers and characters, increase strength value
        if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/))  strength += 1
     
        //if it has one special character, increase strength value
        if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/))  strength += 1
     
        //if it has two special characters, increase strength value
        if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,",%,&,@,#,$,^,*,?,_,~])/)) strength += 1
     
        //now we have calculated strength value, we can return messages
     
        //if value is less than 2
        if (strength < 2) {
            result.removeClass()
            result.addClass('weak')
            return 'weak'
        } else if (strength == 2 ) {
            result.removeClass()
            result.addClass('good')
            return 'good'
        } else {
            result.removeClass()
            result.addClass('strong')
            return 'strong'
        }

    }
  
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
          $('#sender').attr('placeholder', 'Name').css('border', '0');
          $('#emailAddress').attr('placeholder', 'Email').css('border', '0');
          $('#messageDetails').attr('placeholder', 'Message').css('border', '0');
          $('.submit-message').val("Message Sent! ✔");
          setTimeout(function(){
          	$('.submit-message').val("Submit!");
          }, 500)
        } else {
          $.each(response.messages, function(key, value){
            $('#' + key).attr('placeholder', value).css('border', '1px solid red');;
            if(value == ""){
            	$('#' + key).css('border', '0');
            }
          });
        }
      }
    });
  }); 
});



