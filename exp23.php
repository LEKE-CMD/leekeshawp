<!DOCTYPE html>
<html >
<head>
<title>Registration Form</title>
<style> input,textarea{width:200px}
input[type=radio],input[type=checkbox]{width:10px} input[type=submit],input[type=reset]{width:100px}
</style>
</head>

<body>
    <h1>Student Registration Form </h1>
<form method="post" enctype="multipart/form-data">
<table width="393" border="1">
<tr>
<td colspan="2"><?php echo @$msg; ?></td>
</tr>
<tr>
<td width="159">Enter your Name</td>
<td width="218">
<input type="text" placeholder="your first name" name="n" pattern="[a-z A- Z]*" required /></td>
</tr>
<tr>
<td>Enter your Email</td>
<td><input type="email" name="e"/></td>
</tr>
<tr>
<td>Enter your Password</td>
<td><input type="password" name="p"/></td>
</tr>
<tr>

<td>Enter your Address</td>
<td><textarea name="add"></textarea></td>
</tr>
<tr>
<td>Enter your Mobile</td>
<td><input type="text" pattern="[0-9]*" name="m" /></td>
</tr>
<tr>
<td height="23">Select your Gender</td>
<td>

Male<input  type="radio" name="g" value="m"/> Female<input type="radio" name="g" value="f"/>
</td>
</tr>
<tr>
<td>Choose your Hobbies</td>
<td>
Cricket<input type="checkbox" value="cricket" name="hobb[]"/>
Singing<input type="checkbox" value="singing" name="hobb[]"/>
Dancing<input type="checkbox" value="dancing" name="hobb[]"/> 
</td>       
</tr>       
<tr>        
<td>Choose your Profile Pic </td>   

</td>       
</tr>       
<tr>        
<td>Choose your Profile Pic </td>   
<td><input type="file" name="pic"/></td>
</tr>
<tr>
<td>Select your DOB</td>
<td>
<select name="mm">
<option value="">Month</option>
<?php for($i=1;$i<=12;$i++)

{
echo "<option value='$i'>".$i."</option>";
}
?>
</select>
<select name="dd">
<option value="">Date</option>
<?php for($i=1;$i<=31;$i++)
{
echo "<option value='$i'>".$i."</option>";
}
?>
</select>
<select name="yy">
<option value="">Year</option>
<?php for($i=1900;$i<=2015;$i++)
{
echo "<option value='$i'>".$i."</option>";
}
?>
