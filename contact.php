
<?php 

require 'header-min.php'; ?>
<style>
<?php include 'style-min.css'; ?>
</style>

<?php
$NameError="";
$message = "failed";
$formSubmit = "";

try {
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'INSERT INTO users(name_entry, email, comments) VALUES( :nameEntry, :emailEntry, :textEntry )';

$name = isset($_POST['name_entry']) ? $_POST['name_entry'] : null;
// if(empty($_POST['name_entry'])) {
//   $NameError='Please submit a name!';
// }
$stmt = $connection->prepare($sql); 

$email = isset($_POST['email']) ? $_POST['email'] : null;
$stmt = $connection->prepare($sql); 

$comments = isset($_POST['comments']) ? $_POST['comments'] : null;
$stmt = $connection->prepare($sql); 

$stmt->execute( array( ':nameEntry'=>$name,  ':emailEntry'=>$email, ':textEntry'=>$comments)); 

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$connection = null;

$data = $_POST;
if (!empty($data['name_entry']) &&
    !empty($data['email']) &&
    !empty($data['comments'])) {
    $formSubmit = 'submitted';
    } else {
      $formSubmit = 'please fill out all fields';
    }
   
echo "<div class = 'container'>
    <form method = 'POST' action = 'contact.php'>
   <span class = 'text-danger' id='reset'>$formSubmit</submit>
    </div>
         <label for='name_entry' class ='text-light'>Name</label>
         <input type='text' name = 'name_entry' class='form-control' placeholder = 'Enter name'><span class = 'text-danger'>
         $NameError </span>
                 <div class='form-group'>
                 <label for='email' class ='text-light'>Email</label>
                 <input type='email' class='form-control' name ='email' placeholder='name@youremail.tldomain'> 
               </div>
               
               <div class='form-group'>
                 <label for='comments' class ='text-light'>Comments</label>
                 <textarea class='form-control' name='comments' rows='3' placeholder='Violinistic comments...'></textarea><br>
               <button class ='btn btn-dark' type = 'submit' name='submit'>Submit</button>
               
        </form>
        <script>
        setTimeout(() => {
            document.querySelector('#reset').innerHTML = ''
        }, 3000);
        </script>
        </div>" ?>

<?php require 'footer.php' ?>
