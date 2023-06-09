<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet"/>
   <link href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.4/af-2.5.3/b-2.3.6/datatables.min.css" rel="stylesheet"/>
    
    <title>Data User</title>
</head>
<style>
    html, body {
    margin: 0;
    height: 100%;
}
</style>
<body style="background:#ececec;">
    
    <div class="container mt-5 shadow bg-white rounded">
        <table id="user" class="table">
            <thead>
                <th>No</th>
                <th>ID_User</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>NIM</th>
                <th>Alamat</th>
                <th>Semester</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php
                foreach ($data as $value) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $value['id_user'] ?></td>
                        <td><?= $value['username'] ?></td>
                        <td><?= $value['password'] ?></td>
                        <td><?= $value['email'] ?></td>
                        <td><?= $value['nim'] ?></td>
                        <td><?= $value['alamat'] ?></td>
                        <td><?= $value['semester'] ?></td>
                        <td>
                            <a href="edit.php?nim=<?= $value['id_user'] ?>">Edit</a>
                            <a href="aksi.php?nim=<?= $value['id_user'] ?>">Hapus</a>
    
                        </td>
                    </tr>
    
                <?php } ?>
            </tbody>
        </table>
        <hr>
        <a class="btn btn-danger mb-3" href="aksi.php?aksi=logout">Logout</a>
    </div>
</body>
<script type="text/javascript">
$(document).ready(function () {
    $('#datatable').DataTable();
});
</script>
</html>
