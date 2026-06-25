<?php
if(isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['country']) && isset($_POST['submit'])){
    $conn=mysqli_connect("localhost", "root", "", "users");

    if(!$conn){
        die("Greška pri spajanju na bazu: " . mysqli_connect_error());
    }

    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $country=$_POST['country'];

    $query="INSERT INTO users(name, lastname, email, username, password, country) VALUES (?, ?, ?, ?, ?, ?)";

    $stmt=mysqli_prepare($conn, $query);
    if($stmt){
        mysqli_stmt_bind_param($stmt, "ssssss", $name, $lastname, $email, $username, $password, $country);

        if(mysqli_stmt_execute($stmt)){
            echo "<p>Korisnik je uspješno dodan!</p>";
        }
        else{
            echo "<p>Greška kod unosa!".mysqli_error($conn)."</p>";
        }
        mysqli_stmt_close($stmt);
    }else{
        echo "<p style='color: red;'>Greška u pripremi upita: " . mysqli_error($conn) . "</p>";
    }

    mysqli_close($conn);
}else{
    echo "<p style='color: red;'>Niste popunili sva obavezna polja!</p>";
}

?>