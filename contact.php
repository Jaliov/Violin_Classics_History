<?php 
require 'header.php'; 
$message = "failed";

// $sql = 'INSERT INTO musicians(name_entry) VALUES( :nameEntry )';

//    //  $stmt= $pdo->prepare($sql);
// $name = isset($_POST['name_entry']) ? $_POST['name_entry'] : null;
// $stmt = $connection->prepare($sql); 
// $stmt->execute( array( ':nameEntry'=>$name)); 

echo "<div class = 'container'>
    <h2 class = 'text-light'>Enter Name</h2>
    
    <form method = 'POST' action = 'contact.php'>
       <div class='form-group'>
         
         <label for='name_entry'>Name</label>
         <input type='text' name = 'name_entry' class='form-control' placeholder = 'Enter name'>
                 <button class ='btn btn-info' type = 'submit'>Enter Name</button>
        
        </div>
        </form>
        </div>" ?>
        
<?php require 'footer.php' ?>