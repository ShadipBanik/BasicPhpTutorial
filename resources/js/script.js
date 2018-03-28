//SimpleProgrammingPhp;

$(document).ready(function(){
    $('#submit').click(function(){

      $.post("../basic_programming/SimpleProgrammingPhp/convert.php",
            {input:$('#input').val() ,selectid1:$('#selectid1').val(),selectid2:$('#selectid2').val()},

            function(data){
                $('#output').html(data);
                $("#nmbmsg").fadeIn(2000);
                $("#nmbmsg").fadeOut(5000);
            },
          );

    });

});

//gcd and lcm;
$(document).ready(function(){
    $('#matsubmit').click(function(){

      $.post("../basic_programming/mathmatics/submit.php",
            {matinput1:$('#matinput1').val() ,matinput2:$('#matinput2').val(),matselectid1:$('#matselectid1').val()},

            function(data){
                $('#matout').html(data);
                $("#matmsg").fadeIn(2000);
                $("#matmsg").fadeOut(5000);
            },
          );

    });

});
//stringmanipulation;
$(document).ready(function(){
    $('#strbutton').click(function(){

      $.post("../basic_programming/stringmanipulation/result.php",
            {strinput1:$('#strinput1').val() ,strinput2:$('#strinput2').val()},

            function(data){
                $('#stroutput').html(data);

                 $("#msg").fadeIn(1500);
                  $("#msg").fadeOut(5000);
            },
          );

    });

});
//piramid;
$(document).ready(function(){
    $('#pirsubmit').click(function(){

      $.post("../basic_programming/piramid/genarate.php",
            {pirinput1:$('#pirinput1').val()},

            function(data){
                $('#piroutput').html(data);
                $("#pirmsg").fadeIn(2000);
                $("#pirmsg").fadeOut(5000);
            },
          );

    });

});
//Diamond;
$(document).ready(function(){
    $('#diasubmit').click(function(){

      $.post("../basic_programming/Diamond/rslt.php",
            {diainput1:$('#diainput1').val()},

            function(data){
                $('#diaoutput').html(data);
                $("#diamsg").fadeIn(2000);
                $("#diamsg").fadeOut(5000);
            },
          );

    });

});
//divisable Number

$(document).ready(function(){
    $('#divbutton').click(function(){

      $.post("../basic_programming/divisible/show.php",
            {divinput1:$('#divinput1').val(),divinput2:$('#divinput2').val(),divinput3:$('#divinput3').val()},

            function(data){
                $('#divoutput').html(data);
                $("#divmsg").fadeIn(2000);
                $("#divmsg").fadeOut(5000);
            },
          );

    });

});
