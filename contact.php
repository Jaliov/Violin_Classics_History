<?php 
require 'header.php'; 
// $message = "<p class = 'text-light'>process failed</p>";

//  if(isset ($_POST['name_entry'])) {

//     // echo 'submitted';
    
    

//     $email = $_POST['email'];

// $sql = 'INSERT INTO musicians(name_entry) VALUES( :nameEntry )';

   //  $stmt= $pdo->prepare($sql);
// $name = isset($_POST['name_entry']) ? $_POST['name_entry'] : null;
// $stmt = $connection->prepare($sql); 
// $stmt->execute( array( ':nameEntry'=>$name)); 

echo "<div class = 'container'>
     <h1 class = 'text-danger'>Test Text</h1>
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