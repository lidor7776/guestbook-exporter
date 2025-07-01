<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $message = htmlspecialchars(trim($_POST['message']));
    $date = date("d-m-Y H:i");

    if (!empty($name) && !empty($message)) {
        $entry = "$date | $name: $message" . PHP_EOL;
        file_put_contents("messages.txt", $entry, FILE_APPEND);
    }
}

header("Location: messages.php");
exit;
?>
