
<?php

 include 'connection.php';

    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $phone_number = $_POST['phone-number'];
    $email = $_POST['email'];
    $calendar = $_POST['calendar'];

    if ($conn->connect_error) {
        echo '<script>alert("Connection failed!")</script>';
    } else {
        $statement = $conn->prepare("insert into reservation( first_name , last_name , telephone , email , reg_date ) values (?,?,?,?,?);");
        $statement->bind_param('sssss',$first_name , $last_name , $phone_number , $email , $calendar );
        $statement->execute();
        header("location:reservation.html");
        $statement->close();
        $conn->close();
    }

?>
