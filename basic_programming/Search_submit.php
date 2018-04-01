<?php
    include 'include/connect.php';
    $limit = $_POST["valinput1"];
    $sql="SELECT * FROM searchhistory ORDER BY id DESC LIMIT $limit";
    $result=mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_array($result)) {
   ?>
     <tr>
       <td><?php echo $row['SearchFor']; ?></td>
       <td><?php echo $row['input']; ?></td>
       <td><?php echo $row['result']; ?></td>
       <td><?php echo $row['date_time']; ?></td>
     </tr>
    <?php
    }
    mysqli_close($conn);
    ?>
