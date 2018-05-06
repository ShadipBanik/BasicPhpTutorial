<?php
include("../include/connect.php");

// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // get User ID
    $user_id = $_POST['id'];

    // Get User Details
    $query = "SELECT * FROM qustion WHERE qusID = $user_id";
    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error($conn));
    }
    $response = array();
    if(mysqli_num_rows($result) >= 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $response = $row;


        }
        $sql ="SELECT quslevel.lvl_name as levl_name,question_label.label_id as label_id   FROM question_label,quslevel WHERE question_label.quest_id='$user_id' AND question_label.label_id=quslevel.lvl_ID";
        $sql_rs=mysqli_query($conn,$sql );
        $lbl_id="";
        $lbl_arr=array();
        $lvl=array();
        $arr="";
        while ($rw =mysqli_fetch_assoc($sql_rs)) {
         $arr .="$rw[levl_name]".',';
             // echo json_encode($rns);
          $lvl['levl_name']=$arr;
          $lbl_id .= "$rw[label_id]".',';
          $lbl_arr['label_id']= $lbl_id;

        }
        $response +=$lvl;
        $response +=$lbl_arr;     
    }

    else
    {


        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }
    // display JSON data
    echo json_encode($response);

  mysqli_close($conn);

 }
 {
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
 }

 ?>
