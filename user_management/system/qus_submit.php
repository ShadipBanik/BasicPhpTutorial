<?php
include '../include/connect.php';
        $qs_title = $_POST['qs_title'];
        $qs_qus = $_POST['qs_qus'];
        if($qs_title !=="" && $qs_qus !=="" ){

        $lvl_out=$_POST['lvl_out'];
        $query = "INSERT INTO `qustion` (title,qustion,create_date) VALUES ('$qs_title','$qs_qus',CURRENT_DATE)";
        $run    = mysqli_query($conn, $query);
        if($run == true)
        {
            $qus_id = mysqli_insert_id($conn);

                $temp=count($lvl_out);
                for ($i=0; $i<=$temp-1 ; $i++) {                // echo "hi";
                $rs=$lvl_out[$i];
                 $check="SELECT lvl_name,lvl_ID FROM quslevel WHERE lvl_name=".$rs."";
                 $chck_lvl=mysqli_query($conn,$check);
                 if($chck_lvl===true){
                 while ($row=mysql_affected_rows($chck_lvl)){
                    if($rs===$row['lvl_name']){
                      $lvl_id=$row['lvl_ID'];
                      $map = "INSERT INTO question_label (quest_id,label_id) VALUES ({$qus_id},{$lvl_id})";
                      $lvl = mysqli_query($conn,$map);
                    }
                  }
               }
                   else {

                    $sql="INSERT INTO quslevel (lvl_name,create_date) VALUES ('$rs',CURRENT_DATE)";
                    $lvl = mysqli_query($conn,$sql);
                    // echo "hello";
                    $skil_id = mysqli_insert_id($conn);
                    $map = "INSERT INTO question_label (quest_id,label_id) VALUES ({$qus_id},{$skil_id})";
                    $lvl = mysqli_query($conn,$map);
                    }

                }
                echo '<div class="alert alert-success alert-dismissible ">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                 Sucessfully add your question.
                </div>';
      }
exit(mysqli_error($conn));
}
else{

  echo '
  <div class="alert alert-warning alert-dismissible ">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
    Please fill up  your blank field!
  </div>

  ';
}
?>
