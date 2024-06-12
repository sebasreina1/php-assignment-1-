<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataBase</title>
    <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class= "container my-5">
        <h2>List of users</h2>
        <form method="post">
        <a class="btn btn-primary" href="/DATABASE_JS/create.php" role="button">New Client</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername ="localhost";
                $username ="root";
                $password ="";
                $database ="DATABASE_JS";

                //here we have to make a connection with the server

                $connection = new mysqli($servername,$username,$password,$database);

                //and now we are just checking if the connection is good
                if ($connection -> connect_error) {
                    die("Connection failed: " . $connection->connect_error);
                }
                
                $sql = "SELECT * FROM clients";
                $result = $connection ->query($sql);

                if (!$result) {
                    die("invalid query: " . $connection->error);

                }
                
                // And if the system reads it then good job, now i jusr gotta see if it can read all my list

                while($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[email]</td>
                    <td>$row[phone]</td>
                    <td>$row[address]</td>
                    <td>$row[created_at]</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='/DATABASE_JS/edit.php?id=$row[id]'>Edit</a> <!--this is so the costumer can see the info and make sure is correct afterwards-->
                        <a class='btn btn-danger btn-sm' href='/DATABASE_JS/delete.php?id=$row[id]'>Delete</a>
                    </td>

                </tr>
                    ";
                }


                ?>
               
            </tbody>
        </table>
    </div>
</body>
</html> 