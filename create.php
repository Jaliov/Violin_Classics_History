<?php 

require 'header.php'; 

require 'db.php';

$message = '';

if(isset ($_POST['name']) && isset($_POST['email']) ) {

    // echo 'submitted';
    
    $name = $_POST['name'];

    $email = $_POST['email'];

    $sql = 'INSERT INTO people(name, email) VALUES(:name, :email)';

    $statement = $connection->prepare($sql);

    if(

    $statement->execute([':name' => $name, ':email' => $email])) 
    {
       $message = 'data inserted successfully';

    }
    
    }


?>





<div class = "container">

  <div class = "card mt-5"> <!--margin-top: 5 -->

    <div class="card-header">

    <h2>Create a person</h2>
    
    </div>

    <div class="card-body">

      <?php if(!empty($message)): ?>

       <div class = "alert alert-success">

        <?= $message; ?>  <!--shorter version of //?php echo $message-->
       </div>

       <?php endif; ?>
    
    <form method = "post">

       <div class="form-group">
         
         <label for="name">Name</label>

         <input type="text" id = "name" name = "name" class="form-control">

         <label for="email">Email</label>

         <input type="email" id = "email" name = "email" class="form-control">

        </div>

        <div class="form-group">
        
        <button class ="btn btn-info" type = "submit">Create a Person</button>
        
        </div>

        </form>

        </div>






       
       
       
       
       </div>
    
    
    
    
    </form>
    
    
    </div>

<?php require 'footer.php' ?>