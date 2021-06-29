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
  <div class="regform"><h1>New Mail</h1></div>
  <div class="compose">
    <form action="mail_acc.php" method="POST" id="new_message">
      <div class="form-group">
        <label for="email"> To: </label>
        <input type="email" id="email" name="receiverId">
      </div>

      <div class="form-group">
        <label for="subject">Subject: </label>
        <input type="text" id="subject" name="subject">
      </div>

      <div class="form-group">
        <label for="message">Mail Content:</label>
        <textarea name="content" id="message" cols="50" rows="10"></textarea>
      </div>

       <div class="file-upload">
      <input class="file-upload__input" type="file" name="myFile[]" id="myFile" multiple>
      <button class="file-upload__button" type="button">Attach File(s)</button>
      <span class="file-upload__label"></span>
      </div> 

      <button type="submit">Send</button>
    </form>
  </div>
  <div id="status"></div>
</section>
<script src="java_compose.js"></script>
</body>
</html>