<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Quest</title>
</head>
<body>
<form action="profile.php" method="post" enctype="multipart/form-data">
    <label for="imageUpload">Upload a profile image</label>
    <input type="file" name="avatar" id="imageUpload"/>
    <button name="send">Send</button>
</form>
</body>
</html>