

<?php
$id ='';
$stmt = $connection->prepare('SELECT * FROM musicians WHERE id = ?');
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?> 

<?php
$card = "<div class='card' style='width: 100%;'>
<div class='embed-responsive embed-responsive-21by9'>"; 
?>

<script>
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>


 <?php $soloist = "Jonnie";
$buttonPlace = "<button type='button' class='btn btn-lg btn-danger' data-toggle='popover' data-placement='top' data-trigger ='hover'";
?>

<?php
$buttonPlace2 = "<button type='button' class='btn btn-lg btn-danger' data-toggle='popover' data-trigger ='hover' title='Composer'";
?>
