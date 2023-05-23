<!DOCTYPE html>
<html>
<head>
 <title>Number Table</title>
 <script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
</script>
 <script src="experiment20.js"></script>
</head>
<body>
 <h1>Number Table</h1>
 <form id="number-form">
 <label for="number-list">Enter a list of numbers, separated by 
commas:</label><br>
 <input type="text" id="number-list" name="number-list"><br>
 <input type="submit" value="Generate Table">
 </form>
 <div id="table-container"></div>
 <script>
$(document).ready(function() { 
 $("#number-form").submit(function(event) { 
event.preventDefault(); var numbers = 
$("#number-list").val(); 
 $.ajax({ url: 
"experiment20.php", method: 
"POST", data: { numbers: 
numbers }, success: 
function(result) { 
 $("#table-container").html(result); 
 } 
 }); 
 }); 
}); 
</script>
<?php if
(isset($_POST["numbers"])) { 
 $numbers = explode(",", $_POST["numbers"]); 
 $table = "<table>"; foreach
($numbers as $number) { 
 $table .= "<tr><td>" . $number . "</td><td>" . ($number * $number) . 
"</td></tr>"; 
 } 
 $table .= "</table>"; 
echo $table; 
} 
?>
</body>
</html>
