<!DOCTYPE html>
<!--code by webdevtrick (webdevtrick.com) -->
<html>
 
<head>
	<meta charset="UTF-8" />
	
	<title>Quiz</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body>
 
	<div id="page-wrap">
 <body style="background-color: lightgreen;">
		<h1> <center>Score Result </center></h1>
		<center><h2>PART-A</h2></center>
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "C") { $totalCorrect++; }
            if ($answer3 == "D") { $totalCorrect++; }
            if ($answer4 == "A") { $totalCorrect++; }
            if ($answer5 == "A") { $totalCorrect++; }
            
            

           echo " <center><b><h2><font size='4'> <div id='results'> $totalCorrect / 5 correct</div></b></h2></center>";
           echo " <center>Congrats!!! Good Score</center>"
        ?>
     <center><h2>PART -B  (50 marks)</h2></center>   
        <h3><center>Join the below google meet link to attend the group discussion</center></h3>
<p><center><a href="https://meet.google.com/iig-vpgs-rrh" i class='fas fa-laptop-code' style='font-size:32px';></i></a></center></p>
	 <center><h2>PART -C (2*10=10) </h2></center>
     <h3><center> 1) Differentiate between RAM and ROM</center></h3>
     <h3> <center>2) Explain about Memory Management in OS</center></h3>
     <br>
     <br>
      <center><h2>PART - D (10*2=20) </h2></center>
     <h3><center>Attend the next section of questions through the google form given below</center></h3>
     
    <center><i class="fa fa-dot-circle-o" style="font-size:24px;"></i><a href=" https://docs.google.com/forms/d/1NYWoltcT3EjQCCs1Ojt-2cYzAFqVWta28U8-jVCX1rk/viewform?edit_requested=true  " style='font-size:24px'> </i>  <?php echo "Google form"?></a></center>
	</div>
 
</body>
 
</html>
 