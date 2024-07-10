<pre>

<?php
// ^ function tasks

// * task 1
function checkPrime($num){
    if ($num == 1)
    return 0;
for ($i = 2; $i <= $num/2; $i++){
    if ($num % $i == 0)
    return 0;
}
return 1;
}
$prime=checkPrime(7);
if($prime ==1) echo "Prime";
else echo "Not Prime";

// * task 2
function reversString($str)
{
    $revStr="";
    for($i=strlen($str)-1 ; $i>=0 ; $i--)
    {
        $revStr= $revStr . $str[$i];
    }
    return $revStr;
}
echo "<br>".reversString('remove')."<br>";


//*task 3 
function islower($str)
{
    if(ctype_lower($str)) echo "your string is ok <br>";
    else echo "your string is not ok <br>";
}
islower("remove");


//*task 4 
function swapVar(&$var1,&$var2)
{
    $temp = $var1;
    $var1=$var2;
    $var2=$temp;
}
$var1=10;
$var2=20;
swapVar($var1,$var2);
echo $var1 ."<br>";
echo $var2 ."<br>";

//* task 6
function isArmstrongNumber($number){
    $sum = 0;  
    $currentNum = (int)$number;  
    while($currentNum != 0)  
    {  
        $rem = $currentNum % 10;  
        $sum += ($rem*$rem*$rem);  
        $currentNum /= 10;  
    }  
    if ($number == $sum) return 1;
     else return 0;    
}
if(isArmstrongNumber(407)) echo "your number is Armstrong number \n";
else echo "your number is not Armstrong number \n";

//* task 7
function isPalindrome($string){  
    if (strrev($string) == $string)  return 1;  
    else return 0;
}  

if(isPalindrome("abccba")) echo "yes Palindrome\n";
else echo "Not Palindrome\n";

//*task 8
function removeDuplicates(&$arr)
{
    return array_unique($arr);
}
$array1 = array(2, 4, 7, 4, 8, 4);
print_r(removeDuplicates($array1));

echo "<br>============================================== <br>";

// ^ Loops

// * task 1 
for($i=1; $i<=10; $i++)
{
    if($i!=10)echo $i."-";
    else echo $i;
}
echo "<br>";

//* task 2
$sum1=0;
for($i=1; $i<=30; $i++)
{
  $sum1+=$i;
}
echo $sum1."<br>";

//* task 3
for($i=1; $i<=5; $i++)
{
    for($j=1; $j<=5; $j++)
    {
     echo "*  ";
    }
    echo"\n";
}

//* task 4
$num2=5;
$factorial =1;
for($i=1; $i<=$num2; $i++)
{
    $factorial*=$i;
}
echo $factorial ."<br>";

//* task 5

$first_num = 0;  
$second_num = 1;  
$n = 10; // Number of elements you want in the series
echo " $first_num, $second_num";  

for($i = 2; $i < $n; $i++) {  
    $next_num = $first_num + $second_num;  
    echo ", $next_num";  
    $first_num = $second_num;  
    $second_num = $next_num;  
}  
echo "<br>";

//*task 6
$text =strtolower("Orange Coding Academy");
$counter =0 ;
for($i=0; $i<strlen($text); $i++)
{
    if($text[$i]==="c")$counter++;
}
echo $counter."<br>";


 //*task 7 



echo'<table border="1" cellpadding="3px" cellspacing="0px">';
    for ($i = 1; $i <= 6; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 5; $j++) {
            $result = $i * $j;
            echo "<td>$i * $j = $result</td>";
        }
        echo "</tr>";
    }

echo'</table>';

//* task 8
for($i=1; $i<=50; $i++)
{
    if($i%5===0 && $i%3===0)echo " FizzBuzz ";
    elseif($i%5==0) echo " Buzz ";
    elseif($i%3==0) echo " Fizz ";
    else echo $i." ";
}

echo "<br> <br>";


//* task 9
for($i=1,$c=1; $i<=5; $i++)
{
    for($j=1; $j<=$i; $j++)
    {
        echo $c;
        $c++;
    }
    echo "\n";
}

echo "<br>============================================== <br>";

//^ string

//* task 1

echo strtoupper("hi my name is abdallah al tamimi")."\n";
echo strtolower("hi my name is abdallah al tamimi")."\n";
echo ucfirst("hi my name is abdallah al tamimi")."\n";
echo ucwords("hi my name is abdallah al tamimi")."\n";

//*task 2
$str4 = "082307";
$str5 = chunk_split($str4,2,":");
$str5[(strlen($str5))-1]=" ";
echo $str5;

//* task 3
$str6 = 'hihi my name is abdallah al tamimi';
if (strpos($str6,'name') !== false)  echo "\nthe word found \n";
else echo "\nthe word  not found \n";

// *task 4
echo basename($_SERVER['REQUEST_URI'])."\n";

//* task 5
$email1  = 'test@test.com';     
$userName1 = strstr($email1, '@', true); 
echo $userName1."\n";    

// * task 6
echo substr($email1,-3)."\n";

// *task 7
function password_generate($len)
{
    $word = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($word), 0, $len);
}

echo password_generate(5) ."<br>";

// *task 8
echo substr(trim($str6),0,stripos($str6," "));

// *task 9
$str6 = 'hellow world';
$str7 = 'hellow warld';
for($i=0; $i<strlen($str6); $i++)
{
    if($str6[$i]!==$str7[$i]) echo "\nthe difference is ".$str7[$i]."\n";
}

// * task 10
$str6="Twinkle, twinkle, little star.";
$arr= explode(" ",$str6);
var_dump($arr);


// *task 11
$char="z";
if($char==='z')
{
    $char='a';
    echo "\n".$char."\n";
} 
else echo "\n".++$char."\n";


//*task 12
$str6 = 'The brown fox'; 
$instString ='quick'; 
$instPos = 10; 
$new_string = substr_replace($str6, $instString.' ', $instPos, 0); 
echo $new_string."\n"; 

//* task 13
$str6 = '0000657022.24';
$str6 = trim($str6, '0');
echo $str6."\n";

//* task 14
$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", "", $my_str)."\n";


//* task 15
$my_str = 'The quick brown fox jumps over the lazy dog-----';
$my_str = rtrim($my_str , '-');
echo $my_str ;

//* task 16
$my_str = '\"\1+2/3*2:2-3/4*3';
echo "\n".str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str)."\n";

//* task 17
$my_str = 'The quick brown fox jumps over the lazy dog';
$arr = explode(" ",$my_str);
for($i=0; $i<5; $i++)
{
    echo $arr[$i]." ";
}
echo "\n";

//* task 18
$my_str = "2,543.12";
echo str_replace( ',', '',$my_str)."\n";

// *task 19
for($i='a'; $i<'z'; $i++)
{
    echo $i." ";
}
?>
</pre>





