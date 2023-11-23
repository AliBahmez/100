<?php
//function strlen 1
echo mystrlen("Holle world");
function mystrlen($str) {
    static $len = 0;
 for($i = 0; isset($str[$i]); $i++)
 {
    $len ++;
 }
 return $len;   
};

//function strpos 2
function mystrpos($v,$w){
    $po=0;
    for($i = 0 ; $i<mystrlen($v); $i++)
    {
        if($v[$i] == $w[0]){
            $po=$i;
       break;
        }
     else{
        $po=-1;

    }
}
return $po;
}
 echo "<br>". mystrpos("Holle world","w ")  ;

//function count array 3
 function mycunot($array=[]){
     $count = 0;
    foreach($array as $item){
        $count ++;
    }
    return $count;
 }
 $s =[1,2,3,4,5,6,7,8,9,10];
 echo "<br>". mycunot($s);

// function strsub 4
function mystrsub($name, $value , $z=0){
    $reslt = "";
    if($z >= 0){
        for($i = $z ; $i<$value; $i++)
    {
        $reslt =$reslt.$name[$i];
    }
    }else {
        $z = $z *  - 1;
        $sum=0;
        for ($i = strlen($name) - 1 - $z; $i >= strlen($name)-$value-1; $i--) {
            $sum .= $name[$i];
        }
        for($i = strlen($sum)-1; $i>0;$i--)
        {
            $reslt = $reslt.$sum[$i];
        }
    }
    return $reslt;
}
echo "<br>" . mystrsub('ABCDE',2, -1);


// function max number 5
function mymaxnumber($array=[]){
    $maxValue = $array[0];
        foreach ($array as $value) {
            if ($value > $maxValue) {
                $maxValue = $value;
            }
        }
    
         return $maxValue;
    
}
echo '<br>'. mymaxnumber([1,5,18,2,4]);

// function max number 6
function myminnumber($array=[]){
    $minValue = $array[0];
    foreach ($array as $value) {
        if ($value < $minValue) {
            $minValue = $value;
        }
    }
    return $minValue;
}
echo '<br>'. myminnumber([1,5,6,2,4]);

//function abs 7
function myabs($number){
    $x=0;
 if($number >= 0) {
    $x = $number * 1;
 }else{
    $x = $number * -1;
 }
 return $x;
}
echo '<br>'. myabs(-4);

//function str_pad 8 
function mystr_pad($string, $length, $pad, $pad_type = STR_PAD_RIGHT) {
    // $length = strlen($string);
    $text='';
    $lengthname =strlen($string);
    if($pad_type == STR_PAD_LEFT){
        
        for ($i = 0; $i < $length - $lengthname; $i++) {
            $text =$text.$pad;
        }
        for ($i = 0; $i < $lengthname; $i++) {
        
            $text =$text.$string[$i];
        }
    } 
    elseif($pad_type == STR_PAD_RIGHT) {
    for ($i = 0; $i < $lengthname; $i++) {
        
        $text =$text.$string[$i];
    }
    for ($i = 0; $i < $length - $lengthname; $i++) {
        $text =$text.$pad;
    }
}elseif($pad_type == STR_PAD_BOTH){
    $number = ($length - $lengthname)/2;
    for ($i = 0; $i < (int)$number; $i++){
        $text =$text.$pad;
    }
    for ($i = 0; $i < $lengthname; $i++) {
        $text =$text.$string[$i];
    }
    for ($i =0; $i < round($number); $i++) {
        $text =$text.$pad;
    }
    

}
    return $text;

}
echo '<br>'. mystr_pad('Holle',11 ,'*', STR_PAD_BOTH);   


//function str_repeat 9
function mystr_repeat($string , $repeate) {
    $result='';
    for ($i = 0; $i < $repeate; $i++) {
        $result .=$string;
        $result .= " \t ";
    }
    return $result;
}
 echo '<br>'. mystr_repeat('Ali',3);

