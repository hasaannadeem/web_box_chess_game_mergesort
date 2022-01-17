<?php
$arr = array( 6,1,3,7,5,2,3,4,45,5,4,75,8,6,78,5634,34,5); 
echo "<br>".implode(',',$arr)."<br>";
$arr=mergesort($arr);
echo implode(',',$arr);
 
function mergesort($numl)
{
    if(count($numl) == 1 ) return $numl;
 
    $mid = count($numl) / 2;
    $left = array_slice($numl, 0, $mid);
    $right = array_slice($numl, $mid);
 
    $left = mergesort($left);
    $right = mergesort($right);
     
    return merge($left, $right);
}
 
function merge($left, $right)
{
    $result=array();
    $leftI=0;
    $rightI=0;
 
    while($leftI<count($left) && $rightI<count($right))
    {
        if($left[$leftI]>$right[$rightI])
        {
 
            $result[]=$right[$rightI];
            $rightI++;
        }
        else
        {
            $result[]=$left[$leftI];
            $leftI++;
        }
    }
    while($leftI<count($left))
    {
        $result[]=$left[$leftI];
        $leftI++;
    }
    while($rightI<count($right))
    {
        $result[]=$right[$rightI];
        $rightI++;
    }
    return $result;
}