<?php
// Create database connection using config file
include_once("koneksi.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT nama FROM nama INNER JOIN work ON kategori nama.nama = work.nama  ");
?>

<html>

<head>
    <title>resto</title>
</head>

<body>


    <table width='80%' border=1>

        <tr>
            <th>Nama</th>
            <th>Work</th>
            <th>Salary</th>
        </tr>
        <?php
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['nama'] . "</td>";
            echo "<td>" . $user_data['nama_w'] . "</td>";
            echo "<td>" . $user_data['salary'] . "</td>";
        }
        ?>
    </table>
</body>

</html>