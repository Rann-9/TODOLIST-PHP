<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
</head>

<!-- GET DATA -->
<?php
$id = $_GET['ID'];
include "config.php";
$sql = mysqli_query($con, "SELECT `ID`, `List` FROM `tabeltodo` WHERE `ID` = '$id'");
$data = mysqli_fetch_array($sql);
?>


<body class="bg-primary">
    <form action="halaman-update.php" method="post">
        <div class="container">
            <div class="row justify-content-center bg-danger m-auto shadow mt-3 py-3 col-md-6 rounded-5">
                <h2 class="text-center text-primary font-monospace">UPDATE LIST</h2>
                <div class="col-8">
                    <input type="text" value="<?php echo $data ['List']?>" name="list" class="form-control shadow">
                </div>
                <div class="col-2">
                    <button class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                    <input type="hidden" name="id" value="<?php echo $data ['ID']?>">
                </div>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>