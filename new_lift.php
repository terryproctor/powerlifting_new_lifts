
<?php
$new_lift = $_POST['new_lift_type'];
$new_weight = $_POST['new_lift_weight'];
$new_reps = $_POST['new_lift_reps'];
$new_one_rep_max = $new_weight * (1 + ($new_reps/30));

      $host="localhost"; 
      $user="root"; 
      $password="";
      $database="lift"; 
      
      
      $conn= new mysqli($host, $user, $password, $database);

    //   echo $new_lift, $new_weight, $new_reps;

$sql = "INSERT INTO lifts(lift_type, weight, reps, one_rep_max) 
        VALUES ('$new_lift', '$new_weight', '$new_reps', '$new_one_rep_max') 
            ;"
        ;

        
            
           
            
           if($conn->query($sql) === TRUE){
            echo "Record Added Sucessfully";
           }
           else
           {
            echo "Error" . $sql . "<br/>" . $conn->error;
           }
           $conn->close();
       
?>
