<pre>
<?php
// ! task 1

//1
$fruits = ["Apple","Banana","Orange","Mango","Peach"];

//2
foreach($fruits as $fruit)
{
    echo "$fruit <br> ";
}

// 3 
array_push($fruits,"Blueberry");
print_r($fruits);

//4 
array_pop($fruits);
print_r($fruits);

// 5
$indexOffruits=array_search("Orange",$fruits)+1;
if($indexOffruits==false){ echo "the furit is not found";}
else{ echo "the fruit is found in index number {$indexOffruits}";}

echo "<br>============================================== <br>";

//! task 2 
//1
$people = array(
    "Alice" => 25,
    "Bob" => 30,
    "Charlie" => 35,
    "Diana" => 28,
    "Eve" => 22
);

//2
foreach ($people as $person => $age) {
    echo "$person : $age <br>";
   }

//3
echo "<br>";
$people["abood"]=20;
print_r($people);

//4
echo "<br>";
unset($people["abood"]);
print_r($people);

//5 
if (array_key_exists("Eve",$people)) echo "Key exists!";
else echo "Key does not exist!";

echo "<br>============================================== <br>";

// ! task 3
//1
$students = [
    ["John Doe", 20, "A"],
    ["Jane Smith", 22, "B"],
    ["Emily Davis", 21, "A-"]
];

//2
foreach($students as $student)
{
    echo "{name} : $student[0] {age} : $student[1]  {grade} : $student[2] <br>";
}

//3 
array_push($students,array("abood",22,"b"));
print_r($students);

//4
$students[1][2]= "c";
print_r($students);

//5
unset($students[1]);
print_r($students);

echo "<br>============================================== <br>";

// ! task 4 
$color=array("red","green","blue");
$color2=array("red2","green2","blue2");
$colorA = array(
    "red" => 0.99,
    "green" => 0.59,
    "blue" => 1.29,
    "black" => 2.99,
    "white" => 1.49
);
array_push($color,"black");
array_pop($color);
print_r(array_keys($colorA));
print_r(array_values($colorA));
echo count($color);
print_r(array_merge($color,$color2));
$pos=array_search("green",$color);
sort($color);
ksort($colorA);
asort($colorA);

echo "<br>============================================== <br>";

//! task 5

//1
$cities = ["Tokyo","Paris","londan","sydney","dubai","shanghai","moscow","berlin","china","jordan"];

//2
print_r(array_reverse($cities));

//3
$indexOfCity=array_search("dubai",$cities);
if($indexOfCity==false){ echo "the city is not found";}
else{ echo "the city is found in index number $indexOfCity";}

//4
unset($cities[$indexOfCity]);
print_r($cities);

// 5 
$supCities = array_slice($cities,0,3);
print_r($supCities);

echo "============================================== <br>";
// ! task 6

//1
$products = array(
    "Apple" => 0.99,
    "Banana" => 0.59,
    "Orange" => 1.29,
    "Strawberry" => 2.99,
    "Mango" => 1.49
);

//2
ksort($products);
print_r($products);

//3
asort($products);
print_r($products);

//4
echo (array_sum($products) / count($products));

//5
$max = 0;
foreach ($products as $product => $price) {
   if($max < $price)$max=$price;
  }
echo "<br>$max ";


echo "<br>============================================== <br>";

// ! task 7
$books = array(
    array(
        "title" => "A Kill a Mockingbird",
        "author" => "Harper Lee",
        "year" => 1960
    ),
    array(
        "title" => "1984",
        "author" => "George Orwell",
        "year" => 2011
    ),
    array(
        "title" => "Pride and Prejudice",
        "author" => "Jane Austen",
        "year" => 2005
    ),
    array(
        "title" => "The Great Gatsby",
        "author" => "F. Scott Fitzgerald",
        "year" => 2013
    ),
    array(
        "title" => "Moby-Dick",
        "author" => "Herman Melville",
        "year" => 2022
    )
);

//2
foreach($books as $book)
{
    if($book["year"] >=2010)
    {
        echo "{title} : {$book['title']}  {author} : {$book['author']} {year} : {$book['year']} <br> ";
    }
}

//3 
array_push($books,array("title" => "test",
        "author" => "abood tamimi",
        "year" => 2024));
print_r($books);

//4
$books[1]['author'] = "update now";
print_r($books);

//5

function compareByTitle($a, $b) {
    return strcmp($a["title"], $b["title"]);
}

usort($books, "compareByTitle");
print_r($books);

echo "<br>============================================== <br>";

// ! task 8 
//1
function toUpperCase($index)
{
    return strtoupper($index);
}
$colorB = array("red","black","green");
$newArrayB=array_map("toUpperCase",$colorB);
print_r($newArrayB);

//2
function bigger($num)
{
    if($num<3) return $num;
}
$a1=array(1,3,2,3,4);
print_r(array_filter($a1,"bigger"));

//3
function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}
$a2=array(1,2,3);
$str=array_reduce($a2,"sum");
echo "$str <br>";

//4 
function myfunction(&$value,$key)
{
$value="yellow";
}
$a3=array("a"=>"red","b"=>"green","c"=>"blue");
array_walk($a3,"myfunction");
print_r($a3);

//5
$a5=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"black");
$a6=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a5,$a6);
print_r($result);

//6
$result2=array_intersect($a5,$a6);
print_r($result2);

//7
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
print_r($c);

//8
$a10 = array(
    array(
      'id' => 5698,
      'first_name' => 'Peter',
      'last_name' => 'Griffin',
    ),
    array(
      'id' => 4767,
      'first_name' => 'Ben',
      'last_name' => 'Smith',
    ),
    array(
      'id' => 3809,
      'first_name' => 'Joe',
      'last_name' => 'Doe',
    )
  );
  
  $last_names = array_column($a10, 'last_name');
  print_r($last_names);

  
?>
<pre/>
