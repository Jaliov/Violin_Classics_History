<?php 
require 'header.php'; 
$message = "<p class = 'text-light'>process failed</p>";

$sql = 'INSERT INTO users(name_entry, email, comments) VALUES( :nameEntry, :emailEntry, :textEntry )';
$name = isset($_POST['name_entry']) ? $_POST['name_entry'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$comments = isset($_POST['comments']) ? $_POST['comments'] : null;

$statement = $connection->prepare($sql); 
$statement->execute( array( ':nameEntry'=>$name,  ':emailEntry'=>$email, ':textEntry'=>$comments)); 

echo "<div class = 'container'>

    <form method = 'POST' action = 'contact.php' class='text-light'>
    <p class = 'text-light'>Write any comments you care to share about the violin and its repertoire below!</p>
       <div class='form-group'>
         
         <label for='name_entry'>Name</label>

         <input type='text' name = 'name_entry' class='form-control' placeholder = 'Enter name'>

        </div>
       
        <div class='form-group'>
          <label for='email'>Email address</label>
          <input type='email' class='form-control' name ='email' placeholder='name@youremail.com'>
        </div>
        
        <div class='form-group'>
          <label for='comments'>Comments</label>
          <textarea class='form-control' name='comments' rows='3' placeholder='About violinists...'></textarea>
        <button class ='btn btn-info' type = 'submit'>Submit</button>
        </form>

        </div>" ?>

<?php require 'footer.php' ?>