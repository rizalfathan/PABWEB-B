<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>
    <table border="2">
        <thead>
            <tr>
                <th>NO.</th>
                <th>NIM</th>
                <th>NAMA</th>
            </tr>    
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($resultarray as $row) { ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row['NIM'] ?></td>
                    <td><?php echo $row['nama_mhs'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>