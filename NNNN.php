<html lang="ar" dir="rtl"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
    <link rel="stylesheet" href="NewPage.css">
    <title>التراث العربي </title>

    </head>
<body>
  

     <header>
    <div class="logo">
        <h1 class="logo-text"><span>تُراثنا</span> العربي</h1>
    </div>
    <ul class="nav">
       <li> <a href="NewPage.html"> الصفحة الرئيسية</a></li>
          <li> <a href="City.html">تراث أبرز الدول  </a></li>
    </ul>
    </header>
    <br>
    <br>
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
    <video width="1485px" height="900" autoplay="" muted="" loop="" id="myVideo">
  <source src="B4.mp4" type="video/mp4">
</video>
    
    
</body></html>