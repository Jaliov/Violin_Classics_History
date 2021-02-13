

<?php
$id ='';
$stmt = $connection->prepare('SELECT * FROM musicians WHERE id = ?');
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?> 

<?php
$card = "<div class='card bg-light mb-3' style='width: 100%;'>
<div class='embed-responsive embed-responsive-21by9'>"; 
?>

<script>
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>

<?php
$buttonPlace = "<button type='button' class='btn btn-info' data-toggle='popover' data-placement='left' data-trigger ='hover'";
?>

