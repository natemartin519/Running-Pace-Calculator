<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pace Convert</title>
</head>

<body>
    <form action="/miles" method="POST">
        <input type="hidden" name ="distance" value="1">
        Min/Km: <input type="text" name="time">
        <input type="submit" value="Convert to Min/Km">
    </form>

    <br>

    <form action="/kilometres" method="POST">
        <input type="hidden" name ="distance" value="1">
        Min/Mile: <input type="text" name="time">
        <input type="submit" value="Convert to Min/Mile">
    </form>
</body>
</html>