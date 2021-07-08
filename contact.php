<?php include_once "connection.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Save Contacts</title>
  <link rel="stylesheet" href="s4.css">
</head>
<body>
  <form action="chat_acc.php">
    Phone:<input type="text" name="Phone" placeholder="phone number"><br><br>
    <button type="submit">ADD Contact</button>

    <div>
      <h3>Contact List</h3>
      <table border="1px solid red">
        <tr>
          <td>Contacts</td>
        </tr>
        <?php
          session_start();
          $q1 = mysqli_query($con, "SELECT * FROM `contacts` WHERE `ownUserId` = ".$_SESSION['id']);
          while($contact = mysqli_fetch_array($q1)) {
            echo '<tr>';
              echo '<td><a href="chatbox.php?receverId='.$contact['userId'].'&&phoneNumber='.$contact['phoneNumber'].'">'.$contact['phoneNumber'].'</a></td>';
            echo '</tr>';
          }
        ?>
      </table>
    </div>
  </form>

</body>
</html>