//function strrchr 10
function mystrrchr($string , $separator ) {
    $lenght = strlen($string);
    $result = '';
    $x = 0;
    for( $i = 0; $i < $lenght; $i++ ) {
        if( $string[$i] == $separator ) {
        $x .= $i;
        break;
        }
    }
    for( $i = $x; $i < $lenght; $i++ ){
        $result = $result.$string[$i];
    }
    return $result;
}
echo '<br>'. mystrrchr('Ali saeed.com','.');

//function stristr 11
function mystristr($string , $char , $b = false) {
    $lenght = strlen($string);
    $count =0;
    $result = '';
   if( $b == false  ) {
    for( $i = 0; $i < $lenght; $i++ ) {
        if( $string[$i] == $char ) {
            $count .= $i;
            break;
        }
    }
    for( $i = $count; $i < $lenght; $i++ ) {
        $result .= $string[$i];
    }
   }else {
    for( $i = 0; $i < $lenght; $i++ ) {
        if( $string[$i] != $char ) {
            $result .= $string[$i];
        }else {
            break;
        }
    }
   }
    return $result;
}
echo '<br>'. mystristr('aliseed@gmail.com','e',true);


//function strpbrk 12
function mystrpbrk($string , $char) {
    $lenght = strlen($string);
    $count =0;
    $result = '';
    for( $i = 0; $i < $lenght; $i++ ) {
        if( $string[$i] == $char ) {
            $count .= $i;
            break;
        }
    }
    for( $i = $count; $i < $lenght; $i++ ) {
        $result .= $string[$i];
    }
    return $result;
}
echo '<br>'.mystrpbrk('This is a Simple text.','S');

// function strTolower 13
function myStrToLower($string) {
    $lowercaseString = '';

    for ($i = 0; $i < strlen($string); $i++) {
        $char = $string[$i];
        $ascii = ord($char);

        if ($ascii >= 65 && $ascii <= 90) {
            $ascii += 32;
            $char = chr($ascii);
        }

        $lowercaseString .= $char;
    }

    return $lowercaseString;
}
echo '<br>'.myStrToLower('Ali Saeed');
 
//function strToupper 14 
function myStrToUpper($string) {
    $uppercaseString = '';

    for ($i = 0; $i < strlen($string); $i++) {
        $char = $string[$i];
        $ascii = ord($char);

        if ($ascii >= 97 && $ascii <= 122) {
            $ascii -= 32;
            $char = chr($ascii);
        }

        $uppercaseString .= $char;
    }

    return $uppercaseString;
}
echo '<br>'.myStrToUpper('ali Saeed');

//function str_Replace 15
function myStrReplace($search, $replace, $subject) {
    $result = '';
    $subjectLength = strlen($subject);
    $searchLength = strlen($search);
    $replaceLength = strlen($replace);
    $pos = 0;

    while ($pos < $subjectLength) {
        $matchPos = strpos($subject, $search, $pos);

        if ($matchPos === false) {
            $result .= substr($subject, $pos);
            break;
        }

        $result .= substr($subject, $pos, $matchPos - $pos) . $replace;
        $pos = $matchPos + $searchLength;
    }

    return $result;
}
echo '<br>'.myStrReplace('Ahmed','Ali','Ahmed Saeed');


//function lcfirst 16
function mylcfirst($string) {
    $lenght = strlen($string);
    $result = '';
    for ($i = 0; $i < $lenght; $i++) {
    if($string[$i]==$string[0]){
        $char = $string[0];
        $ascii = ord($char);

        if ($ascii >= 65 && $ascii <= 90) {
            $ascii += 32;
            $char = chr($ascii);
        }
        $result .= $char;
    }else{
        $result .= $string[$i];
    }
    }
    return $result;
}
echo '<br>' . mylcfirst('Ali Saeed Bahmez');


//function ucfirst  17

