<?php 
require 'header.php'; 

$message = "failed";
try {
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'INSERT INTO users(name_entry, email, comments) VALUES( :nameEntry, :emailEntry, :textEntry )';

   //  $stmt= $pdo->prepare($sql);
$name = isset($_POST['name_entry']) ? $_POST['name_entry'] : null;
$stmt = $connection->prepare($sql); 
//  $stmt->execute( array( ':nameEntry'=>$name)); 

$email = isset($_POST['email']) ? $_POST['email'] : null;
$stmt = $connection->prepare($sql); 
// $stmt->execute( array( ':emailEntry'=>$email)); 

$comments = isset($_POST['comments']) ? $_POST['comments'] : null;
$stmt = $connection->prepare($sql); 
// $stmt->execute( array( ':textEntry'=>$comments)); 

$stmt->execute( array( ':nameEntry'=>$name,  ':emailEntry'=>$email, ':textEntry'=>$comments)); 

echo "<span class = 'text-light'>Submitted</span>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

// $stmt = $connection->prepare($sql); 
// $stmt->execute( array( ':nameEntry'=>$name,  ':emailEntry'=>$email, ':textEntry'=>$comments)); 

// $connection = null;

echo "<div class = 'container'>
    <h2 class = 'text-light'>Enter Name</h2>
    
    <form method = 'POST' action = 'contact.php'>
       <div class='form-group'>
         
         <label for='name_entry'>Name</label>
         <input type='text' name = 'name_entry' class='form-control' placeholder = 'Enter name'>

                 <div class='form-group'>
                 <label for='email'>Email address</label>
                 <input type='email' class='form-control' name ='email' placeholder='name@sampleemail.com'> 
               </div>
               
               <div class='form-group'>
                 <label for='comments'>Comments</label>
                 <textarea class='form-control' name='comments' rows='3' placeholder='Violin stuff...'></textarea>
               <button class ='btn btn-secondary' type = 'submit' name='submit'>Submit</button>
               </div>
        </form>
        </div>" ?>

<?php require 'footer.php' ?>