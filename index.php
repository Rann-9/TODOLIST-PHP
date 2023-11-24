<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
</head>

<body class="bg-info">
    <form action="insert.php" method="post">
        <div class="container">
            <div class="row justify-content-center bg-warning m-auto shadow mt-3 py-3 col-md-6 border border-danger border-2 rounded-5">
                <h2 class="text-center text-primary font-monospace">TODO LIST</h2>
                <div class="col-8">
                    <input type="text" name="list" class="form-control shadow">
                </div>
                <div class="col-2">
                    <button class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                </div>
            </div>
        </div>
    </form>

    <!-- GET DATA FROM LOCALHOST -->
    <?php
    include "config.php";
    $sql = mysqli_query($con, "SELECT `ID`, `List` FROM `tabeltodo`");

    $i = 1;
    ?>
    <!-- Tampilkan Data -->
    <div class="container">
        <div class="bg-white m-auto col-8 mt-3">
            <table class="table table-dark table-striped table-hover table-danger border border-danger">
                <tbody>
                    <?php
                    while($row = mysqli_fetch_array($sql)) {
                    ?>
                    <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $row['List'] ?></td>
                        <td style="width: 10%;"><a href="update.php? ID= <?php echo $row ['ID'] ?>" class="btn btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td style="width: 10%;"><a href="delete.php? ID= <?php echo $row['ID'] ?>" class="btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i></a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>