<?php 

 $userData=[
    [
      'name' => 'ahmed hamdy',
       'job' => 'front-end',
      'experience' => 3
     ],
  
     [
         'name' => 'mohammed shaker',
         'job' => 'back-end',
         'experience' => 2
     ],
  
     [
         'name' => 'ali hasan',
         'job' => 'full-stack',
         'experience' => 4
     ],
 ];
  

 

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<div class="container py-5">
<div class="row">
<?php foreach($userData as $key => $value){ ?>
  <div class="col-sm-4">
    <div class="card bg-primary text-center text-light">
    <div class="card-body">
    
    <h4 class="card-title"><?= $value['name']?></h4>
                <p class="card-text"><?= $value['job']?></p>
                <p class="card-text"><?= $value['experience']?></p>
          
           </div>
           </div>
           </div>
       <?php }
        ?>





       </div> 
    </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>