function myucfirst($string) {
    $lenght = strlen($string);
    $result = '';
    
    if($lenght > 0){
        $char = $string[0];
        $ascii = ord($char);

        if ($ascii >= 97 && $ascii <= 122) {
            $ascii -= 32;
            $char = chr($ascii);
        }
        $result .= $char;
        
        for ($i = 1; $i < $lenght; $i++) {
            $result .= $string[$i];
        }
    }
    return $result;
}
echo '<br>'. myucfirst('ali saeed bahmuz');


//function ucword 18
function myucwork($string, $char=' ') {
    $lenght = strlen($string);
    $result = '';
    if($lenght > 0){
        $result .= myStrToUpper($string[0]);
        for ($i = 1; $i < $lenght; $i++){
            if($string[$i - 1] === $char && $string[$i]!== $char) {               
                $result .= myStrToUpper($string[$i]);
        }else{

            $result .= $string[$i];
        }
    }
}
return $result;
}
echo '<br>' . myucwork('ali|saeed|bahmez|kl','|');

//function implode 19
function myimplode($array , $space= '') {
    $result = '';
    // foreach ($array as $name) {
    //     $result .= $name;
    // }
    for( $i = 0; $i < count($array);$i++ ){
    $result .= $array[$i];
    $result .= $space;    
    }  
      return $result;
}
$array = ['ali','saeed','ahmed','salem'];
echo '<br>'. myimplode($array,' | ');

//function chunk_split 20

function mychunk_split($string , $number, $end=" ") {
    $lenght = strlen($string);
    $x=-1;
    $result = '';
    for($i = 0; $i < $lenght; $i++ ){
        $x++;
        if($x == $number){
            $result .= $end;
            $result .= $string[$i];
            $x = 0;
        }
        else{
            $result .= $string[$i];
        }
    }
    return $result;
}
echo '<br>'. mychunk_split('Ahmed saeed',3 ,'@');

//function array_reverse 21
function myarray_reverse($array, $preserve_keys = false) {
    $result = [];
    $lenght = count($array)-1;
    if( $preserve_keys == true ){
    for( $i = $lenght; $i >= 0 ; $i--){
        $result[$i] = $array[$i];
    }
} else {
    for( $i = $lenght; $i >= 0; $i-- ){
        $result[] = $array[$i];
    }
}
    return $result;
} 

$family =['Osama','Ahmed','Mahmoud','Salem',['Ali','Saeed'], 'kaled']; 
echo '<br>';
echo '<pre>';
print_r (myarray_reverse($family , true));
echo '</pre>';
echo '<br>';


//function array_flip 22
function myarray_flip($age){
    $result=[];
foreach($age as $x => $x_value) {

$result[$x_value] = $x;
}
return $result;
}
$age = array("Ali"=>"35", "Salem"=>"37", "Mahmoud"=>"43", );
echo '<pre>';
print_r(myarray_flip($age));
echo '</pre>';


// function count array 23
function mycount_array($array, $mode = null){
$count = 0;
if( $mode == 1 ){
    foreach($array as $name ) {
        if( is_array($name)) {
         $count++;
         foreach($name as $v) {
         $count++;
         }
         }else{
             $count++;
         }
        }
}elseif ($mode == null) {
    foreach($array as $name) {
        $count++;
    }
}
return $count;
}
$x=[1,2,3,4,5,4,[1,2]];
$array=["ali",'ahmed','saeed','d',['a','ds','k']];
echo '<br>' . mycount_array($array,1);

//function in_array 24
function myin_array($elment, $array, $strict = false){
   if($strict == false){
    foreach($array as $value) {
        if($value == $elment) {
            return true;
        }
    }
   }elseif($strict == true){
    foreach($array as $value) {
        if($value === $elment) {
            return true;
        }
    }
   }
}
$z=[1,2,3,"4",5];
echo '<br>'. myin_array(4,$z,false);

//function array_Key_exists 25
function myarray_key_exists($elment, $array){
    foreach($array as $key => $value) {
        if($elment == $key) {
            return true;
        }
    }
}
$student = array("Ali"=>"35", "Salem"=>"37", "Mahmoud"=>"43", );
echo '<br>'. myarray_key_exists('Salem', $student);


