<?php 
require 'header.php'; 

$message = "failed";
try {
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'INSERT INTO users(name_entry) VALUES( :nameEntry )';

   //  $stmt= $pdo->prepare($sql);
$name = isset($_POST['name_entry']) ? $_POST['name_entry'] : null;
$stmt = $connection->prepare($sql); 
$stmt->execute( array( ':nameEntry'=>$name)); 

echo "<span class = 'text-light'>Submitted</span>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$connection = null;

echo "<div class = 'container'>
    <h2 class = 'text-light'>Enter Name</h2>
    
    <form method = 'POST' action = 'contact.php'>
       <div class='form-group'>
         
         <label for='name_entry'>Name</label>
         <input type='text' name = 'name_entry' class='form-control' placeholder = 'Enter name'>
                 <button class ='btn btn-secondary' type = 'submit'>Enter Name</button>
        
        </div>
        </form>
        </div>" ?>
        
<?php require 'footer.php' ?>

