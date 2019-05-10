<?php

if (isset($_POST['submit'])) {
//    echo '<pre>';
//    print_r($_POST);
//    $message = add_info();
//    echo $message;
    add_info();
    echo '<script type="text/javascript">';
    echo 'alert("Info Saved Successfully!");';
    echo 'window.location.href = "index.php";';
    echo '</script>';
}

function add_info() {

    $first_name = $_POST['first_name'];
    $second_name = $_POST['second_name'];
    $phone = $_POST['phone'];
    $street = $_POST['street'];
    $building = $_POST['building'];
    $city = $_POST['city'];
    $comment = $_POST['comment'];
  
    $db_connect = mysqli_connect('localhost', 'root', '9919');
    if ($db_connect) {
        mysqli_select_db($db_connect, 'registration');
    }
    $sql = "INSERT INTO customer_info (first_name, second_name, phone, street, building, city, comment) VALUES ('$first_name', '$second_name', '$phone', '$street', '$building', '$city', '$comment')";
    if (mysqli_query($db_connect, $sql)) {
        $message = "Info Saved Successfully!";
        return $message;
    } else {
        die('Query Problem' . mysqli_error($db_connect));
    }
}

?>
