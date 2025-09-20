<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="header">
        <h1>Admin Dashboard</h1>
        <div class="search-bar">
            <input type="text" placeholder="Search...">
            <button type="submit"><i class="fas fa-search"></i></button>
        </div>
    </div>

    <div class="main">
        <div class="infographic">
            <div class="user card">
                <h2>Total Users</h2>
                <p id="total-users">0</p>
                <p>verified: <span id="verified-users">0</span></p>
            </div>
            <div class="books card">
                <h2>Total Books</h2>
                <p id="total-books">0</p>
                <p>available: <span id="available-books">0</span></p>
            </div>
        </div>
        <div class="recent-activities card">
            <h2>Recent Activities</h2>
            <ul id="activity-list">
                <li>User A borrowed Book X</li>
                <li>User B returned Book Y</li>
                <li>User C registered an account</li>
            </ul>
        </div>
        <div class="user-stats card">
            <h2>User Stats</h2>
            <div class="normal-users">
                <h3>Normal Users</h3>
                <ul id="normal-user-list">
                    <li>User B - not verified</li>
                </ul>
            </div>
            <div class="admin-users">
                <h3>Admin Users</h3>
                <ul id="admin-user-list">
                    <li>User A - admin</li>
                    <li>User C - admin</li>
                </ul>
                
            </div>
            <div class="verified">
                <h3>Verified Users</h3>
                <ul id="verified-user-list">
                    <li>User A - verified</li>
                    <li>User C - verified</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="user-management card">
        <h2>User Management</h2>
        <div class="user-status">
            <p id="username"></p>
            <button id="proof">View Proof</button>
            <button id="verify-button">Verify User</button>
            <button id="deny-button">Deny User</button>
        </div>
        <div class="proof-view">
            <img id="proof-image" src="../images/user/proof/" alt="Proof of Identity">
            <p id="name"></p>
            <p id="birth"></p>
        </div>
        <div class="promote">
            <input type="text" id="promote-username" placeholder="Enter username to promote">
            <button id="promote-button">Promote to Admin</button>
        </div>
    </div> 

    <div class="book-management card">
        <h2>Book Management</h2>
        <button id="view-books-button">Add Book</button>
        <div class="add-book-form">
            <form id="add-book-form">
                <h3>Add New Book</h3>
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
                <label for="author">Author:</label>
                <input type="text" id="author" name="author" required>
                <label for="year">Publication Year:</label>
                <input type="number" id="year" name="year" required>
                <label for="cover">Book Cover:</label>
                <input type="file" id="cover" name="cover" required>
                <label for="synopsis">Synopsis:</label>
                <textarea id="synopsis" name="synopsis" required></textarea>
                <label for="pdf">Book PDF:</label>
                <input type="file" id="pdf" name="pdf" required>
                <button type="submit">Add Book</button>
            </form>
        </div>
        <form id="edit-book-form">
                <h3>Edit Book</h3>
                <label for="edit-title">Title:</label>
                <input type="text" id="edit-title" name="title" required>
                <label for="edit-author">Author:</label>
                <input type="text" id="edit-author" name="author" required>
                <label for="edit-year">Publication Year:</label>
                <input type="number" id="edit-year" name="year" required>
                <label for="edit-cover">Book Cover:</label>
                <input type="file" id="edit-cover" name="cover">
                <label for="edit-synopsis">Synopsis:</label>
                <textarea id="edit-synopsis" name="synopsis" required></textarea>
                <label for="edit-pdf">Book PDF:</label>
                <input type="file" id="edit-pdf" name="pdf">
                <button type="submit">Save Changes</button>
        </form>
        <div class="book-list">
            <div class="book-item">
                <img src="../images/book-cover/das kapital.jpg" alt="Book Cover">
                <h3 id="book-title">Das Kapital</h3>
                <p id="book-author">Penulis: Karl Marx</p>
                <p id="book-year">Tahun Terbit: 1867</p>
                <div class="actions">
                    <button class="edit-button" title="Edit"><i class="fas fa-edit"></i></button>
                    <button class="delete-button" title="Delete"><i class="fas fa-trash"></i></button>
                    <button class="recomend-button" title="Recommend"><i class="fas fa-star"></i></button>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/dashboard.js"></script>
</body>
</html>
