//SimpleProgrammingPhp;

$(document).ready(function(){
    $('#submit').click(function(){

      $.post("SimpleProgrammingPhp/convert.php",
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

      $.post("mathmatics/submit.php",
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

      $.post("stringmanipulation/result.php",
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

      $.post("piramid/genarate.php",
            {pirinput1:$('#pirinput1').val()},

            function(data){
                $('#piroutput').html(data);
                $("#pirmsg").fadeIn(2000);
                $("#pirmsg").fadeOut(5000);
            },
          );

    });

});
