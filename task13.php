<!DOCTYPE html>
<html>
<title>IDE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>




<?php  

include("includes/config.php") ;	


if(isset($_POST["next"]) )  
 {

 echo "<script>
window.location.replace('task14.php');
	  </script>
	  ";

 }


if(isset($_POST["back"]) )  
 {

 echo "<script>
window.location.replace('task12.php');
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
 
	 
	 
 }

		
		 
 
  
 ?>
 
 
<body>

 <div class= "w3-center">

<form method= post>
 <button class="w3-btn w3-brown" name= "reset">Click RESET if you made a mistake</button>
 <button class="w3-btn w3-brown" name= "back">Previous Question</button>


</form>
</div>
    <div class="w3-container  w3-half w3-padding">


<button class="w3-btn w3-left " onclick="myFunction()"><img class= "w3-center" width = "95%"  src="https://img.icons8.com/color/48/000000/light.png"/></button>
	<br><br><br>

	<h3 class= "w3-center">Task 1.1 c</h3>
	<?php 
	
	 if(isset($_POST["submit"]) )  
 {  

 
    $keywords1 = 'INSERT';
    $keywords = '_Patients';
    $value1 = '23';
    $value2 = 'BZ';
	$value3 = '20-30';
	$value4 = 'No';
    $value5 = 'Bryanston';
	
	 

 if ( !preg_match("/{$keywords1}/i", $_POST['ab']) === true   ){
	
	
	 echo "<script>
 	
alert('Wrong sql query used for this question, use the INSERT query ');
    
	  </script>
	  ";
	
	
}

else if ( !preg_match("/{$value1}/i", $_POST['ab']) === true   ){
	
	 echo "<script>
 	
alert('Wrong value for PatientID, the correct PatientID value is 23 ');
    
	  </script>
	  ";
	
	
}


else if(!preg_match("/{$value2}/i", $_POST['ab']) === true ) {
 
 
 echo "<script>
 	
alert('Wrong value for CodeName, the correct CodeName value is BZ ');
    
	  </script>
	  ";

	
}

else if(!preg_match("/{$value3}/i", $_POST['ab']) === true ) {
 
 
 echo "<script>
 	
alert('Wrong value for AgeGroup, the correct AgeGroup value is 20-30');
    
	  </script>
	  ";

	
}


else if (preg_match("/{$value4}/i", $_POST['ab']) === true ){
	
	 echo "<script>
 	
alert('Wrong value for OtherDiseases, the correct OtherDiseases value is 20-30  ');
    
	  </script>
	  ";
	
	
}else if (preg_match("/{$value5}/i", $_POST['ab']) === true  ){
	
	
		 echo "<script>
 	
alert('Wrong value for Suburb. the correct Suburb  value is Bryanston ');
    
	  </script>
	  ";
	
} else { 





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
	
	
	
	  mysqli_query($conn,"DELETE FROM Gauteng_Patients WHERE PatientID = 23"); 
} 

	
}else {
	
	 echo "<script>
	



if (confirm('Well done!!, Click okay to proceed or click Cancel to see your database results')) {
  window.location.replace('task14.php');
  } else {

  }

    
	  </script>
	  ";
	
?>
	
	
	
	
	



<button  class='w3-btn w3-center w3-green w3-text-black ' id='myBtn'>Show results</button>


<div id='myModal' class='modal'>


  <div class='modal-content'>
    <span class="close">&times;</span>

<?php  	
 $results = mysqli_query($conn, "SELECT * FROM Gauteng_Patients");
 
  ?>

<form method= post>
 <button class='w3-btn w3-center w3-green w3-text-black ' name= "next" >Next question</button>
 
 </form>
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
	
	
  </div>

</div>	



	
<?php } ?>
 
<?php } 
 }
	
	
	
	?>


     <p class= "w3-center">
	
 Now add PatientID 23, using the insert SQL code. 
 <br>


</p>


        <br> 
		
		
        <form method="post" class="w3-container w3-center">
         <p><textarea  width= "100%" class="w3-input w3-sand " rows="4" cols="70" type="text" name="ab" placeholder= "Write your sql query" class="form-control" required></textarea></p>    
          
		 
                      
		  
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
  alert("INSERT INTO Gauteng_Patients (PatientID,CodeName,AgeGroup,OtherDiseases,Suburb) VALUES (23,'BZ','20-30','No','Bryanston')");
}
</script>

<style>

.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
 
</html>
