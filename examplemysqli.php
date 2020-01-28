<?php
include_once 'actions/dbtest.php';
include_once 'includes/configuration.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/css/rainbow-custom.min.js">
    <title>Remote MySQL Tester - MySQLi Examples</title>
</head>
<body background="bg-light">
    <div class="container">
        
        <div class="text-center">
            <h1>MySQLi - Connection Examples</h1>
            <p>Basic examples using MySQLi driver</p>

            <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarsExample10">
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link" href="#example01">Example 01</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Example 02</a>
                        </li>
                      </ul>
                    </div>
                  </nav>
        </div>

        <div>
        <a href="#example01"><h1>Example 01</h1></a>
            <section>
                <article>
                    <blockquote>
                    <pre>
                        <code data-language="php">
$host="<?php $host ?>";
$username="<?php $username ?>";
$password="<?php $password ?>";
$database="<?php $database ?>";

$conn = mysqli_connect("$host", "$username", "$password", "$database");

if (!$conn) {
    echo "Error :: Unable to connect using this credentials !!!";
}
else {
    echo "Success :: Connected !!!";
}
                        </code>
                    </pre>
                    </blockquote>
                </article>
            </section>
        </div>

    </div>
</body>
</html>