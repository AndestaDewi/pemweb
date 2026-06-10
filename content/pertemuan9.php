<h2>Cek Kategori Usia Mahasiswa</h2>

<form method="post">
    <div>
        <label for="nama">Masukkan nama : </label>
        <input type="text" id="nama" name="nama" required>
    </div>

    <div>
        <label for="umur">Masukkan umur : </label>
        <input type="number" id="umur" name="umur" required>
    </div>

    <button type="submit" name="submit">Cek Kategori</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $age = (int) $_POST['umur'];
    $name = $_POST['nama'];
    if ($age < 13) {
        echo "<p>Halo $name! Umur Anda $age tahun. Anda anak-anak!</p>";
    } elseif ($age >= 13 && $age <= 17) {
        echo "<p>Halo $name! Umur Anda $age tahun. Anda remaja.</p>";
    } elseif ($age >= 18 && $age <= 59) {
        echo "<p>Halo $name! Umur Anda $age tahun. Anda dewasa.</p>";
    } elseif ($age >= 60) {
        echo "<p>Halo $name! Umur Anda $age tahun. Anda lansia.</p>";
    } else {
        echo "<p>Halo $name! Umur Anda $age tahun. Kategori tidak diketahui.</p>";
    }
}
?>