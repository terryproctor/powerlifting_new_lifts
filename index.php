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
        <?php 
                $host="localhost"; 
                $user="root"; 
                $password=""; 
                $database="lift"; 
                
                $con= new mysqli($host, $user, $password, $database);
                // if($con){
                //     echo "Sucessful connection";
                // }
                $bench_id_sql = 
                            "SELECT id, lift_type, weight, reps, one_rep_max 
                             FROM LIFTS
                             WHERE lift_type = 'bench_press'
                             ORDER BY one_rep_max DESC
                             LIMIT 1
                             ;"
                             ;
                $bench_result = mysqli_query($con, $bench_id_sql);             
                $bench_array = mysqli_fetch_array($bench_result);
                // print_r($bench_array);
                $bench_weight = $bench_array['weight'];
                $bench_reps = $bench_array['reps'];
                $bench_rep_max = $bench_array['one_rep_max'];
            ?>
    </head>
    <body>
        <header>
            <h1>Powerlifting records!</h1>
        </header>
            <table>
                <tr><th>Lift</th><td>Weight</td><td>Reps</td><td>1 Rep Max</td></tr>
                <tr><th>Bench Press</th><td><?= $bench_weight ?></td><td><?= $bench_reps ?></td><td><?= ROUND($bench_rep_max, 1) ?></td></tr>
                <tr><th>Squat</th><td></td><td></td><td></td></tr>
                <tr><th>Deadlift</th><td></td><td></td><td></td></tr>
            </table>
        <Div id="centre_box">    
        <form action="new_lift.php" method="POST">
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
            <p> </p>
            
        </footer>
         
    </body>
</html>