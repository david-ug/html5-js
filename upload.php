<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$regulations = $_POST['regulations'];


if(!empty($name) && !empty($email) && !empty($phone) && !empty($country) && !empty($regulations)) {

    require_once 'db.php';

    $sql = "INSERT INTO `contact_form` (`name`, `email`, `phone`, `country`) VALUES (:name, :email, :phone, :country)";
    try {
        $db = getConnection();
        $stmt = $db->prepare($sql);
        $stmt->bindParam("name", $name);
        $stmt->bindParam("email", $email);
        $stmt->bindParam("phone", $phone);
        $stmt->bindParam("country", $country);
        $stmt->execute();

        $host  = $_SERVER['HTTP_HOST'];
        header("Location: http://$host");

    } catch (Exception $e) {
        echo $e;
    }

}else{
    echo "All fields are required";
    exit;
}

