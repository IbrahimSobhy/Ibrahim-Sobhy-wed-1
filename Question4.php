<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    
   

    td{
        border:2px solid black;
    }
    
    </style>
    
</head>
<body>
    





                    <table >
                <?php
                for($i=1;$i<=12;$i++)
                { ?>


                <tr>


                <?php  
                for ($j=1;$j<=12;$j++)
                { ?>

                
                <td>
                
               <?php echo " $i * $j = ".$i*$j ?>
                
                
                </td>
               <?php }?>


                </tr>
                <?php }?>





</body>
</html>




