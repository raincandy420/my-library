document.addEventListener('DOMContentLoaded', function () {
    // --- Form Visibility Logic ---
    const addBookButton = document.getElementById('view-books-button');
    const addBookForm = document.getElementById('add-book-form');
    const editBookForm = document.getElementById('edit-book-form');

    // Hide forms initially
    if (addBookForm) addBookForm.style.display = 'none';
    if (editBookForm) editBookForm.style.display = 'none';

    // Toggle add book form visibility
    if (addBookButton) {
        addBookButton.addEventListener('click', () => {
            if (addBookForm) {
                const isVisible = addBookForm.style.display === 'block';
                addBookForm.style.display = isVisible ? 'none' : 'block';
                if (!isVisible) editBookForm.style.display = 'none'; // Hide edit form if shown
            }
        });
    }

    // --- Button Action Logic ---
    document.querySelectorAll('.edit-button').forEach(button => {
        button.addEventListener('click', () => {
            // Show edit form and hide add form
            if (editBookForm) editBookForm.style.display = 'block';
            if (addBookForm) addBookForm.style.display = 'none';

            // In a real application, you would populate the form with the book's data
            alert('Edit button clicked. The edit form would be populated with this book\'s data.');
        });
    });

    document.querySelectorAll('.delete-button').forEach(button => {
        button.addEventListener('click', () => {
            if (confirm('Are you sure you want to delete this book?')) {
                // In a real application, you would send a request to the server to delete the book
                alert('Book deleted (simulated).');
            }
        });
    });

    document.querySelectorAll('.recomend-button').forEach(button => {
        button.addEventListener('click', () => {
            // In a real application, you would toggle the recommendation status
            alert('Book recommendation status toggled (simulated).');
        });
    });

    // --- User Management Logic ---
    const verifyButton = document.getElementById('verify-button');
    if (verifyButton) {
        verifyButton.addEventListener('click', () => {
            alert('User verification process initiated (simulated).');
        });
    }

    const denyButton = document.getElementById('deny-button');
    if (denyButton) {
        denyButton.addEventListener('click', () => {
            alert('User verification denied (simulated).');
        });
    }

    const promoteButton = document.getElementById('promote-button');
    if (promoteButton) {
        promoteButton.addEventListener('click', () => {
            const username = document.getElementById('promote-username').value;
            if (username) {
                alert(`User "${username}" has been promoted to admin (simulated).`);
            } else {
                alert('Please enter a username to promote.');
            }
        });
    }
});
