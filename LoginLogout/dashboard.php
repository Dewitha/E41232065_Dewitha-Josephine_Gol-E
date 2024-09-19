<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
?>

<div class="dashboard-container">
    <h2>🎀 Selamat datang, <?php echo $_SESSION['email']; ?>! 🎀</h2>
    <a href="logout.php" class="logout-btn">Logout</a>
</div>

<style>
    .dashboard-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
    .logout-btn {
        background-color: #ff69b4;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        font-size: 18px;
        margin-top: 20px;
    }
    .logout-btn:hover {
        background-color: #ff85b4;
    }
    h2 {
        font-size: 24px;
        color: #ff69b4;
        animation: bounce 1s infinite;
    }
</style>
