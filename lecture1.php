<?php
$file_array = file_get_contents("text.txt");


$len=strlen($file_array);
$mas=[];
$res=[];
$sum=[];
$a=0;
$b=0;
$c=0;
$s=1;
for ($i=0;$i<$len;$i++)
{
    if ($file_array[$i]===' ')
    {
        $mas[$b]=substr($file_array,$a,$i-$a);
        $a=$i+1;
        $b=$b+1;


    }
}
$lenn=count($mas);
for($i=0;$i<$lenn;$i++)
{
    $res[$c]=$mas[$i];
    for($j=0;$j<$lenn;$j++)
    {

        if ($mas[$i]===$mas[$j] and $i!=$j)
        {
            if ($mas[$j]!="---") {
                $s++;
            }
            $mas[$j]="---";

        }

    }
    $sum[$c]=$s;
    $s=1;
    $c++;
}

for($i=0;$i<84;$i++)
{
    if ($res[$i]!="---") {
        echo $res[$i];
        echo ":";
        echo $sum[$i];
        echo PHP_EOL;

    }

}
echo "Всего слов: ",array_sum($sum);
?>

