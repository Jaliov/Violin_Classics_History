
<?php 

require 'header.php'; 
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
    }
   
echo "<div class = 'container'>
<style> input, #textArea {
  box-shadow: 5px 10px rgb(217, 83, 79, 0.3)} </style>   
    <form method = 'POST' action = 'contact.php'>
   <span class = 'text-success' id='reset'>$formSubmit</submit>
    </div>
         <label for='name_entry' class ='text-light'><small>Name</small></label>
         <input type='text' name = 'name_entry' class='form-control' placeholder = 'Enter name'><span class = 'text-danger'>
         $NameError </span>
                 <div class='form-group'>
                 <label for='email' class ='text-light'><small>Email</small></label>
                 <input type='email' class='form-control' name ='email' placeholder='name@sampleEmail.com'> 
               </div>
               
               <div class='form-group'>
                 <label for='comments' class ='text-light'><small>Comments</small></label>
                 <textarea class='form-control' name='comments' rows='3' placeholder='Violin stuff...' id='textArea'></textarea><br>
               <button class ='btn btn-secondary' type = 'submit' name='submit'>Submit</button>
               
        </form>
        <script>
        setTimeout(() => {
            document.querySelector('#reset').innerHTML = ''
        }, 3000);
        </script>
        </div>" ?>

<?php require 'footer.php' ?>
