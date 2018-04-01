<?php
    include 'include/connect.php';
    $srch=$_POST['db_srch'];
    $sql="SELECT * FROM searchhistory WHERE SearchFor like '%$srch%'";
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
