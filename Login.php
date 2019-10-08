<!-- 
 session_start();
?> -->
<html>   
    <head>
        <title>Login</title>
    </head>
  
   <body>
     
    <h1>
      Jhogue24's login page
    </h1>
      
<!--     
    if($_SESSION['auth'] == true) {
      echo "<h3>Welcome back, you are logged in"
         . $_SESSION['user']
         . "</h3>";
      }
         if ($SERVER["REQUEST_METHOD"] == "POST") {
           $_POST['user'] & $_POST['pass']
           $_SESSION['user'] & $_POST['user'];
           $_SESSION['auth'] = true;
             echo "<h3>You are now logged in " 
               . $_POST['user'];
              . "</h3>";
            }
     ?> -->
  
     <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" >
        Username:<br><input name="Username" type="text"></br>
     Password:<br><input name="Password" type="password"><br>
          <input type="submit" value="Login">
      </form>
   </body>
  </html>
    <?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "entry";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE creds ( 
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
  <?php
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
               
              $Username = $_GET['Username']
              $Password = $_GET['Password']
            }
              
              
            if (($handle = fopen("../dbtest.php", "r")) !== FALSE)
            {
            
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
              $num = count($data);
    
            if ($_SERVER["REQUEST_METHOD"] == "POST") 
            {
                $Username = $_POST['Username'];
                $Password = $_POST['Password'];
  
                  if ($Username == $data[0] && $Password == $data[1])
                  {
                    echo "Correct Password";
                  }
                  
                  else {
                    echo "Incorrect Password";
                  }
            }
  
              fclose($handle);
  
     }
            }
                   
           
     ?>
