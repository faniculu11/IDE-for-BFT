<html>
<title>IDE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<?php  


if(isset($_POST["back"]) )  
 {
	  echo "<script>
	

window.location.replace('task17.php');

    
	  </script>
	  ";
 }
 ?>
 
 
 <?php  

include("includes/config.php") ;	

 
 if(isset($_POST["reset"]) )  
 {
	 
	  mysqli_query($conn,"DELETE FROM Gauteng_Patients"); 
	 
	 $in="INSERT INTO `Gauteng_Patients` (`PatientID`, `CodeName`, `AgeGroup`, `OtherDiseases`, `Suburb`) VALUES
(1, 'AX', '20-30', 'NO', 'Daveyton'),
(2, 'B', '50-60', 'NO', 'Germiston'),
(3, 'AC', '10-20', 'Yes', 'Edenvale'),
(4, 'A', '70-80', 'No', 'Katlehong'),
(5, 'CT', '20-30', 'No', 'Rayton'),
(6, 'YX', '50-60', 'No', 'Westonaria'),
(7, 'WE', '40-50', 'No', 'Khutsong'),
(8, 'TU', '20-30', '	No', 'Khutsong'),
(9, 'QA', '60-70', 'No', 'Daytwon'),
(10, 'MU', '30-40', 'No', 'Daytwon')";

 mysqli_query($conn,$in); 
 
   mysqli_query($conn,"DELETE FROM Gauteng_Deaths"); 
   
 $in2 = "INSERT INTO `Gauteng_Deaths` (`PatientID`, `BloodType`) VALUES
(1, 'AB'),
(4, 'O'),
(8, 'B')";

 mysqli_query($conn,$in2); 
 
  mysqli_query($conn,"DELETE FROM Gauteng_Treatments"); 
  
  $in3 = "INSERT INTO `Gauteng_Treatments` (`PatientID`, `BloodType`, `RecoveringStatus`) VALUES
(2, 'AB', 'Yes'),
(3, 'O', 'No'),
(5, 'B', 'No'),
(6, 'A', 'Yes'),
(7, 'O', 'No'),
(9, 'AB', 'Yes'),
(10, 'O', 'Yes')";
 mysqli_query($conn,$in3); 
 
 
 echo "<script>
	

window.location.replace('http://techroads2.000webhostapp.com/#/page/5f899d73cba8503d84d7c0e8');

    
	  </script>
	  ";
 
	 
	 
 }
 ?>
 
 
<div class="w3-container w3-center w3-padding">

    <br><br>
	
	<div class="w3-panel w3-blue">

<img src="https://img.icons8.com/color/48/000000/filled-star.png"/>
  <p class= "w3-center"> <p>Well done , your aunt appreciates your help with Task 1. Now let’s move onto the next section to see what else she needs you to do</p></p>

</div>
  
    
  

   <div class= "w3-center">
 
 <form method="post" class="w3-container w3-center">
 
<button class="w3-btn w3-brown" name= "back">Previous Question</button>

<button class="w3-btn w3-brown" name= "reset">Go back to the course</button>
<br><br>

<img class = "w3-center"src = "original (1).gif">
</form>
</div>
</div>