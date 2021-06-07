<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Главная </title>
    <link  href="style.css" rel="stylesheet"/>
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
          <h1>  <?php  echo $p  ?> </h1>
          <h2> <?php echo "Вывод заданного массива имен"; ?> </h2>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="img/php_PNG49.png" width ="200px" height = "200px">' ?>                    
             </div>
             
               <!-- <div class="fullname">
               //    <ul class = "ulcenter" id ="ulc">
                          
               //     </ul>
               // </div> -->
    
            <div class="knowledge">                  
                    <?php  include 'knowledge.inc.php' ?>
                    <?php getPartsFromFullname($example_persons_array); ?>
            </div> 
        
     </div>   
    
    <div class="article">
        <p>
            На этой странице выводится весь список заданного массива лиц.
            Дальнейшая оьработка массива в соответствии с заданием производится на следующих двух страницах.
            Переключайтесь через меню.
        </p>
    </div>

            <?php include 'footer.inc.php' ?>

    

    
</body>
</html>
