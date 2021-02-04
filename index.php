
<?php
$id = "";
$stmt = $connection->prepare('SELECT * FROM musicians WHERE id = ?');
$stmt->execute(array($id));
$musicians = $statement->fetchAll(PDO::FETCH_OBJ);

?>












