
<?php
include("../include/connect.php");
if(isset($_POST['id']) && isset($_POST['id']) != "")
{

    $qus_id = $_POST['id'];
    $sql= "DELETE FROM question_label  WHERE quest_id= '$qus_id'";
    if (!$result = mysqli_query($conn, $sql)) {
        exit(mysqli_error($conn));

    }
    $query = "DELETE FROM qustion  WHERE qusID= '$qus_id'";
    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error($conn));

    }
  echo "delete Successfully.";
}
?>
