<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
</head>
<body>
    <h1>Welcome to My Website</h1>
    <a href="index.php?get=about.php">About Us</a>
    <div id="content">
        <?php
        if (isset($_GET['get'])) {
            $command = $_GET['get'];
            // Unsafe exec function leading to command injection
            exec($command, $output, $return_val);
            if($return_val != 0){
                echo "<script>alert('Error')</script>";
                echo "<br> Maybe This could help!! <br>";
                highlight_file('error.php');
                exit();
            }
            foreach ($output as $line) {
                echo $line . "<br>";
            }
            exit();
        } else {
            echo "<p>Welcome to our website!</p>";
        }
        ?>
    </div>
</body>
</html>
