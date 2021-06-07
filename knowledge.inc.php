
<?php
$example_persons_array = [
  [
      'fullname' => 'Иванов Иван Иванович',
      'job' => 'tester',
  ],
  [
      'fullname' => 'Степанова Наталья Степановна',
      'job' => 'frontend-developer',
  ],
  [
      'fullname' => 'Пащенко Владимир Александрович',
      'job' => 'analyst',
  ],
  [
      'fullname' => 'Громов Александр Иванович',
      'job' => 'fullstack-developer',
  ],
  [
      'fullname' => 'Славин Семён Сергеевич',
      'job' => 'analyst',
  ],
  [
      'fullname' => 'Цой Владимир Антонович',
      'job' => 'frontend-developer',
  ],
  [
      'fullname' => 'Быстрая Юлия Сергеевна',
      'job' => 'PR-manager',
  ],
  [
      'fullname' => 'Шматко Антонина Сергеевна',
      'job' => 'HR-manager',
  ],
  [
      'fullname' => 'аль-Хорезми Мухаммад ибн-Муса',
      'job' => 'analyst',
  ],
  [
      'fullname' => 'Бардо Жаклин Фёдоровна',
      'job' => 'android-developer',
  ],
  [
      'fullname' => 'Шварцнегер Арнольд Густавович',
      'job' => 'babysitter',
  ],
];
  $arr = array();
  function getPartsFromFullname($array){
  for ($i =0; $i < count($array); $i++){
    echo $array[$i]['fullname'] . "<br>\n";
  }
  }
  function getFullnameFromParts($array){    
       for($i=0;$i < count($array); $i++){
    echo $array[$i][0] . " ". $array[$i][1] . " ". $array[$i][2] ."<br>\n";
  }
  unset($array);
}
function getShortName($array){
    for($i=0;$i < count($array); $i++){
        echo $array[$i][1] . " ". substr($array[$i][0], 0, 2) ."<br>\n";
      }
      unset($array); 
}
function getPartsFromParts($array){
    $arr_split = array();
    for ($i =0; $i < count($array); $i++){
     $arr_split[$i]= explode(" " , $array[$i]['fullname']);
}
}
function setGenderNull($array){
    for($i=0;$i < count($array); $i++){
        $array[$i][3] = 0;
        echo $array[$i][0] . " ". $array[$i][1] . " ". $array[$i][2] . " " .$array[$i][3] . "<br>\n";
      }
      unset($array); 
}

function getGenderFromName($array){
   // echo count($array);
   // mb_internal_encoding("UTF_8");
   static $arrend = array();
    for($i=0;$i < count($array); $i++){
    $a=0;
    if(mb_substr($array[$i][2], -3) == "вна") $a -=1; 
    if(mb_substr($array[$i][1], -1) == "а") $a -=1;
    if(mb_substr($array[$i][0], -2) == "ва") $a -=1;
    if(mb_substr($array[$i][1], -1) == "й" ||mb_substr($array[$i][1],-1) == "н" ) $a +=1;
    if(mb_substr($array[$i][2], -2) == "ич") $a +=1;
    if(mb_substr($array[$i][0], -1) == "вна") $a +=1;
    if($a < 0) $a=-1; elseif($a > 0) $a=1;
        $array[$i][3] = $a;
       $arrend[$i] = $a;
    echo $array[$i][0] . " ". $array[$i][1] . " ". $array[$i][2] . " " .$array[$i][3] . "<br>\n";
   
  }
 //unset($array);
return $arrend;
  }
  function getGenderDescription($arrend){
      $b = 0;
      $c = 0;
      $d = 0; 
      $e = count($arrend);
    for($i=0;$i < count($arrend); $i++){
      switch ($arrend[$i]){
          case -1:
            $b += 1;
            break;
          case 1:
            $c += 1;
            break;
          case 0:
            $d +=1;
            break;
      } 
 }
 echo "Мужчины: ". bcdiv(100*($c/$e),1,2) . "%" . "<br>\n" ;
 echo "Женщины: ". bcdiv(100*($b/$e),1,2) . "%" . "<br>\n";
 echo "Не удалось определить: ". bcdiv(100*($d/$e),1,2) ."%" . $arr_spt[$two][1];
}
function getPair($arr,$arr_spt){
  //echo count($arr_spt);
  do{
    $one = rand(0, 10);
  }while($arr[$one] != 1);
  do{
    $two = rand(0, 10);
  }while($arr[$two] != -1);
    echo($arr_spt[$one][1]  ." " .substr($arr_spt[$one][0], 0, 2)."." ." " . "+". " ". $arr_spt[$two][1]. " ".substr($arr_spt[$two][0],0, 2)) ."." ."=>"."<br>\n";
    $three = rand(50, 99);
    $four =rand(50, 99);
    echo "&#9825" . " " ."Идеально на ". " ". $three ."," .$four . "%" . " " ."&#9825";
}

?>
