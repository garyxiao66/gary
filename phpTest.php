<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$string = "On first glance, the following appears to output 'true' ";
//var_dump(substr($string, strpos($string, " ' ")+1, 4));
$t = strtotime("30th Octomer 2008");
//echo idate('t',$t);
$a=5; $b=10;

 function sum($arr1, $arr2){
     $temp = $arr1;
     for($i=0; $i<count($arr2); $i++){
        $temp[$i+ count($arr1)] = $arr2[$i];
        
     }
     sort($temp);
     print_r($temp);
 }
 $arr1 = array(1,2,3,5);
 $arr2 = array(2,4,6);
//sum($arr1, $arr2);
// $i = imagecreatetruecolor(400, 600);
 //echo imagesx($i);
///$a = 012;
//echo $a / 4;
 $x = 5;
echo $x;
echo "<br />";
echo $x++ + ++$x;
echo "<br />";
echo $x;
echo "<br />";
echo $x-- - $x--;
echo "<br />";
echo $x;



//$y = 3 + "15%" + "$25";
//echo $y;
$test = "John";
$test[11] ="Doe";
//echo $test;
//var_dump(strlen($test));
$x = NULL;

if ('0xFF' !== 255) {
    $x = (int)'0xFF';
}
//var_dump($x);
//echo $_SERVER['REMOTE_HOST'];
# comment
echo (int)"5test";
echo "<br />";
echo "I\'ll be back.\t\t\t";



$great = 'fantastic';

// Won't work, outputs: This is { fantastic}
//echo "This is { $great}";

// Works, outputs: This is fantastic
//echo "This is {$great}";
$array = array(
    -3   => -100,
    "foo" => "bar",
    "bar" => "foo",
    3  => 100,
);
//var_dump($array);
echo "<br />";
function getArray() {
    return array(1, 2, 3);
}
//echo $secondElement = getArray()[1];
list(, , $tElement) = getArray();
//echo $tElement;
// Create a simple array.
$array = array(1, 2, 3, 4, 5);
print_r($array);

// Now delete every item, but leave the array itself intact:
foreach ($array as $i => $value) {
    unset($array[$i]);
}
print_r($array);

// Append an item (note that the new key is 5, instead of 0).
$array[] = 6;
print_r($array);
echo "<br />";
// Re-index:
$array = array_values($array);
$array[] = 7;
//print_r($array);
$a = array(1 => 'one', 2 => 'two', 3 => 'three');
unset($a[2]);
$b = array_values($a);
//print_r($b);
$myS['bar'] = 'enemy';
//echo $myS['bar'];
error_reporting(E_ALL);

$arr = array('fruit' => 'apple', 'veggie' => 'carrot');

// Correct
//print $arr[fruit];  // apple

//print $arr['veggie']; // carrot
define('fruit', 'veggie');

// Notice the difference now
print $arr['fruit'];  // apple
print $arr[fruit];    // carrot
echo "<br />";
//print "Hello {$arr[fruit]}"; 
//print "Hello $arr[fruit]";
//print "Hello " . $arr['fruit'];
class A {
    private $A; // This will become '\0A\0A'
}

class B extends A {
    private $A; // This will become '\0B\0A'
    public $AA; // This will become 'AA'
}

//var_dump((array) new B());
$arr1 = array(2, 3);
$arr2 = $arr1;
$arr2[] = 4; // $arr2 is changed,
             // $arr1 is still array(2, 3)
             
$arr3 = &$arr1;
$arr3[3]= 4;
//print_r($arr1);
$array = array(
    "0"   => "a",
    "-1"  => "b",
    "+1"  => "c",
    "00"  => "d",
    "01"  => "e",
    "0x1" => "f",
);
//var_dump($array);
$xiao = array();
//unset($xiao);
//var_dump(is_null($xiao));
// Our closure
$double = function($a) {
    return $a * 2;
};

// This is our range of numbers
$numbers = range(1, 5);

// Use the closure as a callback here to
// double the size of each element in our
// range
$new_numbers = array_map($double, $numbers);

//print implode(' ', $new_numbers);
$n = 1;
$m = 2;

function yum()
{
    global $n, $m;

    $m = $n + $m;
} 

yum();
//echo $m;
$b = $a = 5;        /* assign the value five into the variable $a and $b */
$c = $a++;
//var_dump($a);
/* Intentional file error */
//$my_file = @file ('non_existent_file') or
    //die ("Failed opening file: error was '$php_errormsg'");

// this works for any expression, not just functions:
$value = @$cache[$key];
interface MyInterface
{
}

class MyClass implements MyInterface
{
}

$a = new MyClass;
$b = new MyClass;
$c = 'MyClass';
$d = 'NotMyClass';

$arr = array(1, 2, 3, 4, 5);
foreach ($arr as &$value) {
    $value = $value * 2;
}

