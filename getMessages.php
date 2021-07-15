<?php include_once "connection.php"; ?>
<?php

    $senderId = $_REQUEST['senderId'];
    $receiverId = $_REQUEST['receiverId'];

    // getting sender and receiver data
    $sender = mysqli_query($con, "SELECT * FROM `ims` WHERE `id` = ".$senderId);
    $sender = mysqli_fetch_array($sender);

    $receiver = mysqli_query($con, "SELECT * FROM `ims` WHERE `id` = ".$receiverId);
    $receiver = mysqli_fetch_array($receiver);

    // print_r($sender);
    // print_r($receiver);die();
    // getting messages
    $qry = "
        SELECT *
        FROM (SELECT 
                * 
            FROM 
                `messages` 
            WHERE 
            `senderId` = ".$senderId." AND 
            `receiverId` = ".$receiverId." UNION 
            SELECT 
                * 
            FROM 
                `messages` 
            WHERE 
            `senderId` = ".$receiverId." AND 
            `receiverId` = ".$senderId.") a
        ORDER BY `id` ASC"
        ;

    $q1 = mysqli_query($con, $qry);

    $messages = [];
    while($msg = mysqli_fetch_array($q1)) {
        $messages[] = array(
            'id' => $msg['id'],
            'senderId' => $msg['senderId'],
            'receiverId' => $msg['receiverId'],
            'text' => $msg['text'],
            'createdAt' => $msg['createdAt'],
            'readStatus' => $msg['readStatus']
        );
    }

    echo json_encode(array("status"=> "success", "messages" => $messages, "sender" => $sender, "receiver" => $receiver));

?>