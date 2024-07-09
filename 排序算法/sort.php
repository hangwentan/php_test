<?php
echo '<pre>';
$arr = [10,9,8,7,6,5,4,3,2,1];

// 冒泡排序 通过两两比较互换位置达到排序效果
function bubble_sort($arr){

    for ($i = 0; $i < count($arr); $i++) {
        for ($j = $i+1; $j < count($arr); $j++){
            if($arr[$i]>$arr[$j]){
                $jval = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $jval;
            }

        }
    }
    return $arr;
}
$arr = bubble_sort($arr);
print_r($arr);

// 二分查找 需要是一个有序的数组
function binary_search($arr,$target,$left,$right){

    $mid = intval($left+$right)/2;

    if ($left>$right){
        return -1;
    }
    if ($target>$arr[$mid]){
        return binary_search($arr,$target,$left+1,$right);
    }elseif ($target<$arr[$mid]) {
        return binary_search($arr,$target,$left,$right-1);
    }else{
        return $mid;
    }
}
$key = binary_search($arr,7,0,count($arr));
echo $key."\n";

$arr = [33, 24, 8, 21, 2, 23, 3, 32, 16];

function QuickSort($arr) {
    $count = count($arr);

    if ($count < 2) {
        return $arr;
    }
    $pivot = $arr[0];

    $leftArray = $rightArray = array();

    for ($i = 1; $i < $count; $i++){
        if ($pivot > $arr[$i]) {
            $leftArray[] = $arr[$i];
        } else {
            $rightArray[] = $arr[$i];
        }
    }
    $leftArray = QuickSort($leftArray);
    $rightArray = QuickSort($rightArray);
    return array_merge($leftArray,array($pivot),$rightArray);
}

print_r(QuickSort($arr));