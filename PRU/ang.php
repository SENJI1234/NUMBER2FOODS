<?php 

$fruits = json_decode(file_get_contents('fruits.json'),true);

//var_dump($fruits)


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="yow.css">
</head>
<body>


  <div class="navbar">
     
    <div class="two">
        
        <h2>Shop</h2>
    </div>
    <div class="three">
        
        <h2>Home</h2>
        <h2>About</h2>
        <h2>Contact</h2>
    </div>
  </div>
  
  
  <div class="one" >
      <?php foreach ($fruits as $fruit):?>
      <div class="hi">

        <H1><?=$fruit ['name'];?> </H1>
      
            <img src="images/<?=$fruit ['img'];?>" alt="" id="card">
       
        <H3  ><?=$fruit ['price'];?> </H3>
        <button onclick="openModal()">Order now</button>
        
        
    </div>


    <?php endforeach?>

    <?php include('modal.php');?>
</div>


   
</body>
</html>

<script>
    function openModal(){
        const modal = document.getElementById('modal');

        modal.style.display = "grid";
    }
    function closeModal(){
        const modal = document.getElementById('modal');

        modal.style.display = "none";
    }
 
</script>