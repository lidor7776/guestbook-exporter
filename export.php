<?php


$filename = "guestbook.csv";

if (file_exists("messages.txt")) {
    $lines = file("messages.txt", FILE_IGNORE_NEW_LINES);

   
    $fp = fopen($filename, 'w');
    fwrite($fp, "\xEF\xBB\xBF"); 

   
    fputcsv($fp, ['Date', 'Name', 'Message'], ",", '"', "\\");

    foreach ($lines as $line) {
        if (preg_match("/^(.*?) \| (.*?): (.*)$/", $line, $matches)) {
            $date = $matches[1];
            $name = $matches[2];
            $message = $matches[3];
            fputcsv($fp, [$date, $name, $message], ",", '"', "\\");
        }
    }

    fclose($fp);

    header("Content-Type: application/vnd.ms-excel; charset=UTF-8");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    readfile($filename);
    exit;
} else {
    echo "No messages to export.";
}
?>