print_r($arr);
//unset($value);
echo "<br />";
foreach ($arr as $key => $value) {
    // $arr[3] will be updated with each value from $arr...
    echo "{$key} => {$value} ";
    //print_r($arr);
}
echo "<br />";
$arr = array("one", "two", "three");
reset($arr);
while (list(, $value) = each($arr)) {
    echo "Value: $value<br />\n";
}

foreach ($arr as $value) {
    echo "Value: $value<br />\n";
}
function add_some_extra(&$string)
{
    $string .= 'and something extra.';
}
$str = 'This is a string, ';
add_some_extra($str);
//echo $str;    // outputs 'This is a string, and something extra.'
function small_numbers()
{
    return array (0, 1, 2);
}
list ($zero, $one, $two) = small_numbers();
$myArr = small_numbers();
//var_dump($myArr);
class Foo
{
    static $variable = 'static property';
    static function Variable()
    {
        echo 'Method Variable called';
    }
}

echo Foo::$variable; // This prints 'static property'. It does need a $variable in this scope.
$variable = "Variable";
Foo::$variable();  // This calls $foo->Variable() reading $variable in this scope.

$greet = function($name)
{
    printf("Hello %s\r\n", $name);
};

$greet('World');
$greet('PHP');
echo "</br/>";
$message = 'hello';

// No "use"

// Inherit $message
$example = function () use ($message) {
    var_dump($message);
};
$example();
$message = 'world';
// Closures can also accept regular arguments
$example = function ($arg) use ($message) {
    var_dump($arg . ' ' . $message);
};
//$example("hello");
class MyxClass {
    const CONST_VALUE = 'A constant value';
}

$classname = 'MyxClass';
//echo $classname::CONST_VALUE; // As of PHP 5.3.0
echo "<br/>";
//echo MyxClass::CONST_VALUE;
trait Hello {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait World {
    public function sayWorld() {
        echo 'World';
    }
}

class MyHelloWorld {
    use Hello, World;
    public function sayExclamationMark() {
        echo '!';
    }
}

$o = new MyHelloWorld();
$o->sayHello();
$o->sayWorld();
$o->sayExclamationMark();
echo "<br/>";

class MethodTest
{
    public function __call($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        echo "Calling object method '$name' "
             . implode(', ', $arguments). "\n";
    }

    /**  As of PHP 5.3.0  */
    public static function __callStatic($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        echo "Calling static method '$name' "
             . implode(', ', $arguments). "\n";
    }
}

$obj = new MethodTest;
$obj->runTest('in object context');

//MethodTest::runTest('in static context');
class Am {
    public static function foo() {
        self::who();
    }

    public static function who() {
        echo __CLASS__."\n";
    }
}

class Bm extends Am {
    public static function test() {
        //Am::foo();
        parent::foo();
        static::foo();
    }

    public static function who() {
        echo __CLASS__."\n";
    }
}
class Cm extends Bm {
    public static function who() {
        echo __CLASS__."\n";
    }
}

//Bm::test();
$input = array("a", "b", "c", "d", "e", "f");
//print_r(array_slice($input, 2, -2, true));
$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);
 echo "<br />";
//$first_names = array_column($records, 'first_name','last_name');
//print_r($first_names);
//$array1 = array("color" => "red", 2, 4);
//$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 1, 4);
//$result = array_merge($array1, $array2);
//print_r($result);
 function arr_merge($arr1, $arr2){
     $temp = array();
     $len1 = count($arr1);
     $len2= count($arr2);
     
     for($i=0; $i<$len1; $i++){
         for($j=0; $j<$len2; $j++){
             if($arr1[$i]<$arr2[$j] && !in_array($arr1[$i],$temp)){
                 $temp[] = $arr1[$i];
                 break;
             }
             else{
                 if(!in_array($arr2[$j],$temp))
                   $temp[] = $arr2[$j];
                 
             }
             
         }
         if(!in_array($arr1[$i], $temp))
             $temp[]=$arr1[$i];    
     }
     
     sort($temp);
     return $temp;
 }
 
 function arr_mergeNew($arr1, $arr2){
     $temp = array();
     $rem = array();
     $len1 = count($arr1);
     $len2= count($arr2);
     $p =0;
     if($len1 > $len2){
         for($i=0; $i<$len2; $i++){
            
            while($p < $len1){
                if($arr2[$i]<=$arr1[$p]){
                    $temp[$i+$p] = $arr2[$i];
                    
                    break;
                }
                else{
                    $temp[$i +$p] = $arr1[$p];
                    
                    $p++;
                }
            }
           if($arr2[$i]>$arr1[$len1-1]){
                $temp[$i + $p] = $arr2[$i];
            } 
           
         }
        if($arr1[$p]>$arr2[$len2-1]){
               $temp[$i + $p] = $arr1[$p];
           } 
     }
     
     return $temp;
 }
 $arr1 = array(1,2,3,10,11,12,20,24);
 $arr2 = array(3,4,9,19, 21);
 $arrMerge = arr_mergeNew($arr1, $arr2); 
 print_r($arrMerge);
 
 $foo = array(2 => 'a', 'foo' => 'b', 0 => 'c');
