

<?php
// include Database connection file
require_once("../include/connect.php");

// check request
if(isset($_POST))
{
  $id = $_POST['id'];
  $title = $_POST['qs_title'];
  $qus = $_POST['qs_des'];
  if( $id !=="" && $title !="" && $qus !==""  ){
    if(empty($_POST['new_lvl'])){
    $query = "UPDATE qustion SET title= '$title',qustion = '$qus',update_date=CURRENT_TIMESTAMP WHERE  qusID='$id'";
    if (!$result = mysqli_query($conn, $query)) {

      echo  '<div class="alert alert-warning alert-dismissible ">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
       Somthing Wrong!
      </div>
      ';

    }
    else {
      echo  '<div class="alert alert-success alert-dismissible ">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
       Sucessfully Updated .
      </div>
      ';
    }
  }
    else {
              $query = "UPDATE qustion SET title= '$title',qustion = '$qus',update_date=CURRENT_TIMESTAMP WHERE  qusID='$id'";
              if (!$result = mysqli_query($conn, $query)) {

                echo  '<div class="alert alert-warning alert-dismissible ">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                 Somthing Wrong!
                </div>
                ';

              }
              $new_lvl=$_POST['new_lvl'];
              $temp=count($new_lvl);
              for ($i=0; $i<=$temp-1 ; $i++) {
              // echo "hi";
              $rst=$new_lvl[$i];
              $sql="INSERT INTO quslevel (lvl_name,create_date) VALUES ('$rst',CURRENT_TIMESTAMP)";
              $lvl = mysqli_query($conn,$sql);
              // echo "hello";
              $lvl_insrt_id = mysqli_insert_id($conn);
              $lbl = "INSERT INTO question_label (quest_id,label_id) VALUES ({$id},{$lvl_insrt_id})";
              $lvl = mysqli_query($conn,$lbl );


              }

                echo  '<div class="alert alert-success alert-dismissible ">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                 Sucessfully Updated .
                </div>
                ';

    }



  }
  else {
    echo '<div class="alert alert-warning alert-dismissible ">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
      Please fill up  your blank field!
    </div>
    ';
  }
  exit(mysqli_error($conn));
}

?>