//function array_key 26
function myarray_key($array,$filter_value=null,$strict = false){
    $result=[];
   if($filter_value == null){
    for($i=0 ; $i<count($array); $i++){
        $result[]=$i;
    }
   }else{
    for($i=0 ; $i<count($array); $i++) {
       if($strict === true){
        if($array[$i] === $filter_value) {

            $result[]=$i;
        }
       }elseif($strict === false){
        if($array[$i] == $filter_value) {

            $result[]=$i;
        }
       }
        }
   }
    return $result;
}
$a=[1,4,3,4,5,6,3,'4'];
echo '<br>';
echo '<pre>';
print_r (myarray_key($a ,4,true)) .'<br>';
echo '</pre>';

//function array_value 27

function myarray_values($array){
    $result=[];
    foreach($array as $key => $value){
        $result[] = $value ;
    }
    return $result;
}


$stu = array("name"=>"Ali", "age"=>"37", "level"=>"4", );
echo '<pre>' ;
print_r(myarray_values($stu));
echo '</pre>'; 

//function array_product 28
function myarray_product($array){
    $result=1;
    foreach($array as $value){
        $result *= $value;
    }
    return $result;
}
$q=[10,5,2,10,2];
echo '<br>'. myarray_product($q);

//function array_sum 29
function myarray_sum($array){
    $result= 0;
    foreach($array as $value){
        $result += $value;
    }
    return $result;
}
echo '<br>'. myarray_sum($q);

//function array_push 30
function myarry_push($array, ...$char){
    
   for($i =0; $i < count($char); $i++){
    $array[] = $char[$i];
   }
    return $array;
}
$u =[1,2,3,4,5];
echo '<br>'.'k' ;
echo '<pre>' ;
print_r (myarry_push($u,4,5));
echo '</pre>';


//function sufit_array 31
function re($array){
    for($i = 0; $i< count($array); $i++){
        unset($array[$array[0]]);
    }
    return $array[0];
}
$chars = ['A','B','C','D'];
echo '<pre>';
print_r(re($chars));
echo '</pre>';

//functon array_pop 32
function myarray_pop($array){
    $lenght = count($array) -1;
    $result =[];
    for($i = 0; $i < $lenght; $i++){
        $result[] = $array[$i];
    }
    return $result;
}

$chars = ['A','B','C','D','F'];
echo '<pre>';
print_r(myarray_pop($chars));
echo '</pre>';


//function array_column 33

function myarray_column($array, $column){
    $result =[];
    foreach($array as $row => $carrow){
      foreach($carrow as $key => $value){
        if($column == $key){
            $result[] = $value;
        }
      }
    }
    return $result;
} 
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
 echo '<pre>';
print_r(myarray_column($records,'last_name'));
echo '<pre>';

//function array_combine 34
function myarray_combine($keys, $values) {
    $result = [];
    foreach ($keys as $index => $key) {
        if (isset($values[$index])) {
            $result[$key] = $values[$index];
        }
    }
    return $result;
}
$a = array('green', 'red', 'yellow','blue');
$b = array('avocado', 'apple', 'banana','black');
print_r(myarray_combine($a,$b));
echo '<br>'; 

//function array_count_value 35
function myarray_count_values($array){
    $result =[];
    foreach ($array as  $value) {
        
        if(isset($result[$value])){
            $result[$value]++;
        }else{
            $result[$value]= 1;
        }
    }
    return $result;
}
$array = array(1, "hello", 1, "world", "hello",1);
print_r(myarray_count_values($array));

//function array_diff_key 37
function myarray_diff_key($array1, $array2){
    $result = [];
    foreach($array1 as $key => $value) {
        if(isset($array2[$key])){

        }else{
            $result[$key] = $value;
        }
     }
     return $result;
}
$array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$array2 = array('green' => 5, 'yellow' => 7, 'cyan' => 8);
print_r(myarray_diff_key($array1,$array2));

