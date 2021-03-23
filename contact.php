<?php 
require 'header.php'; 
$message = "<p class = 'text-light'>process failed</p>";
$RegexName = "/^[A-Za-z. ]*$/";
$RegexEmail = "/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/";
$NameError="";
$EmailError="";
$SubmitConfirm ="";

$sql = 'INSERT INTO users(name_entry, email, comments) VALUES( :nameEntry, :emailEntry, :textEntry )';

$name = isset($_POST['name_entry']) ? $_POST['name_entry'] : null;

if (isset($_POST['name_entry'])) {
  if(empty($_POST['name_entry'])) {
    $NameError='Please submit a name!';
}
else {
  $_POST['name_entry'];
if(!preg_match($RegexName, $name)) {
$NameError ="Only Letters and spaces please";
}
}
} 

$Email = isset($_POST['email']) ? $_POST['email'] : null;

if(isset($_POST['email'])) {
  if(empty($_POST['email'])) {
  $EmailError='Please submit your email';
}
else {
  $_POST['email']; 
if(!preg_match($RegexEmail,$Email)) {
  $EmailError = "Not valid email format";
} else {
  $SubmitConfirm= 'Submitted';
}
} 
}
$comments = isset($_POST['comments']) ? $_POST['comments'] : null;

$statement = $connection->prepare($sql); 
$statement->execute( array( ':nameEntry'=>$name,  ':emailEntry'=>$Email, ':textEntry'=>$comments)); 

echo "<div class = 'container'>

    <form method = 'POST' action = 'contact.php' class='text-light'>
    <p class = 'text-light'>Please submit any comments you care to share about this site, the violin and/or its repertoire below!</p>
       <div class='form-group'>
         
         <label for='name_entry'>Name</label>

         <input type='text' name = 'name_entry' class='form-control' placeholder = 'Enter name'><span class = 'text-warning'>
          $NameError </span>
        </div>
       
        <div class='form-group'>
          <label for='email'>Email address</label>
          <input type='email' class='form-control' name ='email' placeholder='name@youremail.com'><span class = 'text-warning'>
          $EmailError </span>
        </div>
        
        <div class='form-group'>
          <label for='comments'>Comments</label>
          <textarea class='form-control' name='comments' rows='3' placeholder='Violin stuff...'></textarea>
        <button class ='btn btn-info' type = 'submit' name='submit'>Submit</button>
        <span class = 'text-secondary'>
        $SubmitConfirm </span>
        </div>
             
        </form>

        </div>" ?>

<?php require 'footer.php' ?>