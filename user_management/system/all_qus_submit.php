
<?php
    include '../include/connect.php';
    $qus_data = $_POST["qus_input"];
    $sql="SELECT * FROM qustion ORDER BY qusID DESC LIMIT $qus_data";
    $result=mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_array($result)) {
      $title=$row['title'];
      $qus_id=$row['qusID'];
   ?>
     <tr>
       <td><?php echo $row['title']; ?></td>
       <td><?php echo $row['qustion']; ?></td>
         <td>
           <?php
           $lvl="SELECT quslevel.lvl_name as level_name FROM question_label,quslevel WHERE question_label.quest_id=".$row['qusID']." AND question_label.label_id=quslevel.lvl_ID";
           $lvl_rs=mysqli_query($conn,$lvl);
             $lvl_sp=array();
           while ($rw=mysqli_fetch_array($lvl_rs)) {
              $lvl_sp[]=$rw['level_name'];

           }
             $bls=implode(', ',$lvl_sp);
             echo $bls;
          ?>
        </td>
       <td><?php echo $row['create_date']; ?></td>
       <td><?php echo $row['update_date']; ?></td>
        <?php

          echo '
          <td>
          <button class="btn btn-sm btn-info" onclick="GetUserDetails('.$row['qusID'].')" ><span class="glyphicon glyphicon-edit"></span></button>&nbsp;
            <div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close"  data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Update</h4>
                  </div>
                   <div id="qus_msg">
                   </div>
                   <div class="modal-body">
                    <div class="form-group">
                    <span for="update_title">Title</span>
                    <div class="col-md-12">
                    <input type="text" id="qs_title" placeholder="title" class="form-control"/>
                    </div>
                    </div>

                    <div class="form-group">
                    <span for="update_question">Question</span>
                    <div class="col-md-12">
                      <textarea class="form-control" name="" id="qs_des"  rows="5"></textarea>
                    </div>
                    </div>
                    <div class="form-group">
                    <span for="nw ">Add new level</span><br>
                    <div class="col-md-10">
                    <input type="text" id="new_lvl" placeholder="question" class="form-control"/>
                    </div>
                    <button type="button" class="btn btn-info" onclick="New_lvl_Add()" >Add</button>
                    </div>

                    <div class="form-group">
                    <span for="update_lvl">Question Level</span>
                    <div class="col-md-12">
                    <div  id="qs_lvl" name="qs_lvl" >

                    </div>
                    <div  id="new_lvl_out" name="new_lvl">

                    </div>
                    </div>

                    </div><br><br>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"  >Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Save Changes</button>
                    <input type="hidden" id="hidden_user_id">
                  </div>
                </div>
              </div>
            </div>

          <button class="btn btn-sm btn-danger" onclick="DeleteUser('.$row['qusID'].')" ><span class="glyphicon glyphicon-trash"></span></button>
         </td>
          ';

         ?>

     </tr>
<script type="text/javascript">
$(document).ready(function() {
  $(".modal").on("hidden.bs.modal", function() {
    $("#qs_lvl").html("");
    $("#new_lvl_out").html("");
  });
});
</script>
    <?php
    }

    mysqli_close($conn);
    ?>
