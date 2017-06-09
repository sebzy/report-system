$(document).ready(function() {
  $("#country").change(function() {
    var client_name = $(this).val();
    if(client_name != "") {
      $.ajax({
        url:"second_dropdown.php",
        data:{c_id:client_name},
        type:'POST',
        success:function(response) {
          var resp = $.trim(response);
          $("#state").html(resp);
        }
      });
    } else {
      $("#state").html("<option value=''>------- Select --------</option>");
    }
  });
});

// $(document).ready(function() {
//   $("#country").change(function() {
//     var country_id = $(this).val();
//     if(country_id != "") {
//       $.ajax({
//         url:"index.php",
//         data:{c_id:country_id},
//         type:'POST',
//         success:function(response) {
//           var resp = $.trim(response);
//           $("#state").html(resp);
//         }
//       });
//     } else {
//       $("#state").html("<option value=''>------- Select --------</option>");
//     }
//   });
// });