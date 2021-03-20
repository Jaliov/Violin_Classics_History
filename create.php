<?php 

require 'header.php'; 

require 'db_connect.php';

$message = "<p class = 'text-light'>process failed</p>";

//  if(isset ($_POST['name_entry'])) {

//     // echo 'submitted';
    
    

//     $email = $_POST['email'];

$sql = 'INSERT INTO musicians(name_entry) VALUES( :nameEntry )';

   //  $stmt= $pdo->prepare($sql);
$name = isset($_POST['name_entry']) ? $_POST['name_entry'] : null;
$stmt = $connection->prepare($sql); 
$stmt->execute( array( ':nameEntry'=>$name)); 

?>


<div class = "container">

    <h2 class = 'text-light'>Enter Name</h2>
    
    <form method = 'POST' action = 'create.php'>

       <div class="form-group">
         
         <label for="name_entry">Name</label>

         <input type="text" name = "name_entry" class="form-control" placeholder = "Enter name">

         <!-- <label for="email">Email</label>

         <input type="email" id = "email" name = "email" class="form-control"> -->

        <button class ="btn btn-info" type = "submit">Enter Name</button>
        
        </div>

        </form>

        </div>
        </body>
     

<?php require 'footer.php' ?>