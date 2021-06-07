<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Главная </title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="twostyle.css" />
</head>
<body>
<div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
            <div class="knowledge">
                <h1>Разбиение и объединение ФИО <h1> <br/>
                <h2> Разбиение ФИО <h2>
                <p id = "know">
                   <?php include 'knowledge.inc.php' ?>
                   <?php getPartsFromFullname($example_persons_array); ?>
                </p>
            </div>
            <div clas = "split">
                <p>
                    Мы имеем исходный вышеприведенный список имен. В соотвествии с заданием каждый элемент 
                    состоящий из имени, отчества и фамилии необходимо разделить на отдельные элементы из
                     имени, отчества и фамилии. Ниже приведен результат этого разделения.
                </p>
               <?php  $arr_split = array();
               for ($i =0; $i < count($example_persons_array); $i++){
                $arr_split[$i]= explode(" " , $example_persons_array[$i]['fullname']);
               }?>
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
            <!--getSplit();-->
            <div>
                <h2> Объединение ФИО</h2>
                <p> Ниже приведено решение обратной задачи - получение полного имени 
                    из трех разрозненных списков (многомерного массива).</p>
                    <?php getFullnameFromParts( $arr_split);?>   
            </div>
            <div>
                <h2> Сокращение ФИО</h2>
                <p> Решение сокращения полного имени приведено  ниже.</p>
                <?php getShortName($arr_split);?>
            <div>
                <?php include 'footer.inc.php' ?>
            </div>
</body>