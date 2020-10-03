<!DOCTYPE html>
<html>
<head>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

  <style>
div.c {
  font-size: 150%;
  background-color: lightpink;
}
div.a
{
  background-color: lightgrey;
}


</style>
</head>


<body>
  <div class="a">

<h1><center>WELCOME TO PROGATE E-LEARNING!!!</center></h1>
<center><h1>COURSE DETAILS</h1></center>
<h2><center> PROGATE HAS INTRODUCED A NEW COURSE "DATA SCIENCE"</h2></center></div>
<h3><center>Join the google classroom </center></h3>
<p><center><a href="https://classroom.google.com/c/MTc1MTgyOTU0NjA3?cjc=yvrq7no" i class='fas fa-laptop-code' style='font-size:32px';></i></a></center></p>
<p><center><h3>Learn Algorithms and Data Structure</h3><a href="courselinks.php" i class='  fas fa-user-graduate' style='font-size:32px';></i></a></center></p>
<p><center><h3>Learn Specialized Course</h3><a href="courselinks2.php" i class=' fas fa-award' style='font-size:32px';></i></a></center></p>
<div class="c">
<?php echo "<br>";

$toc = new Subdivision("THEORY OF COMPUTATION", "Dr.Leena Shri - Lecturer","https://meet.google.com/iig-vpgs-rrh");
$ds = new Subdivision("DATA STRUCTURES AND ALGORITHM", "MRS.PAVITHRA - Assistant Lecturer","https://meet.google.com/ght-omn-fjk");
$dbms = new Subdivision("DATABASE MANAGEMENT SYSTEM", "Dr.Vaishnavi - Assistant Lecturer","https://meet.google.com/acqn-igp-pok");
$os = new Subdivision("OPERATING SYSTEM", "Dr.Sita - Professor","https://meet.google.com/ath-klo-pog");
$storage = new Subdivision("STORGAE INFRASTRUCTURE MANAGEMENT SYSTEM", "Dr.Saravanan - Principle","https://meet.google.com/ghp-lok-tyu");
echo $toc->get_name();
echo "<br>";
echo "<br>";
echo "STAFF        :  ";
echo "<br>";
echo $toc->get_teacher();
echo "<br>";
echo "G-MEET LINK  :  ";
echo "<br>";
echo $toc->get_link();
echo "<br>";
echo "DESCRIPTION  : ";
echo "<br>";
echo "    The theory of computation can be considered the creation of models of all kinds in the field of computer science. Therefore, mathematics and logic are used. In the last century it became an independent academic discipline and was separated from mathematics.";
echo "<br>";
echo "<br>";
echo "<br>";
echo $ds->get_name();
echo "<br>";
echo "<br>";
echo "STAFF        :  ";
echo "<br>";
echo $ds->get_teacher();
echo "<br";
echo "G-MEET LINK  :  ";
echo $ds->get_link();
echo "<br>";
echo "<br>";
echo "DESCRIPTION  : ";
echo "<br>";
echo "     Data Structure is a way of collecting and organising data in such a way that we can perform operations on these data in an effective way. Data Structures is about rendering data elements in terms of some relationship, for better organization and storage";
echo "<br>";
echo "<br>";echo "<br>";
echo $dbms->get_name();
echo "<br>";
echo "<br>";
echo "STAFF        :  ";
echo "<br>";
echo $dbms->get_teacher();
echo "<br>";
echo "G-MEET LINK  :  ";
echo "<br>";
echo $dbms->get_link();
echo "<br>";
echo "DESCRIPTION  : ";
echo "<br>";
echo  "     The database is a collection of inter-related data which is used to retrieve, insert and delete the data efficiently. It is also used to organize the data in the form of a table, schema, views, and reports, etc.";
echo "<br>";
echo "<br>";
echo $os->get_name();
echo "<br>";
echo "<br>";
echo "STAFF        :  ";
echo "<br>";
echo $os->get_teacher();
echo "<br>";
echo "<br";
echo $os->get_link();
echo "<br>";
echo "<br";
echo "<br>";
echo "DESCRIPTION  : ";
echo "<br>";
echo "An operating system (OS) is system software that manages computer hardware, software resources, and provides common services for computer programs.

Time-sharing operating systems schedule tasks for efficient use of the system and may also include accounting software for cost allocation of processor time, mass storage, printing, and other resources.

For hardware functions such as input and output and memory allocation, the operating system acts as an intermediary between programs and the computer hardware,[1][2] although the application code is usually executed directly by the hardware and frequently makes system calls to an OS function or is interrupted by it. Operating systems are found on many devices that contain a computer – from cellular phones and video game consoles to web servers and supercomputers";
echo "<br>";
echo "<br>";echo "<br>";

echo $storage->get_name();
echo "<br>";
echo "STAFF        :  ";
echo $storage->get_teacher();
echo "<br";
echo $storage->get_link();
echo "<br>";
echo "<br>";
echo "<br>";

?>

<?php
class Subdivision {
  public $name;
  public $teacher;
  public $link;
 
  function __construct($name, $teacher,$link) {
    $this->name = $name;
    $this->teacher = $teacher;
     $this->link = $link;
  
       
  }
  function get_name() {
    return $this->name;
  }
  function get_teacher() {
    return $this->teacher;
  }
  function get_link(){
    return $this->link;
  }

}
?>
</div>
</div>
</body>
</html>
