<?php
session_start();
include_once ("db.php");

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "SELECT * FROM user WHERE email='$email'";

    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Email Sudah Terdaftar"; ?>
        <br><br>
        <a href="/register.html">Back</a>
<?php    } else {
        $sql = "INSERT INTO user (email, password) VALUES ('$email','$password')";

        if (mysqli_query($db, $sql) == TRUE) {
            echo "registrasi berhasil . silahkan <a href='login.html'>Login</a>.";

        } else {
            echo "registrasi gagal";
        }
    }
}
