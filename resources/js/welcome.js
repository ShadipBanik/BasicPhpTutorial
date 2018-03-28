
// $(document).ready( function(){
//     $('#toggle-button').click( function() {
//         var toggleWidth = $("#toggle").width() == 1100? "1350px" : "1100px";
//         $('#toggle').animate({ width: toggleWidth });
//     });
// });
$(document).ready(function () {
    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

    $('#toggle-button').on('click', function () {
        // $('#sidebar, #content').toggleClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
});

$("#bes").ready(function(){
$("#content").load("../basic_programming/simple-programming.php");
    });

$(document).ready(function(){
    $("#bes").click(function(){

$("#content").load("../basic_programming/simple-programming.php");

      });
});

$(document).ready(function(){
   $("#srch").click(function(){

    $("#content").load("../basic_programming/search_history.php");

    });
});


$(document).ready(function(){
   $("#role_home").click(function(){

$("#content").load("../user_management/add_role.php");

    });
});
