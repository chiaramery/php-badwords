<!-- Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare -->

<?php 
$user_data = $_GET["userdata"];
$user_data_length = strlen($user_data);
$censored_paragraph = str_replace("ottimo", "***", $user_data);
$censored_paragraph_length = strlen($censored_paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request</title>
</head>
<body>
    <!-- Print first user paragraph -->
    <h3>User paragraph: " <?php echo $user_data; "<br>" ?> "</h3>

    <!-- Print user paragraph lenght -->
    <h3>User paragraph length : <?php echo $user_data_length; ?> </h3>

    <!-- Censored paragraph -->
    <h3>Censored paragraph: " <?php echo $censored_paragraph; ?> " </h3>

    <!-- Censored paragraph length -->
    <h3>Censored paragraph length : <?php echo $censored_paragraph_length; ?> </h3>


    <a href="index.php">Back to home</a>
</body>
</html>