<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost:8080", "root", "", "stem website");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $user_name =  $_REQUEST['user_name'];
        $user_pass = $_REQUEST['user_pass'];
        
         
        // Performing insert query execution
        // here our table name is college
        if ($_POST["user_pass"] === $_POST["pass_confirm"]) {
            $sql = "INSERT INTO login_data  VALUES ('$user_name',
            '$user_pass')";
         
            if(mysqli_query($conn, $sql)){
                echo "<h3>data stored in a database successfully."
                    . " Please browse your localhost php my admin"
                    . " to view the updated data</h3>";
    
            echo nl2br("\n$user_name\n $user_pass\n");
                header('Location: index.html');
            } else{
                echo "ERROR: Hush! Sorry $sql. "
                    . mysqli_error($conn);
        }
         }
         else {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>