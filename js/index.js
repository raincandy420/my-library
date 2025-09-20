document.getElementById("history").onclick = () => {
    window.location.href = "history.php";
};

document.getElementById("return").onclick = () => {
    window.location.href = "return.php";
};

document.getElementById("catalog").onclick = () => {
    window.location.href = "catalog.php";
};


document.getElementById("setting").onclick = () => {
    window.location.href = "setting.php";
};

const books = [
    {
        title: "Das Kapital",
        cover: "../images/book-cover/das kapital.jpg",
        synopsis: "Capital: A Critique of Political Economy, also known as Das Kapital, is a foundational theoretical text in Marxist philosophy, economics, and politics by Karl Marx."
    },
    {
        title: "Madilog",
        cover: "../images/book-cover/madilog.avif",
        synopsis: "MADILOG adalah singkatan dari Materialisme, Dialektika, dan Logika, sebuah karya tulis filsuf pejuang kemerdekaan Indonesia, Tan Malaka. Ditulis pada tahun 1940-an, buku ini bertujuan untuk membebaskan pemikiran masyarakat Indonesia dari cara berpikir irasional, takhayul, dan dogma menuju pola pikir yang ilmiah, rasional, dan kritis. Buku ini dianggap sebagai karya besar dan penting dalam sejarah pemikiran Indonesia, dan dapat membantu pembaca memahami filsafat serta konsep-konsep pemikiran secara lebih baik."
    }
];

let currentBook = 0;

const bookTitle = document.getElementById("book-title");
const bookCover = document.getElementById("book-cover");
const synopsis = document.getElementById("synopsis");
const dotsContainer = document.getElementById("dots");

function showBook(index) {
    bookTitle.textContent = books[index].title;
    bookCover.src = books[index].cover;
    synopsis.textContent = books[index].synopsis;
    updateDots(index);
}

function updateDots(index) {
    dotsContainer.innerHTML = "";
    for (let i = 0; i < books.length; i++) {
        const dot = document.createElement("span");
        dot.classList.add("dot");
        if (i === index) {
            dot.classList.add("active");
        }
        dot.onclick = () => showBook(i);
        dotsContainer.appendChild(dot);
    }
}

document.getElementById("prev").onclick = () => {
    currentBook = (currentBook - 1 + books.length) % books.length;
    showBook(currentBook);
};

document.getElementById("next").onclick = () => {
    currentBook = (currentBook + 1) % books.length;
    showBook(currentBook);
};

showBook(currentBook);
