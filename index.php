<!DOCTYPE html>
<html lang="he">
<head>
  <meta charset="UTF-8">
  <title> Guestbook </title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <h1>Welcome to the our Guestbook </h1>

  <form action="submit.php" method="POST">
    <label>Name:</label><br>
    <input type="text" name="name" required placeholder="Write here"><br><br>

    <label>Message:</label><br>
    <textarea name="message" rows="5" cols="30" required></textarea><br><br>

    <button type="submit">Send</button>
  </form>

  <p><a href="messages.php">📜 Show all messages</a></p>
</body>
</html>
