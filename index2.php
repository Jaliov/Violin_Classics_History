<?php require 'header.php'; ?>
<?php require 'db.php'; 

$sql = 'SELECT * FROM people';

$statement = $connection->prepare($sql);

$statement->execute();

$people = $statement->fetchAll(PDO::FETCH_OBJ);

?>


<div class="container">

<h1 class = "text-white">Currently Under Construction!</h1>

<div class="card mt-5">

<div class="card-header">

<h2>Contact</h2>

</div>

<div class = "card-body">

<table class="table table-bordered">
 
 <tr>

 <th>ID</th>

 <th>Name</th>

 <th>Email</th>

 <th>Action</th>

</tr>

<?php foreach($people as $person): ?>

<tr>

<td><?= $person->id; ?> </td>

<td> <?= $person->name; ?> </td>

<td> <?= $person->email; ?> </td>

<td> 

<a href ="edit.php?id=<?= $person->id ?>" class = "btn btn-info">Edit</a>

<a onclick= "return confirm('Are you sure you wanted to delete this entry?')" href ="delete.php?id=<?= $person->id ?>" class = "btn btn-danger">Delete</a>

 </td>

</tr>

<?php endforeach; ?>

</table>

</div>

</div>






</div>

<?php require 'footer.php' ?>