//function array_diff 38

function myarray_diff($array1,$array2){

    $result = [];
    foreach($array1 as $key => $value) {
        if(!in_array($value, $array2)){

            $result[] = $value;
        }else{
        }
     }
     return $result;
}
$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
print_r(myarray_diff($array1, $array2));


//function array_fill_keys 39
function myarray_fill_keys($array, $value){
$result =[];
 foreach($array as $key =>$val){
    $result[$val] = $value;
 }
 return $result;
}
$keys = array('foo', 5, 10, 'bar');
print_r(myarray_fill_keys($keys, 'banana'));


//function array_fill 40
function myarray_fill($start_index,$count,$value){
    $result = [];
    $x = $start_index + $count;
    for( $i = $start_index; $i < $x; $i++ ){
        $result[$i] = $value;
    }
    return $result;
} 
print_r(myarray_fill(5, 6, 'banana'));

//function array_intersect_assoc 41
function myarray_intersect_assoc($array1, $array2){
    $result = [];   
    foreach($array1 as $key => $value){
        if(in_array($value, $array2)){
        $result[$key] = $value;
        }
    }
    return $result;
} 
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "b" => "yellow", "blue", "red");
print_r(myarray_intersect_assoc($array1, $array2));

//function array_intersect_key 42
function myarray_intersect_key($array1, $array2){
    $result = [];   
    foreach($array1 as $key => $value){
        if(array_key_exists($key, $array2)){
        $result[$key] = $value;
        }
    }
    return $result;
} 
$array11 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array21 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);
print_r(myarray_intersect_key($array11, $array21));

//function array_intersect 43
function myarray_intersect($array1, $array2){
    $result = [];   
    foreach($array1 as $key => $value){
        if(in_array($value, $array2)){
        $result[$key] = $value;
        }
    }
    return $result;
}
$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");
print_r(myarray_intersect($array1, $array2));

//function arraay_kry_first 44
function myarray_key_first($array){
    $result ='';
    foreach($array as $key => $value){
        $result =$key[0];
        break; 
    }
    return $result;
}

$array = ['a' => 1, 'b' => 2, 'c' => 3];

echo  myarray_key_first($array);


//function array_key_last 45
function myarray_key_last($array){
    $result ='';
    foreach($array as $key => $value){
        $result =$key;
         
    }
    return $result;
}
echo '<br>'. myarray_key_last($array);

//function myarray_merge 46
function myarray_merge($array, $array2){
    $result = [];
    foreach($array as $key => $value){
        $result[$key] = $value;
    }
    foreach($array2 as $key1 => $value1){
        $result[] = $value1;
    }
    return $result;
}
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = myarray_merge($array1, $array2);
echo '<br>';
print_r($result);

//function array_search 47

function myarray_search($elment, $array){
    $result = '';
foreach($array as $key => $value){
    if($value == $elment){
        $result .= $key;
    }
}
return $result;
}
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
 echo '<br>' . myarray_search('green', $array);

//function array_splice 48
function myarray_splice($array,$lenght){
    $result = [];
    for($i=0 ; $i<$lenght; $i++){
        $result[] = $array[$i];
    }
    return $result;
}
$input = array("red", "green", "blue", "yellow");
echo '<br>';
print_r(myarray_splice($input, 3));

//function array_unique 49
function myarray_unique($array){
    $result = [];
    foreach($array as $key => $value){
        if(!in_array($value, $result)){
            $result[] = $value;
        }
    }
    return $result;
}
$input = array("a" => "green", "red", "b" => "green", "blue", "red");
$result = myarray_unique($input);
print_r($result);

//function array_unshift 50
function myarray_unshift($array, ...$array2){
$result =[];
foreach($array2 as $key => $value){
    $result[$key]=$value;
}
foreach($array as $key => $value){
    $result[]=$value;
}
return $result;
}
$queue = ["orange","banana"];
print_r(myarray_unshift($queue, "apple", "raspberry",));

