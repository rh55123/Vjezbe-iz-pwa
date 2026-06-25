<?php
$conn = mysqli_connect("localhost", "root", "", "vjezba");

if (!$conn) {
    die("Greška pri spajanju na bazu: " . mysqli_connect_error());
}

if (isset($_POST['action']) && isset($_POST['id'])) {
    $id = $_POST['id'];
    
    if ($_POST['action'] == 'update') {
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $country_code = $_POST['country_code'];
        
        if (empty($country_code)) {
            $country_code = NULL;
        }
        
        $query = "UPDATE users SET name = '$name', lastname = '$lastname', country_code = '$country_code' WHERE id = $id";
        
        if (mysqli_query($conn, $query)) {
            header("Location: index.php?success=1");
        } else {
            header("Location: index.php?error=" . mysqli_error($conn));
        }
        
    } elseif ($_POST['action'] == 'delete') {
        $query = "DELETE FROM users WHERE id = $id";
        
        if (mysqli_query($conn, $query)) {
            header("Location: index.php?deleted=1");
        } else {
            header("Location: index.php?error=" . mysqli_error($conn));
        }
    }
}

mysqli_close($conn);
?>