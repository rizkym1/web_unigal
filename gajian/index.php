<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Display Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>

<body>
    <h1>Data from Database</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Column1</th>
            <th>Column2</th>
            <!-- Tambahkan kolom lain sesuai dengan tabel di database -->
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <!-- Tambahkan kolom lain sesuai dengan tabel di database -->
        </tr>
        <tr>
            <td colspan="3">No data found</td>
        </tr>
    </table>
</body>

</html>