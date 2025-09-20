<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My library</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>
    <div class="profile">
        <a href="profile.php"><i class="fas fa-user-circle"></i></a>
    </div>
    <div class="top">
        <h1>MY LIBRARY</h1>
    </div>
    <div class="main">
        <div class="hero-container">
            <button id="prev" class="nav-button"><i class="fas fa-chevron-left"></i></button>
            <div class="recomend-hero">
                <div class="right">
                    <h2 id="book-title"></h2>
                    <img src="../images/book-cover/" alt="Book Cover" id="book-cover">
                </div>
                <div class="left">
                    <p id="synopsis"></p>
                </div>
                <div class="dots" id="dots"></div>
            </div>
            <button id="next" class="nav-button"><i class="fas fa-chevron-right"></i></button>
        </div>
        <div class="button-group">
        <button id="history"><i class="fas fa-clock"></i>RIWAYAT</button>
        <button id="return"><i class="fas fa-check"></i>PENGEMBALIAN</button>
        <button id="catalog"><i class="fas fa-book"></i>LIST BUKU</button>
        <button id="setting"><i class="fas fa-cog"></i>SETTING</button>
        </div>
    </div>
</body>
<script src="../js/index.js"></script>
</html>
