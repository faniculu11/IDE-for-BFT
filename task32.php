<!DOCTYPE html>
<html>
<title>IDE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>




<?php  

include("includes/config.php") ;	


if(isset($_POST["back"]) )  
 {

 echo "<script>
window.location.replace('task32.php');
	  </script>
	  ";

 }
 
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
(21, 'BX', '20-30', 'No', 'Bryanston'),
(23, 'BZ', '20-30', 'No', 'Bryanston'),
(22, 'BY', '40-50', 'No', 'Bryanston'),
(10, 'MU', '30-40', 'No', 'Daytwon')";

 mysqli_query($conn,$in); 
 
   mysqli_query($conn,"DELETE FROM Gauteng_Deaths"); 
   
 $in2 = "INSERT INTO `Gauteng_Deaths` (`PatientID`, `BloodType`) VALUES
(1, 'AB'),
(4, 'O'),
(22, 'AB'),
(8, 'B')";

 mysqli_query($conn,$in2); 
 
  mysqli_query($conn,"DELETE FROM Gauteng_Treatments"); 
  
  $in3 = "INSERT INTO `Gauteng_Treatments` (`PatientID`, `BloodType`, `RecoveringStatus`) VALUES
(2, 'AB', 'Yes'),
(3, 'O', 'No'),
(5, 'B', 'No'),
(6, 'A', 'Yes'),
(7, 'O', 'No'),
(21, 'B', 'No'),
(21, 'B', 'No'),
(23, 'O', 'Yes'),
(10, 'O', 'Yes')";
 mysqli_query($conn,$in3); 
 
	 
	 
 }


		
		 
 
  
 ?>
 
 
<body>

 <div class= "w3-center">

<form method= post>
 <button class="w3-btn w3-brown" name= "reset">Populate database with data from task 1</button>
 <button class="w3-btn w3-brown" name= "back">Previous Question</button>


</form>
</div>
    <div class="w3-container  w3-half w3-padding">

<button class="w3-btn w3-left " onclick="myFunction()"><img class= "w3-center" width = "95%"  src="https://img.icons8.com/color/48/000000/light.png"/></button>
	<br><br><br>

	<h3 class= "w3-center">Task 3.2</h3>
	<?php 
	
	 if(isset($_POST["submit"]) )  
 {  

 
$keywords1 = 'INSERT';
    $keywords = 'Gauteng_Deaths ';
	$value1 = '22';
    $value2 = 'B';
	
	
	 

 if ( !preg_match("/{$keywords1}/i", $_POST['ab']) === true   ){
	
	
	 echo "<script>
 	
alert('Wrong sql query used for this question, use the INSERT query ');
    
	  </script>
	  ";
	
	
}

else if ( !preg_match("/{$value1}/i", $_POST['ab']) === true   ){
	
	 echo "<script>
 	
alert('Wrong value for PatientID, the correct PatientID value is 22 ');
    
	  </script>
	  ";
	
	
}


else if(!preg_match("/{$value2}/i", $_POST['ab']) === true ) {
 
 
 echo "<script>
 	
alert('Wrong value for BloodType, the correct BloodType value is B ');
    
	  </script>
	  ";

	
}else if(!preg_match("/{$keywords}/i", $_POST['ab']) === true ) {
 
 
 echo "<script>
 	
alert('Wrong table used');
    
	  </script>
	  ";

	
}



 else { 





	
	if (mysqli_query($conn,$_POST['ab']) === false) {
	

  $ab =  mysqli_error($conn);  
  
 
  
  
  $find   = 'Duplicate';
 
  $pos3 = stripos($ab, $find);

if ($pos3 === false ) {
	
	
	echo "<script>
 
 

	
alert('Invalid SQL Query');

    
	  </script>
	  ";
  
  $message = str_replace("; check the manual that corresponds to your MariaDB server version for the right syntax to use","",$ab);
   echo " <div class='w3-panel w3-red'>
    
  <p class= ' w3-padding'> Sql Error: $message</p>
  </div>
  
<button class='w3-btn w3-center w3-green w3-text-black ' onclick='myFunction1()'>Need help? Click here for the correct answer</button>
  
  
";


  
} else{
	
	
	echo "<script>
 
 

	
alert('Oops your aunt must have asked someone to insert that record already. Press okay to delete the record so you can practice inserting it yourself');

    
	  </script>
	  ";
	
	
	
	mysqli_query($conn,"DELETE FROM Gauteng_Deaths WHERE PatientID = 22");
} 

	
}else {
	
	 echo "<script>
	




if (confirm('Well done!!, Click okay to proceed, Press a button Okay to proceed! ')) {
  window.location.replace('task33.php');
  } else {
window.location.replace('task32.php');
  }

    
	  </script>
	  ";
	
}
 	 
 }
	
	
}	
	?>



     <p class= "w3-center">
	
	 Add the Bryanston patients with Blood Type B who have died to the Gauteng_Deaths table. 
