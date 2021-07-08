<?php include_once "connection.php"; ?>
<?php
    session_start();
    // $q1 = mysqli_query($con, "SELECT * FROM `contacts` WHERE `ownUserId` = ".$_SESSION['id']);
    // while($contact = mysqli_fetch_array($q1)) {
    // echo '<tr>';
    //     echo '<td><a href="chatbox.php?receverId='.$contact['userId'].'&&phoneNumber='.$contact['phoneNumber'].'">'.$contact['phoneNumber'].'</a></td>';
    // echo '</tr>';
    // }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ChatiFy ChatBox</title>
	<link rel="stylesheet" href="chatbox_style.css">
</head>
<body>
	<section class="msger">
    <header class="msger-header">
        <div class="msger-header-title">
        <i class="fas fa-comment-alt"></i> ChatiFy
        </div>
        <div class="msger-header-options">
        <span><i class="fas fa-cog"></i></span>
        </div>
    </header>

    <main class="msger-chat">
        <div class="msg left-msg">
        <div
        class="msg-img"
        style="background-image: url(https://image.flaticon.com/icons/svg/327/327779.svg)"
        ></div>

        <div class="msg-bubble">
            <div class="msg-info">
            <div class="msg-info-name">User 1</div>
            <div class="msg-info-time">12:45</div>
            </div>

            <div class="msg-text">
            Go ahead and send me a message. 😄
            </div>
        </div>
        </div>

    </main>

    <form class="msger-inputarea" onSubmit='return false;'>
        <div class="file-upload">
            <input type="hidden" id="receverId" value="<?=$_REQUEST['receverId']?>">
            <input type="hidden" id="phoneNumber" value="<?=$_REQUEST['phoneNumber']?>">
            <input type="hidden" id="userId" value="<?=$_SESSION["id"]?>">
        <!-- <input class="file-upload__input" type="file" name="myFile[]" id="myFile" multiple style="width: 250px;">
        <button class="file-upload__button" type="button">Attach File(s)</button> -->
        <span class="file-upload__label"></span>
        </div>
        <input type="text" id="text-box" class="msger-input" placeholder="Enter your message...">
        <button type="button" class="msger-send-btn" id="sendBtn">Send</button>
    </form>
    </section>
    <script src="java_compose.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            // alert('hi')
        });

        $('#sendBtn').click(function() {
            // alert('send')
            var text = $('#text-box').val();
            var senderId = $('#userId').val();
            var receiverId = $('#receverId').val();

            var data = {
                senderId: senderId,
                receiverId: receiverId,
                text: text
            }
            console.log(data);

            $.ajax({
                url: "composeText.php",
                cache: false,
                data: data,
                success: function(result){
                    // $("#results").append(html);
                    // console.log(result);
                    var newText = '<div class="msg right-msg"><div class="msg-img" style="background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)"></div><div class="msg-bubble"><div class="msg-info"><div class="msg-info-name">User 2</div><div class="msg-info-time">12:46</div></div><div class="msg-text">' + text + '</div></div></div>';
                    $('.msger-chat').append(newText);
                    $('#text-box').val('');
                }
            });
        })
    </script>
</body>
</html>