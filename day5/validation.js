function addBook() {
    let title = document.getElementById("title").value.trim();
    let year = document.getElementById("year").value.trim();
    let currentYear = new Date().getFullYear();

    if (title === "" || !/^[A-Za-z]+$/.test(title)) {
        alert("Title must contain only alphabets and no spaces.");
        return;
    }

    if (!/^\d{4}$/.test(year) || year < 1900 || year > currentYear) {
        alert("Enter a valid 4-digit year between 1900 and " + currentYear);
        return;
    }

    let table = document.getElementById("bookTable");
    let row = table.insertRow();

    if (year < 2000) {
        row.style.backgroundColor = "lightgray";
    } else {
        row.style.backgroundColor = "lightgreen";
    }

    row.insertCell(0).innerHTML = title;
    row.insertCell(1).innerHTML = year;

    document.getElementById("title").value = "";
    document.getElementById("year").value = "";
}