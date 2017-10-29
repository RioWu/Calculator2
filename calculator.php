<?php
header("content-type:text/html;charset=UTF-8");
interface CalInterface{
    static public function add($num1,$num2);
    static public function sub($num1,$num2);
    static public function mul($num1,$num2);
    static public function div($num1,$num2);
}
class Calculator implements CalInterface{
    static public function add($num1,$num2){
        echo"结果为".($num1+$num2);
    }
    static public function sub($num1,$num2){
        echo"结果为".($num1-$num2);
    }
    static public function mul($num1,$num2){
        echo"结果为".($num1*$num2);
    }
    static public function div($num1,$num2){
        if($num2==0){
            echo"除数不能为零";
        }
        else
        echo"结果为".($num1/$num2);
    }
}
$first=$_POST["first"];
$a=$_POST["a"];
$second=$_POST["second"];
if(is_numeric($first) and is_numeric($second))
{
    if($a="+"){
        Calculator::add($first,$second);
    }
    elseif($a="-"){
        Calculator::sub($first,$second);
    }
    elseif($a="*"){
        Calculator::mul($first,$second);
    }
    else{
        Calculator::div($first,$second);
    }
}
else{
    echo"输入错误，不是数字";
}
?>