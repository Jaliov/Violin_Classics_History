<<?php require 'db_connect.php'; ?>

<?php include 'header.php'; ?>

<?php require 'card.php'; ?>

<?php include 'popovers.php'; ?>

<?php include 'video_list.php'; ?> 

<?php include 'views.php'; ?>

<?php echo $view1; #Henryk Szeryng?> 
<?php
$id = 20;  
$stmt = $connection->prepare('SELECT * FROM musicians WHERE id = ?');
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach($musicians as $musician): ?>
<?php echo $info1 . $musician->concerto .
"</div>
</div>"; 
; ?>
<?php echo $buttonPlace .
"data-content= '$musician->info' title = '$musician->role'>$musician->name</button>";?>
<?php endforeach; ?>

<?php $id = 19; $stmt; #Antoinio Vivaldi
$stmt->execute(array($id)); $musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach($musicians as $musician): ?>
<?php echo $buttonPlace . "data-content='$musician->info;' title = '$musician->role'>$musician->name</button>"; ?>
<?php endforeach; echo "</div></div><br>";?>

<?php echo $view2; //Kyung Wha Chung Bach A minor:?>
<?php
$id = 2;  
$stmt;
$stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>



<?php foreach($musicians as $musician): ?>
<?php echo $info2 . $musician->concerto .
"</div>
</div>"; ?>
<?php echo $buttonPlace .
"data-content= '$musician->info' title = '$musician->role'>$musician->name</button>";?>
<?php endforeach; ?>

<?php $id = 3; $stmt; //Bach
$stmt->execute(array($id)); $musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach($musicians as $musician): ?>
<?php echo $buttonPlace . "data-content='$musician->info title = '$musician->role'>$musician->name</button>"; ?>
<?php endforeach; echo "</div></div><br>"; ?>

<?php echo $view3; ?>
<?php  //Menuhin
$id = 4; $stmt; $stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach($musicians as $musician): ?>
    <?php echo $info3 . $musician->concerto .
"</div>
</div>"; 
; ?>
<?php echo $buttonPlace .
"data-content= '$musician->info;' title = '$musician->role'>$musician->name</button>";?>
<?php endforeach; ?>

<?php  //Oistrakh
$id = 7; $stmt; $stmt->execute(array($id));
$musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach($musicians as $musician): ?>
<?php echo $buttonPlace .
"data-content= '$musician->info' title = $musician->role ?>$musician->name</button>";?>
<?php endforeach; ?>


<?php $id = 3; $stmt; //Bach
$stmt->execute(array($id)); $musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach($musicians as $musician): ?>
<?php echo $buttonPlace . "data-content='$musician->info'  title = '$musician->role'>$musician->name</button>"; ?>
<?php endforeach; echo "</div></div><br>";?>

<?php echo $view4; ?>

<?php $id = 5; $stmt; //Hahn
$stmt->execute(array($id)); $musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach($musicians as $musician): ?>
<?php echo $buttonPlace .
"data-content= '$musician->info' ?>$musician->name</button>";?>
<?php endforeach; ?>

<?php $id = 6; $stmt; //Mozart
$stmt->execute(array($id)); $musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach($musicians as $musician): ?>
<?php echo $buttonPlace . "data-content='$musician->info;' title = '$musician->role'>$musician->name</button>"; ?>
<?php endforeach; echo "</div></div><br>";?>

<?php echo $view5; ?> <!--Beethoven -->

<?php $id = 13; $stmt;
$stmt->execute(array($id)); $musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach($musicians as $musician): ?>
<?php echo $buttonPlace .  "title = '$musician->role'
data-content= '$musician->info' >$musician->name</button>"; ?>
<?php endforeach; ?>

<?php $id = 14; $stmt;
$stmt->execute(array($id)); $musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach($musicians as $musician): ?>
<?php echo $buttonPlace .  "title = '$musician->role'
data-content= '$musician->info' ?>$musician->name</button>"; ?>
<?php endforeach; echo "</div></div><br>"; 
?>

<?php echo $view6; //Paganini?> 
 
<?php $id = 11; $stmt;
$stmt->execute(array($id)); $musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach($musicians as $musician): ?>
<?php echo $buttonPlace . "title = '$musician->role'
data-content= '$musician->info' ?>$musician->name</button>";?>
<?php endforeach; ?>

<?php $id = 12; $stmt;
$stmt->execute(array($id)); $musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach($musicians as $musician): ?>
<?php echo $buttonPlace . "title = '$musician->role'
data-content= '$musician->info' ?>$musician->name</button>";?>
<?php endforeach; echo "</div></div><br>"; 

?>
<?php echo $view7; ?> <!-- Mutter Mendelsohn -->

<?php $id = 9; $stmt; $stmt->execute(array($id)); $musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach($musicians as $musician): ?>
<?php echo $buttonPlace .
"data-content= '$musician->info' ?>$musician->name</button>";?>
<?php endforeach;
?>

<?php $id = 10; $stmt; $stmt->execute(array($id)); $musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach($musicians as $musician): ?>
<?php echo $buttonPlace .
"data-content= '$musician->info' ?>$musician->name</button>";?>
<?php endforeach; echo "</div></div><br>"; 
?>

<?php echo $view8; ?>  <!-- Midori Brahms -->

<?php $id = 15; $stmt; $stmt->execute(array($id)); $musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach($musicians as $musician): ?>
<?php echo $buttonPlace .
 "title = '$musician->role'
 data-content= '$musician->info' >$musician->name</button>"; ?>
 <?php endforeach; ?>

<?php $id = 16; $stmt; $stmt->execute(array($id)); $musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach($musicians as $musician): ?>
<?php echo $buttonPlace . "title = '$musician->role'
 data-content= '$musician->info' >$musician->name</button>"; ?>
<?php endforeach; echo "</div></div><br>"; 
?>

<?php echo $view9; ?>
<?php $id = 1; $stmt; $stmt->execute(array($id)); $musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach($musicians as $musician): ?>
<?php echo $buttonPlace .
"data-content= '$musician->info;' ?>$musician->name</button>";?>
<?php endforeach; ?>

<?php $id = 17; $stmt;
$stmt->execute(array($id)); $musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach($musicians as $musician): ?>
<?php echo $buttonPlace . "title = '$musician->role'
data-content= '$musician->info' ?>$musician->name</button>";?>
<?php endforeach; echo "</div></div><br>"; ?>


<?php echo $view10; ?>
<?php $id = 8; $stmt; $stmt->execute(array($id)); $musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach($musicians as $musician): ?>
<?php echo $buttonPlace .
"data-content='$musician->info;' title = '$musician->role'>$musician->name</button>";?>
<?php endforeach; 
?>

<?php $id = 18; $stmt;
$stmt->execute(array($id)); $musicians = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php foreach($musicians as $musician): ?>
<?php echo $buttonPlace . "title = '$musician->role'
data-content= '$musician->info' ?>$musician->name</button>";?>
<?php endforeach; echo "</div></div><br>"; ?>


</div>
</div>
</div>

<!-- <?php include "footer.php"; ?> -->
</body>
</html>
