<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>riwayat</title>
    <link rel="stylesheet" href="../css/history.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <button id="back-button"><i class="fas fa-arrow-left"></i></button>
    <div class="riwayat-container">   
        <h1>RIWAYAT PEMINJAMAN</h1>
        <table>
            <thead>
                <tr>
                    <th>BUKU</th>
                    <th>TANGGAL PEMINJAMAN</th>
                    <th>TANGGAL PENGEMBALIAN</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody data-dynamic="riwayat-list">
                <tr>
                    <td>Contoh Buku 1</td>
                    <td>2024-01-15</td>
                    <td>2024-01-22</td>
                    <td><button>pinjam lagi</button></td>
                </tr>
                <tr>
                    <td>Contoh Buku 2</td>
                    <td>2024-01-16</td>
                    <td>2024-01-23</td>
                    <td><button>pinjam lagi</button></td>
                </tr>
            </tbody>
        </table>
</body>
<script src="../js/back.js"></script>
</html>