//51
function myarray($array){
    $result = [];
    foreach($array as $key => $value){
        $result[$key] = $value;
    }
    return $result;
}
$array = array(1, 1, 1, 1,  1, 8 => 1,  4 => 1, 19, 3 => 13);
print_r(myarray($array));

//52
function mycurrent($array){
    $result = '';
    for($i =0 ; $i <1 ; $i++){
        $result .= $array[ $i ];
    }
    return $result;
}
$transport = array('foot', 'bike', 'car', 'plane');
echo '<br>';
print_r(mycurrent($transport));

//53
function mynext($array){
    $result = '';
    for($i =1 ; $i <=1 ; $i++){
        $result .= $array[ $i ];
    }
    return $result;
} 
echo '<br>';
print_r(mynext($transport));

//54 
function myend($array){
    $result = '';
    $lenght = count($array) -1;
    for($i =$lenght ; $i <count($array) ; $i++){
        $result .= $array[ $i ];
    }
    return $result;
}
echo '<br>';
print_r(myend($transport));

$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
echo '<br>'.krsort($fruits);

//55
function myrange( $separator=' ',$start, $end){
    $result = '';
    for($i = $start ; $i <= $end; $i++){
        $result .=$i;
        $result .= $separator;
    }
    return $result;
}
echo '<br>'. myrange(',',0,12);

//56
function myreset( $array ){
    $result = '';
    for($i = 0; $i < 1; $i++){
        $result .= $array[$i];
    }
    return $result;
}

$array = array('step one', 'step two', 'step three', 'step four');
echo '<br>'. myreset($array);

//function ceil 57
function myceil($number){
    if($number >=0){
    if(is_float($number)){
        $number++;
}
}
    return (int)($number);
}
echo '<br>'. myceil(-3.5);

//functin fdiv 58
function myfdiv($number1,$number2){
    $sum = $number1 / $number2;
    return $sum;
}
echo '<br>'. myfdiv(4,2);

//function float 59
function myfloat($number){
    return (int)$number;
}
echo '<br>'. myfloat(5.9);

//function fmod 60
function myfmod($number1,$number2){
    $sum = $number1 + $number2;
    return $sum;
}
echo '<br>'. myfmod(5.2 , 5.4);

//function intdiv 61
function myintdiv($number1,$number2){
    $sum = $number1 / $number2;
    $a=str_split($sum);
    return $a[0];
}
echo '<br>'. myintdiv(3 , 2);

//function is_nan 62
function myis_nan($number){
    if($number !== $number){
        return 1;
    }
}
echo '<br>'. myis_nan(sqrt(-1));


//63
function my_pi(){
    return 3.1415926535898;
}
echo '<br>'. my_pi();

//64
function mypow($number1,$number2){
    $sum= 1;
    for($i = 0; $i < $number2; $i++){
        $sum = $sum * $number1;
}
return $sum;
}
echo '<br>'. mypow(2,8);

//65 
function myround($number){
    $result = str_split($number);
    return $result[0];
}
echo '<br>'. myround(5.5);

