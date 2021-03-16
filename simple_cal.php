<!DOCTYPE html>
<htm>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Simple Calculator using HTML5,CSS3,PHP & JavaScript</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap.css" rel="stylesheet">
<!--custom css styling--->
<style>
.container{
width: 400px;
padding: 4% 4% 4%;
margin : auto;
background-color: #fff;
text-align: center;
position:relative;
top:50px;
vertical-align: middle;
}

p{
	font-family: sans-serif;
	font-weight: bold;
	font-size:  20px;
}

button{
	width :150px;
	margin :5px;
	padding:2px;
	font-weight: bold;
	text-align: center;
	color: white;
	font-family: verdana;
	text-decoration: none;
}
button:hover {
  background: green;
}

body{
	background-color:silver;
}
table{
   background-color: #430086; 
   border: 1;
  
}
tr{
    align-items:center;
    }
h3{
    color: #fff;
	text-decoration:solid ;

    }
</style>
</head>

<!---main body--->
<body>
<div class="container">
<form class="form-group" name=form1>
<table class="table table-sm table-dark table-bordered">
<td colspan=5>
<input type='text' class="form-control" name='fourth2' value='0'>
</td>
<tr>
<td colspan=4>
<h3>Simple Calculator</h3>
<td>
<input type='button' class="btn btn-danger" name='C' value='  C  ' onclick="fifteenth3(11,'C')">
</td>
</tr>
<tr>
<td>
<input type='button' class="btn btn-primary" name='7' value='  7  '   onclick="fifteenth3(7 ,'')">
</td>
<td>
<input type='button' class="btn btn-primary" name='8' value='  8  '   onclick="fifteenth3(8 ,'')">
</td>
<td>
<input type='button' class="btn btn-primary" name='9' value='  9  '   onclick="fifteenth3(9 ,'')">
</td>
<td>
<input type='button' name='/' value='÷'   onclick="fifteenth3(11,'/')">
</td>
<td>
<input type='button' class="btn btn-info" name='sqrt' value='√' onclick="fifteenth3(11,'sqrt')">
</td>
</tr>
<tr>
<td>
<input type='button' class="btn btn-primary" name='4' value='  4  ' onclick="fifteenth3(4,'')">
</td>
<td>
<input type="button" class="btn btn-primary" name="5" value="  5  " onclick="fifteenth3(5,'')">
</td>
<td><input type="button"  class="btn btn-primary" name="6" value="  6  " onclick="fifteenth3(6,'')">
</td>
<td>
<input type="button" name="*" value="×"  onclick="fifteenth3(11,'*')">
</td>
<td>
<input type="button" class="btn btn-warning" name="exp" value="e" onclick="fifteenth3(11,'exp')">
</td>
</tr>
<tr>
<td>
<input type="button" class="btn btn-primary" name="1" value="  1  "  onclick="fifteenth3(1,'')">
</td>
<td>
<input type="button" class="btn btn-primary" name="2" value="  2  "  onclick="fifteenth3(2,'')">
</td>
<td>
<input type="button" class="btn btn-primary" name="3" value="  3  "  onclick="fifteenth3(3,'')">
</td>
<td>
<input type="button" name="-" value="  -  "  onclick="fifteenth3(11,'-')">
</td>
<td>
<input type="button" class="btn btn-default" name="1/x" value="1/x " onclick="fifteenth3(11,'1/x')">
</td>
</tr>
<tr>
<td>
<input type="button"  class="btn btn-primary" name="0" value="  0  "   onclick="fifteenth3(0,'')">
</td>
<td>
<input type="button" name="+/-" value=" +/- " onclick="fifteenth3(11,'+/-')">
</td>
<td>
<input type="button" name="." value="  ,  "   onclick="fifteenth3(11,'.')">
</td>
<td>
<input type="button" name="+" value="  +  "   onclick="fifteenth3(11,'+')">
</td>
<td>
<input type="button" class="btn btn-success" name="=" value="  =  "   onclick="fifteenth3(11,'=')">
</td>
</tr>
</table>
</td>
</tr>
</table>
</form>



<script src="calc.js"></script>
<script src="script.js"></script>

</body>
</html>
<?php
include"footer.php";
?>