<?php include_once "connection.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible"content="ie=edge">
  <title>Mail Inbox</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  background-color: #a2defc;
  opacity: 0.9;
}

img {
  opacity: 0.7;
}

img:hover {
  opacity: 1.0;
}

input[type=text] {
  width: 500px;
  box-sizing: border-box;
  border: 2px solid #3658FB;
  border-radius: 10px;
  font-size: 16px;
  background-color: #ECF5FD;
  background-image: url('loupe.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 100%;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  background-color: #F6F6FA;
}

td, th {

  text-align: left;
  padding: 8px;
  color: black;
  font-style: bold;
}

tr{
     border: 1px solid #dddddd;
}

tr:hover{
  background-color: #DDDDDF
}


a.label {
  color: white;
  padding: 8px;
  font-family: calibri;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #023E57;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
  color: white;
}


li a:hover:not(.active) {
  background-color: #008DFE ;
  color: white;
}

li a.active {
  background-color: #008DFE;
  color: white;
}


</style>
</head>
<body>

<ul>
  <li><a href="compose_mail.php">+ Compose Mail</a></li>
  <li><a class="#active" href="mail.php">Inbox</a></li>
  <li><a href="sent_box.php">Sent</a></li>
  <li><a href="trash.php">Trash Box</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <table>
    <tr>
      <td width="500"><input type="text" name="search" placeholder="Search here"></td>
      <td><button style="background-color: black; color: whitesmoke; padding: 10px; border-radius: 5px;"><i class="fa fa-search"></i></button></td>
      <td width="200px"></td>
      <td><img src="profile.png"></td>
    </tr>
  </table>
    <table>
  <tr>
    <!-- <td width="40"><input type="checkbox" name=""></td> -->
    <td width="30"><img src="refresh.png"></td>
    <!-- <td width="30"><img src="trash.png"></td> -->
    <td width="680"><img src="inbox.png"></td>
    <td width="">< 10 of 5000 ></td>
  </tr>
  </table>
  <br>
  <table>
  <!-- <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>  
  </tr> -->
<?php 


  $qry = mysqli_query($con, "SELECT * FROM `mails` WHERE `deleteStatusSender` != 'true'");

  while($row = mysqli_fetch_array($qry)) {
    // print_r($row);
    // echo $row['name'];
    // echo "<br>";

    echo "<tr>";
      // echo '<td><input type="checkbox"</td>';
      // echo "<td>".$row['id']."</td>";
      echo "<td>".$row['senderId']."</td>";
      echo "<td>".$row['receiverId']."</td>";
      echo "<td>".$row['subject']."</td>";
      echo "<td>".$row['content']."</td>";
      echo "<td width='30'><a href='delete_sent.php?id=".$row['id']."'><img src='trash.png'></a></td>";
    echo "</tr>";
  }
?>

  </table>
</div>

</body>
</html>
