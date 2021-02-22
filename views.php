<style>
<?php include 'style.css'; ?>
</style>

<php include 'db_connect'; ?>
<?php

$card = "<div class='card bg-light mb-3 card' >
<div class='embed-responsive embed-responsive-21by9'>"; 

$buttonPlace = "<button type='button' class='btn btn-outline-info btn-light' data-toggle='popover' data-placement='left' data-trigger ='hover'";

$collapse = "<button class='btn btn-info' type='button' data-toggle='collapse'  aria-expanded='false'  aria-controls='collapseExample' id = 'btn-col'"; 

?>

<?php
$colAdd1 = "data-target='#collapseExample1'>";

$info1 = "<div class='collapse' id='collapseExample1'>
<div class='card card-body'>";

$view1 = $card . "<iframe id ='player' class='embed-responsive-item' src='$clip14'></iframe></div><div class='card-body'>" . $collapse . $colAdd1 .
"Vivaldi Violin Concerto in A minor <small> (audio only) </small>
</button><br>";

$colAdd2 = "data-target='#collapseExample2'>";

$info2 = "<div class='collapse' id='collapseExample2'>
<div class='card card-body'>";

$view2 = $card . "<iframe id ='player' class='embed-responsive-item' src='$clip1'></iframe></div><div class='card-body'>" .  $collapse . $colAdd2 .
"Bach Violin Concerto in A minor</button><br>";
// $info2;
$colAdd3 = "data-target='#collapseExample3'>";

$info3 = "<div class='collapse' id='collapseExample3'>
<div class='card card-body'>";

$view3  = $card . "<iframe id ='player' class='embed-responsive-item' src='$clip11'></iframe></div><div class='card-body mb-3'>" . $collapse . $colAdd3 .
"Bach Double Concerto in D minor</button><br>";

$colAdd4 = "data-target='#collapseExample4'>";

$info4 = "<div class='collapse' id='collapseExample4'>
<div class='card card-body'>";

$view4  = $card . "<iframe id ='player' class='embed-responsive-item' src='$clip12'></iframe></div><div class='card-body'>" .  $collapse . $colAdd4 . "Mozart Violin Concerto No 3, K 463</button><br>";

$colAdd5 = "data-target='#collapseExample5'>";

$info5 = "<div class='collapse' id='collapseExample5'>
<div class='card card-body'>";

$view11 = $card . "<iframe id ='player' class='embed-responsive-item' src='$clip15'></iframe></div><div class='card-body'>" . $collapse . $colAdd5 . "Mozart Sinfonia Concertante in E Flat Majore</button><br>";

$colAdd6 = "data-target='#collapseExample6'>";

$info6 = "<div class='collapse' id='collapseExample6'>
<div class='card card-body'>";

$view5  = $card . "<iframe id ='player' class='embed-responsive-item' src='$clip3'></iframe></div><div class='card-body'>" .  $collapse . $colAdd6 . "Beethoven Violin Concerto in D</card></button><br>";

$colAdd7 = "data-target='#collapseExample7'>";

$info7 = "<div class='collapse' id='collapseExample7'>
<div class='card card-body'>";

$view6 = $card . "<iframe id ='player' class='embed-responsive-item' src='$clip9'></iframe></div><div class='card-body'>" .  $collapse . $colAdd7 . "Paganini Concerto No. 4</button><br>";

$colAdd8 = "data-target='#collapseExample8'>";

$info8 = "<div class='collapse' id='collapseExample8'>
<div class='card card-body'>";

$view7 = $card . "<iframe id ='player' class='embed-responsive-item' src='$clip4'></iframe></div><div class='card-body'>".  $collapse . $colAdd8 . "Mendelsohn Violin Concerto in E</button><br>";

$colAdd9 = "data-target='#collapseExample9'>";

$info9 = "<div class='collapse' id='collapseExample9'>
<div class='card card-body'>";

$view8 = $card . "<iframe id ='player' class='embed-responsive-item' src='$clip8'></iframe></div><div class='card-body'>".  $collapse . $colAdd9 . "Brahms Violin Concerto in D</button><br>";

$colAdd10 = "data-target='#collapseExample10'>";

$info10 = "<div class='collapse' id='collapseExample10'>
<div class='card card-body'>";

$view9 = $card . "<iframe id ='player' class='embed-responsive-item' src='$clip7'></iframe></div><div class='card-body'>" .  $collapse . $colAdd10 . "Tchaikovsky Violin Concerto in D</button><br>";

$colAdd11 = "data-target='#collapseExample11'>";

$info11 = "<div class='collapse' id='collapseExample11'>
<div class='card card-body'>";

$view10 = $card . "<iframe id ='player' class='embed-responsive-item' src='$clip13'></iframe></div><div class='card-body'>" .  $collapse . $colAdd11 . "Sibelius Violin Concerto</button><br>";

?>

