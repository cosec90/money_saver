$(document).ready(function(){
  $(".submit-pocket-expense").click(function(){
    $.ajax({
            url:"../Admin-modules/expense_calculate.php",
            method: "GET",
            dataType:"json",
            success: function(data){
              $("#balance").text(data);
              $(".results").css("display","block");
            }
          });
          $.ajax({
                  url:"../Admin-modules/expense_total.php",
                  method: "GET",
                  dataType:"json",
                  success: function(data){
                    $("#total").text(data);
                  }
                });
        });
});
