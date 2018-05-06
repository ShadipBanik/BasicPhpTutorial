//searchhistory
$('#selct').ready(function(){
  var input1=$("#selct").val();
      $.post("../basic_programming/Search_submit.php",
            {valinput1:input1},
            function(data){
                $('#output').html(data);

            },
          );
});


$(document).ready(function(){
    $('#selct').change(function(){
       var input1=$(this).val();
      $.post("../basic_programming/Search_submit.php",
            {valinput1:input1},

            function(data){
                $('#output').html(data);

            },
          );

    });

});
$(document).ready(function(){
    $('#search_history').click(function(){

      $.post("../basic_programming/Search.php",
            {db_srch:$('#db_srch').val()},

            function(data){
                $('#output').html(data);
              },
          );

    });

});
// Role History search

$('#rl_selct').ready(function(){
  var role=$("#rl_selct").val();
      $.post("../user_management/system/role_limit.php",
            {role_input:role},
            function(data){
                $('#result').html(data);

            },
          );
});


$(document).ready(function(){
    $('#rl_selct').change(function(){
       var role=$(this).val();
      $.post("../user_management/system/role_limit.php",
            {role_input:role},
            function(data){
                $('#result').html(data);
            },
          );
    });

});
$(document).ready(function(){
    $('#role_history').click(function(){

      $.post("../user_management/system/role_srch.php",
            {role_data:$('#role_data').val()},

            function(data){
                $('#result').html(data);
              },
          );

    });

});
//Role add
$(document).ready(function(){
    $('#create').click(function(){

      $.post("../user_management/system/Addrole_submit.php",
            {create_role:$('#create_role').val()},

            function(data){
                $('#msg').html(data);
              },
          );

    });

});
// qus History
$('#qs_selct').ready(function(){
  var qus=$("#qs_selct").val();
      $.post("../user_management/system/all_qus_submit.php",
            {qus_input:qus},
            function(data){
                $('#qus-result').html(data);

            },
          );
});


$(document).ready(function(){
    $('#qs_selct').change(function(){
       var qs=$(this).val();
      $.post("../user_management/system/all_qus_submit.php",
            {qus_input:qs},
            function(data){
                $('#qus-result').html(data);
            },
          );
    });

});
$(document).ready(function(){
    $('#qs_history').click(function(){

      $.post("../user_management/system/qus_srch.php",
            {qus_data:$('#qus_data').val()},

            function(data){
                $('#qus-result').html(data);
              },
          );

    });

});
// //cat add
// $(document).ready(function(){
//     $('#create').click(function(){
//
//       $.post("../user_management/system/Addrole_submit.php",
//             {create_role:$('#create_role').val()},
//
//             function(data){
//                 $('#msg').html(data);
//               },
//           );
//
//     });
//
// });

//edit
