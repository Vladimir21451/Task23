<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Главная </title>
    <link rel="stylesheet" href="style.css" />
</head>

<div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
</div>       
      <div>
      <div> <?php include 'knowledge.inc.php'?>
      </div>
      <?php
      $arr_persons = array();
      $arr_personf= array();
        for($j = 0; $j < count($example_persons_array);$j++){
            $arr_persons[$j] = $example_persons_array[$j]['fullname'];
        }
        for($j = 0; $j < count($example_persons_array);$j++){
            $arr_personf[$j] = $example_persons_array[$j]['fullname'];
        }
      ?>
      
        <select>
          <?php  for($i=0;$i < count($arr_persons); $i++){
            echo "<option> $arr_persons[$i]</option>"; 
            }?>
       </select>
       <select>
          <?php  for($i=0;$i < count($arr_personf); $i++){
            echo "<option> $arr_personf[$i]</option>"; 
            }?>
       </select>
      
      </div>  
      <?php include 'footer.inc.php' ?>