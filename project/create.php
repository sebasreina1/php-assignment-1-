<?php
$servername ="";
$username ="";
$password ="";
$database ="";

$errorMessage= "";
$successMessage= "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' ){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    do {
        if (empty($name) || empty($email) || empty($phone) || empty($address)) {
            $errorMessage = "All the fields are required";
            break;
        }

        //this next bar adds cxlient to my darta base

        $name = "";
        $email = "";
        $phone = "";
        $address = "";

        $successMessage = "Client added correctly";

    } while (false);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script> src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" </script>
</head>
<body>
    <div class= "Container my-5">
        <h2>New Client</h2>

        <?php
        if ( !empty ($errorMessage)) {
            echo "
            <div class= 'alert alert-warning alert-dismissible fade show' role= 'alert'>
                <strong>$errorMessage</strong>
                <button type= 'button' class= 'btn-close' data-bs-dismiss='alert' aria-label='close'></button>
            </div>
            ";
        }
        ?>
        <form method="post"> 
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class= "col-sm-6">
                    <input typ= "text" class="form-control" name="name" value="<?php echo $name; ?>">
            </div>
    </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class= "col-sm-6">
                    <input typ= "text" class="form-control" name="Email" value="<?php echo $email; ?>">
            </div>
    </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone</label>
                <div class= "col-sm-6">
                    <input typ= "text" class="form-control" name="Phone" value="<?php echo $phone; ?>">
            </div>
    </div>

    <div class="row mb-3">
                <label class="col-sm-3 col-form-label">address</label>
                <div class= "col-sm-6">
                    <input typ= "text" class="form-control" name="address" value="<?php echo $address; ?>">
            </div>
    </div>


    <?php
    if (!empty($successMessage) ){
        echo "
        <div class = 'row mb-3'>
            <div class= 'offset-mb-3 col-sm-6'>
                <div class= 'alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>$succesMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label
                </div>
            </div>
        </div>
        ";
    }
    ?>

    <div class= "row mb-3">
        <div class="offset-sm-3 col-sm-3 d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <div class="col-sm-3 d-grid">
              <a class="btn btn-outline-primary" href="/DATABASE_JS/index.php" role="button">Cancel>

</div>
</div>
</form>
</div>
</body>
</html> 