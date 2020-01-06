<!DOCTYPE html>
<html>

<head>
    <title>Tampil Data produk</title>
</head>

<body style="margin-left: 150px; margin-top: 100px;">
    <?php echo anchor('produk/input', 'Tambah Siswa Baru'); ?>
    <table width='1100' height='auto' border="1" style="text-align: center;">
        <tr>
            <td>ID</td>
            <td>Kode Produk</td>
            <td>Nama Produk</td>
            <td>Harga</td>
            <td>Stok</td>
            <td>Aksi</td>
        </tr>

        <?php foreach ($tampil as $key => $value) { ?>
            <!-- untuk menampilkan database dengan perulangan -->

            <tr>
                <!-- untuk menapilkan database-->
                <td>
                    <?php echo     $value->id ?>
                </td>

                <td>
                    <?php echo     $value->kode_produk ?>
                </td>

                <td>
                    <?php echo     $value->nama_produk ?>
                </td>

                <td>
                    <?php echo     $value->harga ?>
                </td>

                <td>
                    <?php echo     $value->stok ?>
                </td>

                <td>
                    <?php echo anchor('produk/hapus/' . $value->id, 'Hapus'); ?>
                </td>

            </tr>

        <?php } ?>

    </table>
</body>

</html>