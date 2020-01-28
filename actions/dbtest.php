<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Remote MySQL Connection Tester</title>
</head>
<body class="bg-light">
    
<div class="container">
<br>
        
        <header>
        <div class="alert alert-success" role="alert">
                <h1>Remote MySQL Connection Tester</h1>
                <h3>Select Your Mysql Driver and Run</h3>
                <hr>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>We do not</strong> yet support MSSQL = /.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </header>
        
<?php
    include ("{$_SERVER['DOCUMENT_ROOT']}/includes/configuration.php");
    //variaveis provindas do POST do formulário
    $host = $_POST['host'];
    $database = $_POST['database'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $driver = $_POST['driver'];

    //teste com base no driver
    if ($_POST['driver'] == 'mysqli') {
        echo "<h6>Trying to connect with MySQLi Driver ...</h6>";
        echo "<br>";

        $conn = mysqli_connect("$host", "$username", "$password", "$database");

        if (!$conn) {
            echo "<h1>Error :: Unable to connect using this credentials !!!</h1>";
            echo "<br>";
        } 
        else {
            echo "<h1>Success :: Example using this driver: </h1>";
            echo "<br>";
	    /*echo "<meta http-equiv='refresh' content='2;url=$url/examplemysqli.php'>";*/
	    #Build class
	    echo "<pre>";
	    echo "<code>";
	    echo "<p>";
	    echo "\$host=\"$host\";";
	    echo "<br>";
	    echo "\$username=\"$username\";";
	    echo "<br>";
	    echo "\$password=\"$password\";";
	    echo "<br>";
	    echo "\$database=\"$database\";";
	    echo "<br>";
	    echo "\$conn = mysqli_connect(\"\$host\", \"\$username\", \"\$password\", \"\$database\");";
	    echo "<br>";
	    echo "if (!\$conn) {";
	    echo "<br>";
	    echo  "echo \"Error :: Unable to connect using this credentials !!!\";";
	    echo "<br>";
	    echo  "} else {";
	    echo "<br>";
	    echo "echo \"Success :: Connected !!!\";";
	    echo "<br>";
	    echo "}";
	    echo "<br>";
	    echo "<br>";
	    echo "</p>";
	    echo "</code>";
	    echo "</pre>";
        }
    }
    elseif ($_POST['driver'] == 'pdo') {
        echo "<h6>Trying to connect with PDO Driver</h6>";
        $conn = new PDO("mysql:host=$host;dbname=$database",$username, $password);

        if (!$conn) {
            echo "<h1>Error :: Unable to connect using this credentials !!!</h1>";
            echo "<br>";
        }
        else {
            echo "<h1>Success :: Example using this driver:</h1>";
	    /*echo "<meta http-equiv='refresh' content='2;url=$url/examplepdo.php'>";        */
	    #Build class
            echo "<pre>";
            echo "<code>";
            echo "<p>";
            echo "\$host=\"$host\";";
            echo "<br>";
            echo "\$username=\"$username\";";
            echo "<br>";
            echo "\$password=\"$password\";";
            echo "<br>";
            echo "\$database=\"$database\";";
            echo "<br>";
	    echo "\$conn = new PDO(\"mysql:host=\$host;dbname=\$database\",\$username, \$password);";
            echo "<br>";
            echo "if (!\$conn) {";
            echo "<br>";
            echo  "echo \"Error :: Unable to connect using this credentials !!!\";";
            echo "<br>";
            echo  "} else {";
            echo "<br>";
            echo "echo \"Success :: Connected !!!\";";
            echo "<br>";
            echo "}";
            echo "<br>";
            echo "<br>";
            echo "</p>";
            echo "</code>";
            echo "</pre>";
        }

    }
?>
 <br> 
        &nbsp;

    <footer>
        <div class="card">
            <h5 class="card-header">Contribute</h5>
            <div class="card-body">
              <h5 class="card-title">We need your help!</h5>
              <p class="card-text">Did you like the idea of this project? you can contribute with suggestions or new features, if you wish, go to the page of this project and see how you can help.</p>
              <a href="https://github.com/renangraciano/webtester" class="btn btn-primary">GitHub</a>
            </div>
        </div>
    </footer>
</div>
</body>
</html>