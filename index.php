<?php

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>My Lifts</title>
        <meta name="description" content="A website to track my max lifts in powerlifting">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>Powerlifting records!</h1>
        </header>
            <table>
                <tr><th>Lift</th><td>Weight</td><td>Reps</td><td>1 Rep Max</td></tr>
                <tr><th>Bench Press</th><td></td><td></td><td></td></tr>
                <tr><th>Squat</th><td></td><td></td><td></td></tr>
                <tr><th>Deadlift</th><td></td><td></td><td></td></tr>
            </table>
        <Div id="centre_box">    
        <form action=# method=#>
            <p>New Lift: <br />
            Bench Press<input type="radio" name="new_lift_type" value="bench_press" checked="checked" />
            Squat<input type="radio" name="new_lift_type" value="squat" />
            Deadlift<input type="radio" name="new_lift_type" value="deadlift" />
            </p>
            <p> Weight (kg): <input type="number" name="new_lift_weight" step="0.5" min="0" value="20">
            <p> Reps: <input type="number" name="new_lift_reps" step="1" min="1" value="1"><br />
            <input type="submit" value="Submit" />
        </form>    
        <footer>
            <?=date('d/m/y') ?>
        </footer>
        <script src="script.JS" async defer></script>
    </body>
</html>