//67
 function mychr( $number){
    $asciiArray = array(
        'A' => 65, 'B' => 66, 'C' => 67, 'D' => 68, 'E' => 69, 'F' => 70, 'G' => 71, 'H' => 72, 'I' => 73, 'J' => 74, 'K' => 75, 'L' => 76, 'M' => 77,
        'N' => 78, 'O' => 79, 'P' => 80, 'Q' => 81, 'R' => 82, 'S' => 83, 'T' => 84, 'U' => 85, 'V' => 86, 'W' => 87, 'X' => 88, 'Y' => 89, 'Z' => 90,
        'a' => 97, 'b' => 98, 'c' => 99, 'd' => 100, 'e' => 101, 'f' => 102, 'g' => 103, 'h' => 104, 'i' => 105, 'j' => 106, 'k' => 107, 'l' => 108, 'm' => 109,
        'n' => 110, 'o' => 111, 'p' => 112, 'q' => 113, 'r' => 114, 's' => 115, 't' => 116, 'u' => 117, 'v' => 118, 'w' => 119, 'x' => 120, 'y' => 121, 'z' => 122
    );
    foreach($asciiArray as $key => $value){
        if($number == $value){
            return $key;
        }
    }
 }
 echo '<br>' . mychr(70);
 //68 
 function myord($char){
    $asciiArray = array(
        'A' => 65, 'B' => 66, 'C' => 67, 'D' => 68, 'E' => 69, 'F' => 70, 'G' => 71, 'H' => 72, 'I' => 73, 'J' => 74, 'K' => 75, 'L' => 76, 'M' => 77,
        'N' => 78, 'O' => 79, 'P' => 80, 'Q' => 81, 'R' => 82, 'S' => 83, 'T' => 84, 'U' => 85, 'V' => 86, 'W' => 87, 'X' => 88, 'Y' => 89, 'Z' => 90,
        'a' => 97, 'b' => 98, 'c' => 99, 'd' => 100, 'e' => 101, 'f' => 102, 'g' => 103, 'h' => 104, 'i' => 105, 'j' => 106, 'k' => 107, 'l' => 108, 'm' => 109,
        'n' => 110, 'o' => 111, 'p' => 112, 'q' => 113, 'r' => 114, 's' => 115, 't' => 116, 'u' => 117, 'v' => 118, 'w' => 119, 'x' => 120, 'y' => 121, 'z' => 122
    );
    foreach($asciiArray as $key => $value){
        if($char == $key){
            return $value;
        }
    }
 }
 echo'<br>' . myord('F');


 //69
 function myexplode($delimiter, $string) {
    $result = [];
    $current = '';
    $length = strlen($string);

    for ($i = 0; $i < $length; $i++) {
        if ($string[$i] !== $delimiter) {
            $current .= $string[$i];
        } else {
            if ($current !== '') {
                $result[] = $current;
                $current = '';
            }
        }
    }
    if ($current !== '') {
        $result[] = $current;
    }
    return $result;
}
$string = "Hello world how are you?";
$delimiter = " ";
$result = myexplode($delimiter, $string);
echo '<br>'. $result[0];

//70
function mylcfirsts ($string){
    $result = '// ';
    $lenght = strlen($string);
    for($i =0 ; $i < $lenght; $i++){
        $result .= $string[$i];
    }
    return $result;
}
$array = 'lastname';
echo '<br>'. mylcfirsts($array);

//71
function mystr_starts_with($string, $word){
    $result = '';
    for($i = 0; $i < strlen($string); $i++){
        if($string[$i] != ' '){
            $result .= $string[$i];
        }else{
            break;
        }
    }
        if ($result == $word) {
            return 1;

    }else{
        return 0;
    }
}
echo '<br>'. mystr_starts_with('Holle world', 'Holle');

//72
function mystr_word_count($string){
    $result = '';
    for($i = 0; $i < strlen($string); $i++){
        if($string[$i] != ' '){
            $result = $i;
        }else{
            break;
        }
    }
            return $result+1;
}
echo '<br>'. mystr_word_count('Holle, world');

//73
function mystrchr($haystack, $needle) {
    $position = strpos($haystack, $needle);
    return substr($haystack, $position);
}
$string = "Hello, world!";
$substring = "world";
$result = mystrchr($string, $substring);
echo '<br>'. $result;

//74
// function mysubstr_count($haystack, $needle, $offset = 0, $length = null) {
//     $count = 0;
//     $haystackLength = strlen($haystack);

//     if ($length === null) {
//         $length = $haystackLength;
//     }

//     for ($i = $offset; $i < $offset + $length; $i++) {
//         if (substr($haystack, $i, strlen($needle)) === $needle) {
//             $count++;
//         }
//     }

