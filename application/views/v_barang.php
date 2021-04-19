<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
</head>
<body>

    <table border="1px solid black">
    <tr>
        <th>Nama Barang</th>
        <th>Jumlah Barang</th>
        <th>Harga Barang</th>
    </tr>

    <?php foreach ($barang as $brg) : ?>

    <tr>
        <td> <center> <?php echo $brg['nama']; ?></center></td>
        <td> <center> <?php echo $brg['jumlah']; ?></center>
        </td>
        <td> <?php echo $brg['harga']; ?></td>
    </tr>

    <?php endforeach;?>

    </table>

</body>
</html>