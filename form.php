<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<body style="background-color:lightpink;">

<?php
$name = $email = $gender = $query = $year = $contact_no = $event = $department = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = input($_POST["name"]);
  $email = input($_POST["email"]);
  $department = input($_POST["department"]);
  $year = input($_POST["year"]);
  $contact_no = input($_POST["contact_no"]);
  $query = input($_POST["query"]);
  $gender = input($_POST["gender"]);
}

function input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2><center>PROGATE EVENT REGISTERATION</center></h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Department: <input type="text" name="department">
  <br><br>
  Year of study: <input type="number" name="year">
  <br><br>
  Contact Number: <input type="number" name="contact_no">
  <br><br>
  Event to be Registered: <input type="text" name="event">
  <br><br>
  Query: <textarea name="query" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>A copy of your submitted response:</h2>";
echo "<br>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $department;
echo "<br>";
echo $year;
echo "<br>";
echo $contact_no;
echo "<br>";
echo $query;
echo "<br>";
echo $gender;
echo "<br>";
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for registering event!! We will reach you soon You will receive mail to your registered mail id";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new Goodbye();
$goodbye->byebye();
?>


</body>
</html>