//     return $count;
// }
// $text = 'This is a test';
// echo '<br>'. mysubstr_count($text, 'is');

//75
function mysubstr($string, $start) {
    $result ='';
    for ($i = 0; $i < $start; $i++) {
        $result .= $string[$i];
    }
    return $result;
}
echo '<br>'. mysubstr('Ali', 1);

//76
function myucwords($string) {
    // $lenght = strlen($string);
    $result = '';
    $x = true;
    for ($i = 0; $i < strlen($string); $i++){
        if($x == true){
        if($string[ $i ] != ' '){
            $char = $string[$i];
                $ascii = ord($char);
                if ($ascii >= 97 && $ascii <= 122) {
                    $ascii -= 32;
                    $char = chr($ascii);
                }
                $result .= $char;   
        }else{
            $x = false;
            $index = $i;
        }
    }
    if( $x == false ){
        for ($i = $index; $i < strlen($string); $i++){
            $result .= $string[$i];
        }
    }
}
return $result;
}
$foo = 'hello world!';
echo '<br>'. myucwords($foo);

//77
function mystr_contains($string, $needle){
    // $a = strpos($string, $needle);
    
    $result= '';
    for ($i = 0; $i < strlen($string); $i++){
        if($string[$i] == $needle[0]){
           $result= true;
           break;
        }
    }
    return $result;
}
$string = "Hello, world!";
echo "<br>". mystr_contains($string, 'world!');


//78
function mystr_ends_with($string, $word){
    $result = '';
    $wordend='';
    for($i = strlen($string)-1; $i >=0 ; $i--){
        if($string[$i] != ' '){
            $result .= $string[$i];
        }else{
            break;
        }
    }
    for ($i = strlen($result)-1; $i >= 0; $i--){
        $wordend .= $result[$i];
    }

        if ($wordend == $word) {
            return 1;

    }else{
        return 0;
    }
}
$string = "Hello, world!";
echo "<br>". mystr_ends_with($string, 'world!');

//79
function mychop($string){
    $result ='';
    for($i = 0; $i < strlen($string); $i++){
        if($string[$i] == ' ' && $string[$i + 1] == ' '){
            break;
        }else{
            $result .= $string[$i];
        }
    }
    return $result;
}

$string = "Hello, world!     ";

$trimmedString = mychop($string);

echo '<br>'.$trimmedString; 

//80
function myltrim($string){
    $result = '';
    $x = true;
    for($i = 0; $i < strlen($string); $i++){
        if($x == true){
        if($string[$i] == ' '){
                
            }else{
                $x = false;
                $result .= $string[$i];
            }            
        }else{
            $result .= $string[$i];
        }
    }
    return $result;
}
$string = "     Hello, world!";
$trimmedString = myltrim($string);
echo '<br>'. $trimmedString;

//81
// number_format()
function mynumber_format($number,$decimals,$decimal_separator){
    $result =0;
    // $lenght = strlen($number);
for($i = 0; $i < strlen($number)-$decimals; $i++){
    $result .= $number[$i];
    if($i == $decimals-1){
        $result .= $decimal_separator;
    }
}
return $result;
}
$number = '12345.6789';
$formattedNumber = mynumber_format($number, 2, ',',);
echo '<br>'.$formattedNumber;

//82
function myparse_str($queryString, &$params) {
    $pairs = explode('&', $queryString);

    foreach ($pairs as $pair) {
        $parts = explode('=', $pair);
        $key = urldecode($parts[0]);
        $value = isset($parts[1]) ? urldecode($parts[1]) : '';

        if (isset($params[$key])) {
            if (!is_array($params[$key])) {
                $params[$key] = array($params[$key]);
            }
            $params[$key][] = $value;
        } else {
            $params[$key] = $value;
        }
    }
}
$queryString = "name=John&age=30&city=New+York";
parse_str($queryString, $params);
echo '<br>'. $params['name']; 
echo '<br>'.$params['age'];   
echo '<br>'.$params['city']; 
?>
