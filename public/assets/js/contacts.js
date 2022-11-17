$(document).ready(function () {
    $("#mail").submit(function () {
        var $form = $(this),
          email = $('#email').val();
    
        if (email == '') {
          $('#email').addClass('error');
          return false;
        }
    
        if (IsEmail(email) == false) {
          $('#email').addClass('error');
          return false;
        }
    
        $.ajax({
          type: "POST",
          url: "/send",
          data: $form.serialize(),
          dataType: "json",
          success: function (data) {
            if (data.status === "success") {
              $('#email').removeClass('error');
              $("#mail")[0].reset();
            //   $(".message-popup").addClass('show');
            //   setTimeout(function(){
            //     $(".message-popup").removeClass('show');
            //   }, 2000);
            } 
          }
        });
        return false;
    })
})

function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!regex.test(email)) {
      return false;
    } else {
      return true;
    }
  }