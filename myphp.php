<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Главная </title>
    <link rel="stylesheet" href="style.css" />
    <link  href="twostyle.css" rel="stylesheet"/>
</head>
<body>
<div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>
               <?php include 'knowledge.inc.php' ?> 	   
        </div>  
        <div> 
        <?php getPartsFromParts($example_persons_array); ?>
        </div>
          <div class ="contain">
                <div class ="left">
                <?php
                for ($i =0; $i < count($example_persons_array); $i++){
                $arr_split[$i]= explode(" " , $example_persons_array[$i]['fullname']);
                echo $arr_split[$i][0] ."<br>\n"; 
                } ?>  
                </div>  
                <div class="center">
                <?php
                for ($i =0; $i < count($example_persons_array); $i++){
                $arr_split[$i]= explode(" " , $example_persons_array[$i]['fullname']);
                echo $arr_split[$i][1] ."<br>\n"; 
                } ?> 
                </div> 
                <div class="right">
                <?php
                for ($i =0; $i < count($example_persons_array); $i++){
                $arr_split[$i]= explode(" " , $example_persons_array[$i]['fullname']);
                echo $arr_split[$i][2] ."<br>\n"; 
                } ?> 
                </div> 
          </div>
        <div> 
        <p> Установление пола лиц по заданных полным именам по предложенным гендерным 
        признакам удобнее проводить по разделенным частям полного имени.Исходные списки показаны выше.
        </p>
          <?php setGenderNull($arr_split);?>
        </div>
        <div>
        <p>Теперь гендерному признаку присвоен нуль для всех лиц. Далее присваиваем признаки пола всему списку.
        </p>
        </div>
        <div><?php $arrend = getGenderFromName($arr_split); ?>
        <div>
        <h2> Гендерный состав лиц.</h2>
        <?php getGenderDescription($arrend);?>
        </div>
        <div> 
          <h2>Подбор пары</h2>
        <p> Согласно заданию необходимо случайным образом подбирать женщину и мужчину.
        Пример этой работы показан ниже. Для изменения пары нужно перегрузить сайт
        <div class ="butn">
        <!--<button  id = "genbtn" type ="submit">Найти пару</button>
        <a href="#" onclick= "knowledge.inc.php/getPair()">Подобрать пару</a>-->
       <?php getPair($arrend,$arr_split); ?>
        </div>
        
          <?php include 'footer.inc.php' ?>
     </body>
     </html>