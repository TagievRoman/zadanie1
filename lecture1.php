<?php
$file_array = file_get_contents("text.txt");


$len=strlen($file_array);
$mas=[];
$res=[];
$sum=[];
$m=0;
$s=0;
$v=0;
$b=1;
for ($i=0;$i<$len;$i++) #Заносит слова в массив
{
    if ($file_array[$i]===' ')
    {
        $mas[$s]=substr($file_array,$m,$i-$m);
        $m=$i+1;
        $s=$s+1;


    }
}
$lenn=count($mas); #Длинна массива
for($i=0;$i<$lenn;$i++)
{
    $res[$v]=$mas[$i];
    for($j=0;$j<$lenn;$j++)
    {

        if ($mas[$i]===$mas[$j] and $i!=$j)
        {
            if ($mas[$j]!="***") {
                $b++;
            }
            $mas[$j]="***";

        }

    }
    $sum[$v]=$b;
    $b=1;
    $v++;
}

for($i=0;$i<84;$i++) #Вывод
{
    if ($res[$i]!="***") {
        echo $res[$i];
        echo ":";
        echo $sum[$i];
        echo PHP_EOL;

    }

}
echo "Всего слов: ",array_sum($sum);
?>

