$(document).ready(function(){
    $("#update-account-profile").hover(function(){
        $(this).html("Save Profile");
    });

    $('form').bind('submit', function () {
        $(this).find('option').prop('disabled', false);
    });

    $("#update-account").hover(function(){
        $(this).html("Save Account");
    });

    // Edit User Personal Profile
    $("#editProfile").submit(function(e){
        e.preventDefault();

        var me = $(this);

        $.ajax({
            url: me.attr('action'), 
            type: 'post',
            data: me.serialize(),
            dataType: 'json',
            success: function(response){
                if(response.success == true){
                    $("#update-account-profile").html("Profile Updated! ✔");
                    setTimeout(function(){
                        window.location.href = "http://amis.likesyou.org/profile";
                    }, 2000);
                } else {
                    $.each(response.messages, function(key, value){
                        $("#update-account-profile").html("Check your inputs!");
                        $("#" + key + "Error").css("color", "#E66161").text(value);
                        $("#" + key).css("border", "1px solid red");
                        if(value == ""){
                            $("#" + key + "Error").text("");
                            $("#" + key).css("border", "rgb(238, 238, 238)");
                        }
                    });
                }
            }
        });
    });

    // Edit User Personal Profile
    $("#editAccount").submit(function(e){
        e.preventDefault();

        var me = $(this);

        $.ajax({
            url: me.attr('action'), 
            type: 'post',
            data: me.serialize(),
            dataType: 'json',
            success: function(response){
                if(response.success == true){
                    $("#update-account").html("Profile Account Updated! ✔");
                    setTimeout(function(){
                        window.location.href = "http://amis.likesyou.org/profile";
                    }, 2000);
                } else {
                    $.each(response.messages, function(key, value){
                        $("#password").val("");
                        $("#newPassword").val("");
                        $("#renewPassword").val("");
                        $("#update-account").html("Check your inputs!");
                        $("#" + key + "Error").css("color", "#E66161").text(value);
                        $("#" + key).css("border", "1px solid red");
                        if(value == ""){
                            $("#" + key + "Error").text("");
                            $("#" + key).css("border", "rgb(238, 238, 238)");
                        }
                    });
                }
            }
        });
    });
});