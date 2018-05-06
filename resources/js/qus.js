//GetUserDetails

    function petch_qus() {
      $('#qs_selct').ready(function(){
        var qus=$("#qs_selct").val();
            $.post("../user_management/system/all_qus_submit.php",
                  {qus_input:qus},
                  function(data){
                      $('#qus-result').html(data);

                  },
                );
      });
    }

    function GetUserDetails(id) {
        $("#hidden_user_id").val(id);

        $.post("../user_management/system/qus_update.php", {
                id:id,
            },
            function (data,status) {

                var user = JSON.parse(data);
                $("#qs_title").val(user.title);
                $("#qs_des").val(user.qustion);
                var levl_name = user.levl_name;
                var label_id = user.label_id;
                var lbl_id_ar= new Array();
                    lbl_id_ar=label_id.split(',');
                var x= new Array();
                    x=levl_name.split(',');
                for(var i=0;i<x.length-1;i++)
                {
                  document.getElementById("qs_lvl").innerHTML +='<div id="lvl" style="float:left;padding:5px;margin:3px;" class="well well-sm alert fade in "><input type="hidden" name="qus_lvl[]" id="lvl_qus" value="'+x[i]+'""><button type="button" class="close cls" onclick ="Delete_lvl('+lbl_id_ar[i]+')" id="del_lvl" value="" data-dismiss="alert">&times;</button>'+x[i]+'</div>';
                }
                $("#update_user_modal").modal("show");
            }
        );

    }

    //add new level
    function New_lvl_Add(){
      var new_lvl=document.getElementById('new_lvl').value;
      if(new_lvl !==""){
        var chk_lvl=new Array();
        var chk_lvl=$("input[name='nw_lvl[]']")
                  .map(function(){return $(this).val();}).get();
        var ptch_lvl=$("input[name='qus_lvl[]']")
                  .map(function(){return $(this).val();}).get();
            var len=chk_lvl.length;
            var len2=ptch_lvl.length;
            var flag=0;
              for (var i=0; i<=len; i++) {
              if (new_lvl == chk_lvl[i]){
                flag=1;
                break;
              }
            }
            for (var i=0; i<=len2; i++) {
            if (new_lvl == ptch_lvl[i]){
              flag=2;
              break;
            }
          }
            if(flag==1 || flag==2){
              alert("this level Already exist");
            }
            else{
            document.getElementById("new_lvl_out").innerHTML +='<div id="skill" style="float:left;margin:3px;padding:5px" class="well well-sm alert fade in "><input type="hidden" name="nw_lvl[]" id="nw_lvl" value="'+new_lvl+'""><button type="button" class="close cls" data-dismiss="alert">&times;</button>'+new_lvl+'</div>';
            }
     }
     $("#new_lvl").val("");
  }
//update detailes
function UpdateUserDetails(e) {
  var new_lvl=$("input[name='nw_lvl[]']")
            .map(function(){return $(this).val();}).get();
    var qs_title = $("#qs_title").val();
    var qs_des = $("#qs_des").val();
    var id = $("#hidden_user_id").val();
    $.post("../user_management/system/update_submit.php", {
            id: id,
            qs_title: qs_title,
            qs_des: qs_des,
            new_lvl:new_lvl,
        },
        function (data, status) {
             // $("#update_user_modal").modal("hide");
            $('#qus_msg').html(data);
        }
    );

}

//Delete qustion level_add
function Delete_lvl(lvl_id){
    var conf = confirm("Are you sure, do you really want to delete level?");
    if (conf == true) {
        $.post("../user_management/system/up_lvl_del.php", {
                id: lvl_id
            },
            function (data, status){
              alert(data);
            }
        );
    }

}
//delete
function DeleteUser(id){
    var conf = confirm("Are you sure, do you really want to delete User?");
    if (conf == true) {
        $.post("../user_management/system/del_qus.php", {
                id: id
            },
            function (data, status) {
              alert(data);
            // $("#qus-result").load(location.href + "#qus-result");
             petch_qus();
            }
        );

    }

}
//question submit
function lvlAdd(){
  var x=document.getElementById('lvl').value;
  if(x !=""){
  var dp_lvl=$("input[name='mylvl[]']")
               .map(function(){return $(this).val();}).get();
               dp_len=dp_lvl.length;
               chk_flag=0;
               for(var i=0;i<=dp_len;i++){
                if(x==dp_lvl[i]){
                    chk_flag=1;
                   }
                }
    if(chk_flag==1){
      alert('This level already exist');
    }
    else{
           document.getElementById("lvl_out").innerHTML +='<div id="skill" style="float:left;margin:3px;padding:5px" class="well well-sm alert fade in "><input type="hidden" name="mylvl[]" id="mylvl" value="'+x+'""><button type="button" class="close" data-dismiss="alert">&times;</button>'+x+'</div>';
     }
  }
 $("#lvl").val("");
}
//qus lvl add
$(document).ready(function(){
    $('#submit_skill').click(function(){
    var lvl_out =$("input[name='mylvl[]']")
              .map(function(){return $(this).val();}).get();
      $.post("../user_management/system/qus_submit.php",
            {qs_title:$('#qs_title').val(),qs_qus:$('#qs_qus').val(),lvl_out:lvl_out},

            function(data){
                $('#qust_msg').html(data);
            },
          );

    });

});
