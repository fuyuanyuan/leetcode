<?php 


/**
 *You are given two non-empty linked lists representing two non-negative integers. The digits are stored in reverse order and each of their nodes contain a single digit. Add the two numbers and return it as a linked list.
 *You may assume the two numbers do not contain any leading zero, except the number 0 itself.
 *Input: (2 -> 4 -> 3) + (5 -> 6 -> 4)
 *Output: 7 -> 0 -> 8
 *给定两个链表分别代表两个非负整数。数位以倒序存储，并且每一个节点包含一位数字。将两个数字相加并以链表形式返回。
 **/


/**
 * @desc 
 * @param array
 * @param array 
 * @return array
 **/
function addTwoNumbers($arr1, $arr2){

    $arr1 = array_reverse($arr1);
    $arr2 = array_reverse($arr2);

    $len = max(count($arr1),count($arr2));
    $res = 0;

    for ($i=0; $i < $len; $i++) { 
        $arr1[$i] = int($arr1[$i]);
        $arr2[$i] = int($arr2[$i]);
        $res+= ($arr1[$i]+$arr2[$i]) * pow(10,$i);
    }

    return str_split($res);
}

$arr1 = [2,4,3];
$arr2 = [5,6,4];
$res = addTwoNumbers($arr1, $arr2);

var_dump($res);