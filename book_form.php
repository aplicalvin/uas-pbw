<?php 
    $connection = mysqli_connect('localhost','root','simbolon','booking_kos');

    if (isset($_POST['send'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $name = $_POST['name'];
        $name = $_POST['name'];
        $name = $_POST['name'];
       $name = $_POST['name'];

       $request =  " insert into book_form(name, email, phone, address, location) values ('$name', '$email', '$phone', '$address', '$location')";


       mysqli_query($connection, $request);

       header('location:book.php');
    } else {
        echo 'Something went wrong';
    }