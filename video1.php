<?php require 'db_connect.php'; ?>

<?php include 'header.php'; ?>

<?php require 'card.php'; ?>

<?php include 'video_list.php'; ?> 

<?php include 'popovers.php'; ?>

<?php echo $card; ?>
<?php echo $clip1; 

$id = 2;
$stmt = $connection->prepare('SELECT * FROM musicians WHERE id = ?');
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach($musicians as $musician): ?>
<?php echo $buttonPlace .
"data-content= '$musician->info;' title = '$musician->name;'>$musician->name</button>";?>
<?php endforeach; ?>


<?php $id = 3; $stmt = $connection->prepare('SELECT * FROM musicians WHERE id = ?');
$stmt->execute(array($id)); $musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>


<?php foreach($musicians as $musician): ?>
<?php echo $buttonPlace2 . "data-content=  '$musician->info;' ?>$musician->name</button>"?>
<?php endforeach; echo "</div></div><br>";?>

<!--end first entry -->

<!-- second entry -->
<?php echo $card. 
"<iframe class='embed-responsive-item' src=$clip10></iframe>
</div><div class='card-body'>
<h5 class='card-title'>Mozart violin Concerto No 3</h5>
<p class='card-text'>Yehudi Menuhin, violin</p>";

$id = 4;
$stmt = $connection->prepare('SELECT * FROM musicians WHERE id = ?');
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach($musicians as $musician): ?>
<?php echo $buttonPlace .
"data-content= '$musician->info;' ?>Violinist Biography</button>";?>
<?php endforeach; echo "</div></div><br>";?>

<?php
echo "<div class='embed-responsive embed-responsive-21by9'>
<iframe class='embed-responsive-item' src=$clip3></iframe>
</div><br>"; #Beethoven Perlman

echo "<div class='card' style='width: 100%;'>
<div class='embed-responsive embed-responsive-21by9'>
<iframe class='embed-responsive-item' src=$clip9></iframe>
</div><div class='card-body'>
<h5 class='card-title'>Paganini Violin Concerto No 4</h5>
<p class='card-text'>Ruggero Ricci, violin</p>
<a href='#' class='btn btn-primary'>Info about Paganini</a>
</div></div><br>"; # Paganini Ricci


echo "<div class='embed-responsive embed-responsive-21by9'>
<iframe class='embed-responsive-item' src=$clip4></iframe>
</div><br>";

echo "<div class='embed-responsive embed-responsive-21by9'>
<iframe class='embed-responsive-item' src=$clip8></iframe>
</div><br>";

echo "<div class='embed-responsive embed-responsive-21by9'>
<iframe class='embed-responsive-item' src=$clip7></iframe>
</div><br>";


?>
</div>
</div>
</div>

<?php include "footer.php"; ?>
</body>
</html>

<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/VaAGFXuqA7g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->