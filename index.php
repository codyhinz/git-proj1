<?php
    $firstname = filter_input(INPUT_GET, 'firstname', FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_GET, 'lastname', FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_INT);
?>
<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>First PHP Project</title>
    </head>
    <body>
        <header>
            <?php echo date("d/m/Y") ?>
        </header>
        <main>
            <?php if (empty($firstname) || empty($lastname) || empty($age)){
                echo "You did not submit any of the required data listed above.";
            } else {
                echo "<h1>Hello, my name is " . $firstname . " " . $lastname .".</h1>";
                echo "I am " . $age . " years old, ";
                if ($age > 17) {
                    echo "and I am old enough to vote in the United States.";
                } else {
                    echo "and I am not old enough to vote in the United States.";
                }
                echo "<br>That means I am at least " . $age*365 . " days old.";
            }
            ?>
        </main>
    </body>