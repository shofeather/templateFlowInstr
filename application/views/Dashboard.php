<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Data Master Location</h2>
        <table>
            <thead>
                <tr>ID</tr>
                <tr>Nama Stasiu</tr>
                <tr>TableData</tr>
            </thead>
            <tbody>
                <tr>
                <?php
                $no = 1;
                foreach ($MasterLocation as $row) :
                    ?>
                <td><?= $no++?></td>
                <td><?= $row['nama_station']?></td>
                <td><?= $row['TableData']?></td>
                </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>