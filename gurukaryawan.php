<?php
include('./layout/header.php');
include('koneksi.php');
?>
<main style="margin-top: 80px;padding:50px;">
    <table class="table table-striped table-hover">
        <tr>
            <th>Nama Guru</th>
            <th>NIPSN</th>
            <th>Pendidikan Terakhir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
        </tr>
        <?php $q = mysqli_query($kon, 'SELECT * FROM `guru&karyawan`;');
        while ($f = mysqli_fetch_assoc($q)) : ?>
            <tr>
                <td><?= $f['nama'] ?> </td>
                <td><?= $f['nipsn'] ?> </td>
                <td><?= $f['pendidikan_terakhir'] ?> </td>
                <td><?= $f['tanggal_lahir'] ?> </td>
                <td><?= $f['alamat'] ?> </td>
            </tr>
        <?php endwhile; ?>

    </table>
</main>
<?php include('layout/footer.php'); ?>