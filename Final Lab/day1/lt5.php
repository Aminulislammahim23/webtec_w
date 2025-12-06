<?php

echo "<h2>Lab Task 5: PHP Classes and Objects (OOP)</h2>";

class Book {
    private $title;
    private $author;
    private $year;
    
    
    public function __construct($title = "", $author = "", $year = 0) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        echo "<em>Book object created: \"$title\"</em><br>";
    }
    
    public function getTitle() {
        return $this->title;
    }
    
    public function getAuthor() {
        return $this->author;
    }
    
    public function getYear() {
        return $this->year;
    }
    
    public function setTitle($title) {
        $this->title = $title;
        echo "<em>Title updated to: \"$title\"</em><br>";
    }
    
    public function setAuthor($author) {
        $this->author = $author;
        echo "<em>Author updated to: \"$author\"</em><br>";
    }
    
    public function setYear($year) {
        if ($year > 0 && $year <= date("Y")) {
            $this->year = $year;
            echo "<em>Year updated to: $year</em><br>";
        } else {
            echo "<em>Invalid year: $year (must be between 1 and " . date("Y") . ")</em><br>";
        }
    }
    
    public function getDetails() {
        if (empty($this->title) && empty($this->author) && $this->year == 0) {
            return "Book information not set yet.";
        }
        
        $details = "📚 <strong>Book Details:</strong><br>";
        $details .= "• <strong>Title:</strong> " . ($this->title ?: "Not specified") . "<br>";
        $details .= "• <strong>Author:</strong> " . ($this->author ?: "Not specified") . "<br>";
        $details .= "• <strong>Publication Year:</strong> " . ($this->year > 0 ? $this->year : "Not specified");
        
        
        if ($this->year > 0) {
            $currentYear = date("Y");
            $age = $currentYear - $this->year;
            $details .= " (Published " . $age . " year" . ($age != 1 ? "s" : "") . " ago)";
        }
        
        return $details;
    }
    
    
    public function isClassic() {
        if ($this->year > 0) {
            $age = date("Y") - $this->year;
            return $age >= 50;
        }
        return false;
    }
    
    
    public function display() {
        echo $this->getDetails();
        if ($this->isClassic()) {
            echo "<br>🏛️ <strong>This book is considered a classic!</strong>";
        }
        echo "<br><br>";
    }
}

echo "<strong>Book class has been defined with properties and methods.</strong><br><br>";


echo "<h3>2. Creating Book Objects</h3>";

echo "<h4>Book 1: Using Constructor</h4>";

$book1 = new Book("To Kill a Mockingbird", "Harper Lee", 1960);
$book1->display();

echo "<h4>Book 2: Empty Constructor then Setting Properties</h4>";

$book2 = new Book();
echo "Initial details:<br>";
echo $book2->getDetails() . "<br><br>";


$book2->setTitle("1984");
$book2->setAuthor("George Orwell");
$book2->setYear(1949);
echo "<br>";
$book2->display();

echo "<h4>Book 3: Partial Constructor then Updating</h4>";

$book3 = new Book("The Great Gatsby", "", 1925);
$book3->setAuthor("F. Scott Fitzgerald");
$book3->display();

echo "<h4>Book 4: Demonstrating Year Validation</h4>";
$book4 = new Book("Future Book", "John Doe", 0);
$book4->setYear(2050); 
$book4->setYear(2023); 
$book4->setTitle("Modern Programming");
$book4->setAuthor("Jane Smith");
$book4->display();


echo "<h3>3. Using Getter Methods</h3>";
echo "<strong>Book 1 Information using getters:</strong><br>";
echo "Title: " . $book1->getTitle() . "<br>";
echo "Author: " . $book1->getAuthor() . "<br>";
echo "Year: " . $book1->getYear() . "<br>";
echo "Is Classic: " . ($book1->isClassic() ? "Yes" : "No") . "<br><br>";

echo "<strong>Book 2 Information using getters:</strong><br>";
echo "Title: " . $book2->getTitle() . "<br>";
echo "Author: " . $book2->getAuthor() . "<br>";
echo "Year: " . $book2->getYear() . "<br>";
echo "Is Classic: " . ($book2->isClassic() ? "Yes" : "No") . "<br><br>";


echo "<h3>4. Array of Books</h3>";

$library = [
    new Book("Pride and Prejudice", "Jane Austen", 1813),
    new Book("The Catcher in the Rye", "J.D. Salinger", 1951),
    new Book("The Hobbit", "J.R.R. Tolkien", 1937),
    new Book("Harry Potter and the Sorcerer's Stone", "J.K. Rowling", 1997),
    new Book("The Da Vinci Code", "Dan Brown", 2003)
];

echo "<strong>Library Collection (" . count($library) . " books):</strong><br><br>";

foreach ($library as $index => $book) {
    echo "<strong>Book #" . ($index + 1) . ":</strong><br>";
    $book->display();
}

echo "<h3>5. Library Statistics</h3>";
$classicCount = 0;
$modernCount = 0;
$oldestYear = PHP_INT_MAX;
$newestYear = 0;
$oldestBook = "";
$newestBook = "";

foreach ($library as $book) {
    if ($book->isClassic()) {
        $classicCount++;
    } else {
        $modernCount++;
    }
    
    if ($book->getYear() < $oldestYear && $book->getYear() > 0) {
        $oldestYear = $book->getYear();
        $oldestBook = $book->getTitle();
    }
    
    if ($book->getYear() > $newestYear) {
        $newestYear = $book->getYear();
        $newestBook = $book->getTitle();
    }
}

echo "<strong>Library Statistics:</strong><br>";
echo "• Total Books: " . count($library) . "<br>";
echo "• Classic Books (50+ years old): $classicCount<br>";
echo "• Modern Books (less than 50 years old): $modernCount<br>";
echo "• Oldest Book: \"$oldestBook\" ($oldestYear)<br>";
echo "• Newest Book: \"$newestBook\" ($newestYear)<br>";

echo "<h3>6. Book Class Information</h3>";
echo "<div style='background-color: #f0f8ff; padding: 15px; border-radius: 5px; border-left: 4px solid #007bff;'>";
echo "<strong>Class Name:</strong> Book<br>";
echo "<strong>Properties:</strong><br>";
echo "&nbsp;&nbsp;• \$title (private string)<br>";
echo "&nbsp;&nbsp;• \$author (private string)<br>";
echo "&nbsp;&nbsp;• \$year (private integer)<br><br>";
echo "<strong>Methods:</strong><br>";
echo "&nbsp;&nbsp;• __construct(\$title, \$author, \$year)<br>";
echo "&nbsp;&nbsp;• getTitle(), getAuthor(), getYear()<br>";
echo "&nbsp;&nbsp;• setTitle(\$title), setAuthor(\$author), setYear(\$year)<br>";
echo "&nbsp;&nbsp;• getDetails()<br>";
echo "&nbsp;&nbsp;• isClassic()<br>";
echo "&nbsp;&nbsp;• display()<br>";
echo "</div>";

echo "<hr><p><strong>Object-oriented programming with PHP demonstrated successfully!</strong></p>";
?>