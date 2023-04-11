<?php

include('./config.php');
$id_user = $_SESSION['unique_id'];
$sql = mysqli_query($conn,"SELECT DISTINCT incoming_msg_id , outgoing_msg_id from messages where outgoing_msg_id = '$id_user';"); 
while ($row = mysqli_fetch_assoc($sql)) {
    $userfor = $row['incoming_msg_id'];
    $sqlaccont = mysqli_query($conn,"SELECT * FROM user WHERE unique_id = '$userfor'");
    
    while ($rowaccont = mysqli_fetch_assoc($sqlaccont)){

        $sql2 = "SELECT msg, outgoing_msg_id FROM messages
             WHERE (outgoing_msg_id = {$rowaccont['unique_id']} OR incoming_msg_id = {$rowaccont['unique_id']})
             AND (outgoing_msg_id = '$outgoing_id' OR incoming_msg_id = '$outgoing_id'['unique_id'])
             ORDER BY msg_id DESC LIMIT 1";
            $query2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_assoc($query2);
            if (mysqli_num_rows($query2) > 0) {
                $result = $row2['msg'];
            } else {
                $result = 'Sem mensagens';
            }
            $msg = strlen($result) > 28 ? substr($result, 0, 28) . '...' : $result;
            $you = isset($row2['outgoing_msg_id']) && $row2['outgoing_msg_id'] == $outgoing_id ? 'Você: ' : '';
            $offline = $rowaccont['status'] == 'Off-line agora' ? 'offline' : '';

        echo'<a href="chat.php?user_id=' . $rowaccont['unique_id'] . '">
                <div class="content">
                    <img src="php/images/' . $rowaccont['img'] . '" alt="">
                    <div class="details">
                        <span>' . $rowaccont['fname'] . ' ' . $rowaccont['lname'] . '</span>
                        <p>' . $you . $msg . '</p>
                    </div>
                </div>
                <div class="status-dot ' . $offline . '"><i class="fas fa-circle"></i></div>
            </a>';
    }
}
?>