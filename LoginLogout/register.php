<?php
include 'database.php';
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        $message = "<p class='success'>Registrasi berhasil. Silakan <a href='index.php'>Login di sini</a></p>";
    } else {
        $message = "<p class='error'>Registrasi gagal: " . $conn->error . "</p>";
    }
}
?>

<?php
$title = "Register";
ob_start();
?>
<form method="POST" action="">
    <input type="text" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Register</button>
</form>
<p>Sudah punya akun? <a href="index.php">Login di sini</a></p>
<?php
$content = ob_get_clean();
include 'auth.php';
?>
