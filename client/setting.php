<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>settings</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/setting.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body> 
    
<button id="back-button"><i class="fas fa-arrow-left"></i></button>
<div class="main"> <!-- in middle of screen it desktop in mobile give space between top -->
        <h1>SETTING</h1>
        
            
            <details> 
                <summary> <i class="fas fa-user"></i>  akun </summary>
        <div class="setting-form">
            <form action="">
                <label for="profile-picture">FOTO PROFIL:</label>
                <input type="file" id="profile-picture" name="profile-picture" required>
                <br><br>
                <label for="username">USERNAME:</label>
                <input type="text" id="username" name="username" required>
                <br><br>
                <label for="new-password">PASSWORD:</label>
                <input type="password" id="new-password" name="new-password" required>
                <br><br>
                <label for="password">CONFIRM PASSWORD:</label>
                <input type="password" id="password" name="password" required>
                <br><br>
                <button type="submit">SIMPAN PERUBAHAN</button>
            </form>
        </div>
    </details>

    <details> 
                <summary> <i class="fas fa-user-check"></i>  verifikasi akun </summary>
        <div class="setting-form">
            <form action="">
                <label for="name">NAMA:</label>
                <input type="text" id="name" name="name" required>
                <br><br>
                <label for="birth">TANGGAL LAHIR:</label>
                <input type="date" id="birth" name="birth" required>
                <br><br>
                <label for="proof">bukti:</label>
                <input type="file" id="proof" name="proof" required>
                <br><br>
                <button type="submit">Submit</button>
            </form>
        </div>
    </details>
     <details> 
                <summary> <i class="fas fa-info-circle"></i> tentang </summary>
        <p>aplikasi perpustakaan sederhana</p>
    </details>
    </div>

</body>
<script src="../js/back.js"></script>
</html>