<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENGEMBALIAN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/return.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="main"> <!-- in middle of screen it desktop in mobile give space between top -->
        <h1>PENGEMBALIAN</h1>
        <button id="back-button"><i class="fas fa-arrow-left"></i></button>
        <div class="return-form">
            <form action="">
                <label for="book-title">BUKU:</label>
                <input type="text" id="book-title" name="book-title" required>
                <br><br>
                <label for="user-name">USER:</label>
                <input type="text" id="user-name" name="user-name" required>
                <br><br>
                <button type="submit">KONFIRMASI PENGEMBALIAN</button>
            </form>
        </div>
        <div class="return-list"> <!-- scroll able but the scroll bar is hidden-->
            <h2>DAFTAR PENGEMBALIAN</h2>
            <table>
                <thead>
                    <tr>
                        <th>BUKU</th>
                        <th>USER</th>
                        <th>TANGGAL PEMINJAMAN</th>
                    </tr>
                </thead>
                <tbody data-dynamic="return-list">
                    <tr>
                        <td>Contoh Buku 1</td>
                        <td>User A</td>
                        <td>2024-01-15</td>
                    </tr>
                    <tr>
                        <td>Contoh Buku 2</td>
                        <td>User B</td>
                        <td>2024-01-16</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
<script src="../js/back.js"></script>
</html>
