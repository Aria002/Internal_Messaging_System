<?php include_once "connection.php"; ?>
<!DOCTYPE html>
<html>  
<head>  
<title>Update Password</title>
<link rel="stylesheet" href="s4.css"> 
</head>  
<body>  
<center>  
<script type="text/javascript">  
function matchpass(){  
var firstpassword=document.f1.password.value;  
var secondpassword=document.f1.password2.value;  
  
if(firstpassword==secondpassword){  
return true;  
}  
else{  
alert("password must be same!");  
return false;  
}  
}  
</script>  
  
<form action="update_a.php" onsubmit="return matchpass()">  
Password:<input type="password" name="password" /><br/>  
Re-enter Password:<input type="password" name="password2"/><br/>  
<input type="submit">  
</form>  
</center>  
</body>  
</html>  
