<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/catalog.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <button id="back-button"><i class="fas fa-arrow-left"></i></button>
    <div class="catalog-container">
        <h1>KATALOG BUKU</h1>
        <div class="search-container">
            <input type="text" id="search-bar" placeholder="Cari buku...">
            <button id="search-button"><i class="fas fa-search"></i></button>
        </div>
        <div class="book-list" data-dynamic="book-list">
            <!-- Daftar buku akan dimuat di sini -->
             <div class="book-item">
                <a href="book-details.php?id=1" target="_blank"><img src="../images/book-cover/das kapital.jpg" alt="Book Cover"></a>
                <h3 id="book-title">Das Kapital</h3>
                <p id="book-author">Penulis: Karl Marx</p>
                <p id="book-year">Tahun Terbit: 1867</p>
        </div>
    </div>
    <script src="../js/back.js"></script>
</body>
</html>
