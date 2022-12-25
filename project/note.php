<?php 
$pdo= new PDO("mysql:host=localhost;port=3306;dbname=notes","root","");
  $statment=$pdo->prepare("Select * from notes order by create_time");
  $statment->execute();
  $products=$statment->fetchAll(PDO::FETCH_ASSOC);
if(isset($_POST['insert'])){
  if($_POST['text'] && $_POST['title']){
    $title=$_POST["title"];
    $text=$_POST["text"];
    $mysqli = new mysqli('localhost', 'root', '', 'notes'); 
  
  $mysqli->query("INSERT INTO `notes` (`title`,`text`) VALUES('$title','$text')");
  header("Location:./note.php");
  echo $title;
  echo $text;
   
  }
  }
    // $connect=mysqli_connect("localhost","root","","notes");
    // $query="INSERT INTO 'notes' (title,'text') VALUES ('$title','$text')";
?>






<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&family=Sevillana&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="notes-style.css" rel="stylesheet"/>
  <title>Notes</title>
</head>
<body> 
  <h2 class="main-text">NOTES</h2>
  <?php
  
  ?>

  <div class="containor">
  <?php foreach($products as $i => $product){?>
  <div class="note">
    <span>Task: </span><p class="title"><?php echo $product["title"]?></p>
    <span>description: </span><p class="text"><?php echo $product["text"]?></p>
    <!-- <button type="button" class="btn" onclick=<?php 
    $mysqli = new mysqli('localhost', 'root', '', 'notes'); 
    $mysqli->query("DELETE FROM `notes` WHERE title ='".$title."'");
  header("Location:./note.php");
    ?> value=<?php echo $product["id"]?>>Task Completed</button> -->
  </div>
    <?php }?>
    <div action="phpsql" class="add-note note">
      <form action="" method="POST"> 
      <span>Task: </span><input name="title" type="input" class="title"></input>
    <span>description: </span><input name="text" type="text" class="text"></input>
    <input name="insert" class="btn add-btn" value="ADD"  type="submit" ></input>
      </form>
    </div>

</div>
</body>
</html>