 <?php
    session_start();
    if (isset($_SESSION['username'])) {
        echo '<h1>WELCOME ' . $_SESSION['username'] . '</h1>'; // Added space
        //destroy session
        echo '<a href="logout.php">Logout</a>';
    } else {
        echo '<h1>WELCOME GUEST</h1>';
        echo '<a href="../sessions.php">Home</a>';
    }
