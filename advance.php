<pre>
<?php
// *task 6 
// echo date(DATE_RFC2822);

//* task 1
// if (isset($_POST['submit'])) {
 
//   // check email 
//   if(empty($_POST['email']))
//   echo "email is required <br>";
// else{
//   $email=$_POST['email'];
//   if(!filter_var($email,FILTER_VALIDATE_EMAIL))
//   echo "email must be a valid email";

// }

// // check password 
// if(empty($_POST['password']))
// echo "password is required <br>";
// else{
// $password=$_POST['password'];
// $pattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{5,}$/";
// if(!preg_match($pattern ,$password)){
//   echo "password must be a valid password";
// }
// }

// }


// * task 2
// if (isset($_POST['submit'])) {
//     if(!empty($_POST['search']))
//     {
//         $url="https://".$_POST['search'].".com";
//         header("Location:$url");
//         exit();
//     }
// }
 
//* task 3
// if (isset($_POST['submit'])) {
//     if(!empty($_POST['fnumber'])) $fnumber = (int)$_POST['fnumber'];
//     if(!empty($_POST['snumber'])) $snumber = (int)$_POST['snumber'];
//     if(!empty($_POST['opr'])) $opr = $_POST['opr'];
  
//     switch ($opr) {
//   case "+":
//         echo  $fnumber +  $snumber;
//     break;
//   case "-":
//     echo  $fnumber -  $snumber;

//     break;
//   case "*":
//     echo  $fnumber *  $snumber;

//     break;
//     case "/":
//         if($snumber!=0) echo  $fnumber / $snumber;
//         else echo "can not do this <br>";
//         break;
//   default:
//         echo "enter valide opration <br>";
// }
// }
//* task 4

//* task 5
// echo "<br>".$_SERVER['SCRIPT_NAME']."<br>";
// echo "<br>".$_SERVER['DOCUMENT_ROOT']."<br>";

//*task 7
// session_start();

//   // echo session_id();

//   $_SESSION['name'] = "user name";

//   isset($_SESSION['views']) ? $_SESSION['views']++ : $_SESSION['views'] = 1;

//   echo "<br>Hello " . $_SESSION['name'] . " Views Count Is " . $_SESSION['views'];

  // * task 8
  $ip =null;
function addUniqueIP()
{
    global $ip;
    $ip =  getenv("REMOTE_ADDR");
    $file_path ='ipList.txt';
    if (is_writable($file_path)) {
        $iplist = file_get_contents($file_path);
        $iplist = explode("#//#", $iplist);
        if (!in_array(trim($ip), $iplist)) {
            $file = fopen($file_path, 'a+');
            fwrite($file, "#//#" . trim($ip));
            fclose($file);
        }
    } else {
        echo "File is not writable.";
    }
}
addUniqueIP();
function getUniqueVisitor()
{
    $file = file_get_contents( "ipList.txt");
    $file = explode(",", $file);
    return count($file);
}
echo $ip . "<br>";
echo "uniqe visitors are:" . getUniqueVisitor();


  // * task 9
//   setcookie("name", "abdallah",strtotime("+1 day"), "/");
//   echo "<br> name : ".$_COOKIE["name"]."<br>";

//   // !delete cookie
//   setcookie("name", "abdallah",time()-1, "/");

?>
</pre>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
    <!-- task 1 -->
  <!-- <section>
    <form action="advance.php" method="post">
      <label>email</label>
      <br><br>
      <input type="text" name="email">
      <br><br>
      <label>password</label>
      <br><br>
      <input type="password" name="password">
      <br><br>
     
      <div>
        <input type="submit" name="submit" value="submit">
      </div>
    </form>
  </section> -->

  <!-- task 2 -->
<!-- <section>
    <form  method="post">

        search:<input type="text" name="search" placeholder="enter url">
        <input type="submit" name="submit" value="Go">
    </form>
</section> -->

<!-- task 3 -->
<!-- <section>
<form  action="advance.php" method="post">
    number one <input type="number" name="fnumber">
    number second <input type="number" name="snumber">
    opraetion <input type="text" name="opr">
    <input type="submit" name="submit" value="submit">

</form>
</section> -->

</body>

</html>