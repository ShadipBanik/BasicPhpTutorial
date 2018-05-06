<?php
include("../include/connect.php");
if(isset($_POST['id']) && isset($_POST['id']) != "")
{

    $lvl_id = $_POST['id'];
    $sql= "DELETE FROM question_label  WHERE label_id= '$lvl_id'";
    if (!$result = mysqli_query($conn, $sql)) {
        exit(mysqli_error($conn));

    }
    $query = "DELETE FROM quslevel  WHERE lvl_ID='$lvl_id'";
    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error($conn));

    }
  echo "delete Successfully.";
}
?>
