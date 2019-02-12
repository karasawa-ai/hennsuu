<?php
$name = "唐澤";
if ($name = "唐澤"){
  echo "私は$name です";
}else{
echo "私は$name ではありません";
}
echo "\n";

$total =0;
for($i =1; $i <=10000; $i++){
  $total += $i;
}
echo $total;
echo "\n";

$fruits = array("リンゴ","バナナ","さくらんぼ","もも","みかん");
foreach($fruits as $fruit){
  echo  " " . $fruit;
  echo "\n";
}

for($i = 1; $i < 101; $i++) {
if($i % 5 == 0){
  echo $i;
  echo "\n";
}
}

?>
