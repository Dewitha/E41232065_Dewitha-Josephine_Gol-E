<?php
include 'database.php';

session_start();
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['email'] = $email;
            header("Location: dashboard.php");
        } else {
            $message = "<p class='error'>Password salah!</p>";
        }
    } else {
        $message = "<p class='error'>Akun tidak ditemukan!</p>";
    }
}
?>

<?php
$title = "Login";
ob_start();
?>
<form method="POST" action="">
    <input type="text" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>
<p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
<?php
$content = ob_get_clean();
include 'auth.php';
?>
