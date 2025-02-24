 <?php
    session_start();
    if (isset($_SESSION['username'])) {
        echo '<h1>WELCOME ' . $_SESSION['username'] . '</h1>'; // Added space

    } else {
        echo '<h1>WELCOME GUEST</h1>';
        echo '<a href="/phplearn/ses sions.php">Home</a>';
    }