<br>


</p>


        <br> 
		
		
        <form method="post" class="w3-container w3-center">
         <p><textarea  width= "100%" class="w3-input w3-sand " rows="4" cols="70" type="text" name="ab" placeholder= "Write your sql query" class="form-control" required></textarea></p>    
          
		  <span id="error_message" class="text-danger"></span>  
                      
		  
          <button class="w3-btn w3-brown" name= "submit">Submit query</button></p>
        </form>
      </div>

<div class="w3-container w3-half w3-padding" >

  <p class= "w3-center">Click any of the buttons below to see the table contents”</p>
 <br>

<form method="post" class="w3-container w3-center">
     <button class="w3-btn w3-brown" name= "patients">Gauteng_Patients</button>
<button class="w3-btn w3-brown" name= "deaths">Gauteng_Deaths</button>
<button class="w3-btn w3-brown" name= "treatment">Gauteng_Treatments</button>

      <br><br>
        
</form>
<?php  

 if(isset($_POST["patients"]) )  
	 
 {  $results = mysqli_query($conn, "SELECT * FROM Gauteng_Patients");
  ?>
  

<table   class="w3-table-all w3-centered w3-striped">
  <tr>
      <th>PatientID</th>
      <th>CodeName</th>
	   <th>AgeGroup</th>
	    <th>OtherDiseases</th>
		 <th>Suburb</th>
    
    </tr>
	<?php while ($row = mysqli_fetch_array($results)) { ?>
	<tr>
      <td><?php echo $row['PatientID']; ?></td>
	   <td><?php echo $row['CodeName']; ?></td>
	    <td><?php echo $row['AgeGroup']; ?></td>
		 <td><?php echo $row['OtherDiseases']; ?></td>
		  <td><?php echo $row['Suburb']; ?></td>
  
     
    </tr>
	
   <?php } ?>
 
    </table>
   <?php }  ?>
   
<?php  

 if(isset($_POST["deaths"]) )  
	 
 {  $results = mysqli_query($conn, "SELECT * FROM Gauteng_Deaths");
  ?>
  

<table   class="w3-table-all w3-centered w3-striped">
  <tr>
      <th>PatientID</th>
      <th>BloodType</th>
	   </tr>
	<?php while ($row = mysqli_fetch_array($results)) { ?>
	<tr>
      <td><?php echo $row['PatientID']; ?></td>
	   <td><?php echo $row['BloodType']; ?></td>
	    </tr>
	
   <?php } ?>
 
    </table>
   <?php }  ?>
 
 
<?php  

 if(isset($_POST["treatment"]) )  
	 
 {  $results = mysqli_query($conn, "SELECT * FROM Gauteng_Treatments");
  ?>
  

<table   class="w3-table-all w3-centered w3-striped">
  <tr>
      <th>PatientID</th>
      <th>BloodType</th>
	    <th>RecoveringStatus</th>
	   </tr>
	<?php while ($row = mysqli_fetch_array($results)) { ?>
	<tr>
      <td><?php echo $row['PatientID']; ?></td>
	   <td><?php echo $row['BloodType']; ?></td>
	    <td><?php echo $row['RecoveringStatus']; ?></td>
	    </tr>
	
   <?php } ?>
 
    </table>
   <?php }  ?>

  

</div>

<?php
mysqli_close($conn);
?>

</body>

<script>
function myFunction() {
  alert("Remember all letters or non-numerical values should have 'quotations' ('x') around them. Only a number by itself should be without 'quotations'. So an example: VALUES (22, 'VW', '20-40', 'YES', 'Sandton') ");
}

function myFunction1() {
  alert("INSERT INTO Gauteng_Deaths (PatientID,BloodType) VALUES (22,'AB')");
}
</script>
 
</html>