<?php include_once "connection.php"; ?>
<?php 
    session_start();

    $qry = mysqli_query($con, "SELECT * FROM `mails` WHERE `id` = ". $_REQUEST['mail-id']);
    $mail = mysqli_fetch_array($qry);

    //   print_r($mail);

    // making readStatus true
    $q = mysqli_query($con, "UPDATE `mails` SET `readStatus` = 'read' WHERE `id` = ".$_REQUEST['mail-id']);
?>
<!DOCTYPE html>
<html long="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial_scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="c1.css">
  <title>Compose Mail</title>
</head>
<body>
<section>
    <a href = "javascript:history.back()">Back to previous page</a>
  <div class="regform"><h1>Subject: <?=$mail['subject']?></h1></div>
  <div class="compose">
      <div class="form-group">
        From: <?=$mail['senderId']?>
      </div>
      <div class="form-group">
        To: <?=$mail['receiverId']?>
      </div>

      <div class="form-group">
        <label for="message">Mail Content:</label>
        <textarea name="content" id="message" cols="50" rows="10"><?=$mail['content']?></textarea>
      </div>

      </div> 
  </div>
  <div id="status"></div>
</section>
<script src="java_compose.js"></script>
</body>
</html>