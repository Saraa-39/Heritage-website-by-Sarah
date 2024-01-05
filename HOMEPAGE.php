<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="acount.css"> 
   <title>paradise</title>
</head>
<body>
    <body class="php">
    <header>
      <h1 class="logo">paradise</h1>
      <ul>
        <li> 
      <a  class="im" href="p.html">
        <img src="Arrow_Icon_In_Flat_Style_Arrow_Symbol_Web_Design_Arrow_IconsWeb_Icons_Style_Icons_PNG_and_Vector_with_Transparent_Background_for_Free_Download-removebg-preview.png" >
       </a>
    </li>
    </ul>
    </header>
    <section>
        <h1 class="title1">Page for acount </h1>
    </section>
    <?php
// define variables and set to empty values
$fname = $lname = $email = $password = $comment = $like = $submit = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input($_POST["fname"]);
  $lname = test_input($_POST["lname"]);
  $email = test_input($_POST["email"]);
  $like = test_input($_POST["like"]);
  $comment = test_input($_POST["comment"]);
  $Password = test_input($_POST["password"]);
  $submit = test_input($_POST["submit"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <div class="forall">
        <div class="formac"> 
     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
      
        FirstName:<input  type="text" name="fname">
         <br><br>
         ListName:<input type="text" name="lname">
         <br><br>
         Email:<input type="email" name="email">
         <br><br>
         Password :<input type="password" name="pass"><br><br>
         Did you like the idea of the website?:
         <br>
         <input type="radio" name="like" value="Yes">Yes<br>
         <input type="radio"  name="like" value="NO">No<br> 
         If you choose no tell us why.: 
         <br>
         <textarea name="comment" rows="5" cols="40"></textarea><br>
         <input type="submit" name="submit" value="sing in"><br>
     </form>
     <?php
echo "<h2>Your Input:</h2>";
echo $fname;
echo "<br>";
echo $lname;
echo "<br>";
echo $email;
echo "<br>";
echo $like;
echo "<br>";
echo $comment;
?>
    </div>
 </div>   
    </body></body>
</html>