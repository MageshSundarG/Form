$(document).ready(function() {
  $("#submit").click(function() {
    var nam = $("#defaultContactFormName").val();
    var em = $("#defaultContactFormEmail").val();
    var sub = $("#subject").val();
    var txt = $("#exampleFormControlTextarea2").val();
    var fil = $("#exampleFormControlFile1").val();
    var cpy = $("#defaultContactFormCopy").val();
    var dataString = '&nam1=' + nam + '&em1=' + em + '&sub1=' + sub + '&txt1=' + txt;
    if (nam == '' || em == '' || sub == '' || txt == '') {
      $("#display").html("<div class='alert alert-warning'>Please Fill All Fields.</div>");
    }  else {
      $.ajax({
        type: "POST",
        url: "processor.php",
        data: dataString,
        cache: false,
        success: function(result) {
          $("#display").html(result);
        }
      });
    }
    return false;
  });
});
