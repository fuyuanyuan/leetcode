<?php 


/**
 * Given an array of integers, return indices of the two numbers such that they add up to a specific target.
 * You may assume that each input would have exactly one solution, and you may not use the same element twice.
 * Example:
 * Given nums = [2, 7, 11, 15], target = 9,
 * Because nums[0] + nums[1] = 2 + 7 = 9,
 * return [0, 1].
 **/




/**
 * @desc 暴力循环
 * @param array
 * @param int 
 * @return array
 **/
function twoSum_1($arr,$target){

    $return = ['',''];
    $len = count($arr);

    if($len <= 2) return $return;

    for ($i = 0; $i < $len; $i++) { 
        for ($j = $i + 1; $j < $len; $j++) { 
            if($arr[$i] + $arr[$j] == $target){
                $return[0] = $i; 
                $return[1] = $j; 
            }
        }

    }
    return $return;

}



/**
 * @desc 查找差值是否存在
 * @param array
 * @param int 
 * @return array
 **/
function twoSum_2($arr,$target){

    $return = ['',''];
    $len = count($arr);

    if($len <= 2) return $return;

    foreach ($arr as $k => $v) {
        $diff = $target - $v;
        $tarKey = array_search($diff, $arr);
        if($tarKey !== false){
            $return[0] = $k; 
            $return[1] = $tarKey; 
        }
    }
    return $return;

}


/**
 * @desc 排序后   两边各一个指针   相加大于target 时右边-1  小于target时 左边+1
 * @param array
 * @param int 
 * @return array
 **/
function twoSum_3($arr,$target){

    $return = ['',''];
    $len = count($arr);

    if($len <= 2) return $return;
    $newArr = $arr;
    sort($newArr,SORT_NUMERIC);

    $lk = 0;
    $rk = $len - 1;
    while ($lk < $rk) {
        $sum = $newArr[$lk] + $newArr[$rk];
        if($target == $sum){
            $return[0] = array_search($newArr[$lk], $arr);
            $return[1] = array_search($newArr[$rk], $arr);
            break;
        }elseif ($target > $sum) {
            $lk++;
        }else{
            $rk--;
        }
    }

    return $return;
}



$nums = [2, 7, 11, 15];


$res1 = twoSum_1($nums,18);
$res2 = twoSum_2($nums,18);
$res3 = twoSum_3($nums,18);

var_dump($res1,$res2,$res3);