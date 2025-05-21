<?php
// This is a configuration file for a PHP application.

// Define the four variables  for connecting to the database
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "demo_db";

// Create a connection to the database
$connection = mysqli_connect($servername, $username, $password, $database);

if($connection){ ?>
    <script>
        alert("Connection successful");
    </script>
<?php }else{ ?>
    <script>
        alert("Connection failed");
    </script>

<?php }

// function greetUser($name){
//     echo "Hello, $name! Welcome to our website.";
// }

// greetUser("Phillip");


?>