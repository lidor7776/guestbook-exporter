<!DOCTYPE html>
<html lang="he">
<head>
  <meta charset="UTF-8">
  <title> Visitor's Messages </title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>📜  Guestbook</h1>

  <ul>
    <?php
    if (file_exists("messages.txt")) {
        $lines = file("messages.txt", FILE_IGNORE_NEW_LINES);
        foreach ($lines as $line) {
            echo "<li>" . htmlspecialchars($line) . "</li>";
        }
    } else {
        echo "<li>No messages yet..</li>";
    }
    ?>
  </ul>

  <p><a href="index.php">🔙  Back to form</a></p>
  <p><a href="export.php">📥  Export to Excel (CSV)</a></p>

</body>
</html>
