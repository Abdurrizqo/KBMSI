


$(function(){
    $('.normal').autosize();
    $('.animated').autosize();
  });
  $("#txtComment").on('keyup', function(event) {
    var currentString = $("#txtComment").val()
    $("#boxMaxChar").html("Max Character : " + currentString.length + "/1000" );
    if (currentString.length <= 500 )  {  /*or whatever your number is*/
        //
      } else {
        //
    }
  });  
  $('.c-commentBox').click(function () {
    if (currentString = $("#txtComment").val().length < 1) {
      document.getElementById("txtComment").style.borderRadius = "4px 4px 0px 0px";
      document.getElementById("txtComment").style.height = "45px";
      document.getElementById("txtComment").style.fontSize = "16px";
      
      document.getElementById("cmt-mask").style.display = "block";
      document.getElementById("cmt-mask").style.opacity = "1";
      document.getElementById("wrapDataUser").style.display = "block";
      document.getElementById("wrapCaptcha").style.display = "block";
      
    }
  });        