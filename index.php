<!-- Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <form action="paragraph.php" method="GET">
        <label for="userdata">User data</label>
        <input type="text" id="userdata" name="userdata">
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>

    </form>
</body>
</html>