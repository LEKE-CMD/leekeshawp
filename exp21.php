$(document).ready(function() { 
 $("#get-data").click(function() { 
 $.ajax({ url: 
"https://jsonplaceholder.typicode.com/posts", 
method: "GET", dataType: "json", 
success: function(result) { var data = ""; 
 $.each(result, function(index, post) { 
data += "<h2>" + post.title + "</h2><p>" + post.body + 
"</p>"; 
 }); 
 $("#data-container").html(data); 
 } 
 }); 
 }); 
}); 
<!DOCTYPE html>
<html>
<head>
 <title>Web Service Example</title>
 <script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
</script>
 <script src="experiment21.js"></script>
</head>
<body>
    <script>$(document).ready(function() { 
 $("#get-data").click(function() { 
 $.ajax({ url: 
"https://jsonplaceholder.typicode.com/posts", 
method: "GET", dataType: "json", 
success: function(result) { var data = ""; 
 $.each(result, function(index, post) { 
data += "<h2>" + post.title + "</h2><p>" + post.body + 
"</p>"; 
 }); 
 $("#data-container").html(data); 
 } 
 }); 
 }); 
}); </script>

 <h1>Web Service Example</h1>
 <button id="get-data">Get Data</button>
 <div id="data-container"></div>
</body>
</html>