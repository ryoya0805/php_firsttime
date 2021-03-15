<?php

//演習１
echo  "phpの勉強をしています<br>";

//演習２

echo "5 + 7";

echo "<br>";
echo 5 + 7;
echo "<br>";

//演習３

$apple = "りんご";

$num = 10 + 10;

echo $apple;
echo "<br>";
echo $num;
echo "<br>";


// $keisan = 30;

// if($keisan > 10){
//     echo "30は１０より大きい数字っです<br>";
// }

//演習４
$a = 1;
$b = 2;
if($a = 1);{
echo "１が表示されました";
}

echo "<br>";

if ($b = 2);{
echo"2が表示されました";
}

//演習５
echo "<br>";

echo mt_rand(1,200);

echo "<br>";

$omikuji = mt_rand(1,4);
 if($omikuji == 1){
   echo '大吉 <img src="img/1.png" /> ';
 }elseif ($omikuji == 2) {
   echo '中吉<img src="img/2.jpg" /> ';
 }elseif ($omikuji == 3) {
   echo '小吉<img src="img/3.png" /> ';
 }elseif ($omikuji == 4) {
   echo '凶<img src="img/4.jpg" /> ';
 }
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "あなたの手";


 //宿題じゃんけんゲーム  
 echo "<br>";
 $me = mt_rand(1,3);

 if($me == 1){
     echo "グー";
 }elseif ($me ==2){
     echo "チョキ！";
 }elseif ($me == 3) {
     echo "パー";
 }

$cpu = mt_rand(1,3);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "相手の手";
echo "<br>";

if($cpu == 1){
    echo "グー";
}elseif ($cpu == 2){
    echo "チョキ！";
}elseif ($cpu == 3) {
    echo "パー";
}

echo "<br>";
echo "<br>";
echo "結果";
echo "<br>";

if($me == $cpu){
  echo "あいこ";
}elseif($me <= $cpu){
  echo "勝ち";
}elseif($me >= $cpu){
  echo "負け";
}


?>