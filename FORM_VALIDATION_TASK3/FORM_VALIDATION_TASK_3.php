<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_POST['sname'];
		if($name == ""){ echo "name is required";}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Name Form</title>
</head>
<body>

	<form method="post">
		1.Name: <input type="text" name="sname" value="" placeholder=""><?php if(!isset($name)){echo "can't left empty";}?>
		<br> 
		<input type="submit" name="" value="Submit">
<hr>
       2.Email:<input type="email" id="email" name="email"> <br>
       <input type="submit" name="" value="Submit">

       <hr>

       <fieldset>
       <legend> 3. Gender</legend>
       	 <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
  <br>
   <input type="submit" name="" value="Submit">


       </fieldset>
       <hr>

       <fieldset>
       	<legend>4. Date of Birth</legend>
          <input type="date" id="birthday" name="birthday">
       	<br>
       	<hr> 
       	<input type="submit" name="" value="Submit">
       </fieldset>

       <fieldset>
       	<legend>5.Degree</legend>
       	 <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for=""> SSC</label><br>
  <input type="checkbox" id="" name="" value="">
  <label for=""> HSC </label><br>
  <input type="checkbox" id="" name="" value="">
  <label for=""> BSc</label><br><br>
  <input type="submit" value="Submit">
       </fieldset>

     <label for="bloodgroup:">6.Blood Group </label>
     <select>
     	  <option value="">A+</option>
      <option value="">O+</option>
      <option value="">B+</option>
      <option value="">OB+</option>
     </select>
     <hr>
     <input type="submit" value="Submit">

     <fieldset>
     	<legend>Profile Picture</legend>
     	User ID:<input type="ID" name="" value="">
     	Picture<input type="file" name="" value="file">
     	<hr>
     	<input type="submit" name="" value="Submit">

     </fieldset>

     <hr>

     	<table width="100%" border="1">

           
            <tr  height="50px" >
            	
            	<td colspan="3" > 
                   <center>
            		<h1> PERSON PROFILE</h1>
            	</center>
            	 </td>
            
            	
            </tr>

             <tr  height="50px">
            	<td width="200px">
            		<p> Name  </p> 
            	</td>
            	<td width="200px">
            		<input type="text" name="" value="" size="100px">
            	</td>
            	<td width="200px"></td>
            </tr>

             <tr  height="50px" >
            	<td width="200px">
            		<p> Email </p>
            	</td>
            	<td width="200px">
            		<input type="text" name="" value="" size="100px">
            		
            	</td>
            	<td width="200px"></td>
            </tr>
             <tr  height="50px">
            	<td width="200px">
            		<p> Gender </p>
                
            	 </td>
            	<td width="200px">
            		Male <input type="radio" name="gender">
            		Female <input type="radio" name="gender">
            		Other <input type="radio" name="gender">
            	</td>
            	<td width="200px" ></td>
            </tr>

             <tr  height="50px">
            	<td> 
               <p> Date_of_Birth</p>
            	</td>
            	<td width="200px">
            		<input type="date" name="">
            	</td>
            	<td width="200px"></td>
            </tr>

             <tr  height="50px">
            	<td>
            		<p> Blood_Group</p>
            	</td>
            	<td width="200px">
            		<select>
            			<option>A+</option>
            			<option>0+</option>
            			<option>B+</option>
            		</select>
            	</td>
            	<td width="200px"></td>
            </tr>

             <tr  height="50px">
            	<td> <p> Degree</p></td>
            	<td width="200px">
            		<input type="checkbox" name=""> SSC
            		<input type="checkbox" name=""> HSC
            		<input type="checkbox" name=""> BSc

            	</td>
            	<td></td>
            </tr>

             <tr  height="50px">
            	<td>
            		<p>Photo</p>
            	</td>
            	<td width="200px">
            		<input type="file" name="">
            		            	</td>
            	<td width="200px"></td>
            </tr>

             <tr  height="50px">
            	<td colspan="3" style="text-align: right">

            		<input type="submit" name="click">
            		<input type="reset" name="click">
            	</td>
            </tr>
</table>
</form>
</body>
</html>