$foo[1] = 'd';
list($x, $y, $z) = $foo;
//var_dump($foo, $x, $y, $z);
echo "<br />";
$keywords = preg_split("/[\s,]+/", "hypertext language, programming");
//print_r($keywords);
 $string = 'April 15, 2003';
$pattern = '/(\w+) (\d+), (\d+)/i';
$replacement = '${1} 2, $3';
//echo preg_replace($pattern, $replacement, $string);
$email  = 'name@example.com';
$domain = strstr($email, '@');
echo $domain; // prints @example.com

//$user = strstr($email, '@', true); // As of PHP 5.3.0
//echo $user; // prints name
echo "<br />";
//$lines =file('data.txt');
//foreach($lines as $line){
    //echo $line."<br />";
//}
$lines = file_get_contents('data.txt');
//echo $lines;
//phpinfo();
$user = 'root';
$pass ='zhouto6901';
/*
try {
    $dbh = new PDO('mysql:host=localhost;dbname=gary', $user, $pass);
    foreach($dbh->query('SELECT * from students') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
 * 
 */
$str = 'abcdefjjfercba';
//echo $str[0];
$strLen = strlen($str);
$len = floor($strLen/2);
//echo $len;
//if($strLen%2 ==0){
    for($i=0; $i<$len; $i++){
        if($str[$i]==$str[$strLen-$i-1])
            continue;
        else {
            echo "This str is not Pal";
            break;
        }
    }
//}
//echo $i;
function lucky_senven($arr){
    $len = count($arr);
    if($len<3){
        return false;
    }
    else{
        for($i=0; $i<$len -2; $i++){
            $temp = $arr[$i] + $arr[$i+1] + $arr[$i+2];
            if($temp ==7){
                return TRUE;
            }
        }
    }
    return FALSE;
}
$votes =array(4,"Vic","Vic", "Marry","Marry", "John", "Yang","Yang");
//$num = lucky_senven($arr);
$count=0;
//$t = $votes[1];
$tempV = array($votes[1]=>1);
for($i=2; $i<count($votes); $i++){
    if(array_key_exists($votes[$i], $tempV)){
        $tempV[$votes[$i]] +=1;
    }
    else{
        $tempV = $tempV + array($votes[$i]=>1);
    }
}
krsort($tempV);
print_r($tempV);
$len = count($votes) -1;

$str = '1/5, 3/10';
$arr_4= explode(',',$str);
$arr2 =explode('/', $arr_4[0]);
$arrTem_2 = explode('/', $arr_4[1]);
//$handle = fopen ("data.txt","r");
//$numArray = array();
//while(!feof($handle)){
  //$t = fgets($handle);
  // $lis = $t;
   //$int_1= (int)$lis;
   //$numArray[] = $lis; 
   //echo $lis;
   
   
//}
//print_r($arrTem_2);
//exit();
function gcd($num1, $num2) {
 /* finds the greatest common factor between two numbers */
    if ($num1 < $num2) {
        $t = $num1;
        $num1 = $num2;
        $num2 = $t;
    }
    while ($t = ($num1 % $num2) != 0) {
        $num1 = $num2;
        $num2 = $t;
    }
    return $num2;
}
$num_1 = $arr2[0];
$denum_1 = $arr2[1];
$num_2 = $arrTem_2[0];
$denum_2 = $arrTem_2[1];

$newNum = $num_1 * $denum_2 + $num_2 * $denum_1;
$newDenum = $denum_1* $denum_2;
echo $denum_2;
$gcd = gcd($newNum, $newDenum);
$newNum /=$gcd;
$newDenum /=$gcd;

//fclose($handle);
$num =0;
//for($i=1; $i<$numArray[0] +1; $i++){
   // $num += (int)$numArray[$i];
//}


echo "<br />";
//echo $newNum.'/'.$newDenum;
//phpinfo();
function strip_tags_content($text, $tags = '', $invert = FALSE) { 

  preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($tags), $tags); 
  $tags = array_unique($tags[1]); 
    
  if(is_array($tags) AND count($tags) > 0) { 
    if($invert == FALSE) { 
      return preg_replace('@<(?!(?:'. implode('|', $tags) .')\b)(\w+)\b.*?>.*?</\1>@si', '', $text); 
    } 
    else { 
      return preg_replace('@<('. implode('|', $tags) .')\b.*?>.*?</\1>@si', '', $text); 
    } 
  } 
  elseif($invert == FALSE) { 
    return preg_replace('@<(\w+)\b.*?>.*?</\1>@si', '', $text); 
  } 
  return $text; 
} 
$text = '<b>sample</b> text with <div>tags</div>'; 
echo strip_tags_content($text);
// import namespaces
