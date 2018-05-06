<?php
    include '../include/connect.php';
    $role_data=$_POST['role_data'];
    $sql="SELECT * FROM role WHERE name like '%$role_data%'";
    $result=mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_array($result)) {
   ?>
     <tr>
       <td><?php echo $row['name']; ?></td>
       <td><?php echo $row['create_date']; ?></td>
       <td><?php echo $row['update_date']; ?></td>
     
     </tr>
    <?php
    }
    mysqli_close($conn);
    ?>
