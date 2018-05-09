
<?php
include '../include/connect.php';
if(!empty($_POST["keyword"])) {
$query ="SELECT * FROM quslevel WHERE lvl_name like '" . $_POST["keyword"] ."%' ORDER BY lvl_name LIMIT 0,6";
$result = mysqli_query($conn,$query);
if(!empty($result)) {
?>
<ul class="list-group"  id="lvl_list">
<?php
foreach($result as $level_name) {
?>
<li class="list-group-item" onClick="selectCountry('<?php echo $level_name["lvl_name"]; ?>');"><?php echo $level_name["lvl_name"]; ?></li>
<?php } ?>
</ul>
<?php } } ?>
