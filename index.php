<?php
session_start();
require __DIR__ . '/vendor/autoload.php';

use LibrarySystem\Library;
use LibrarySystem\Book;

 
$library = new Library();

 
if(isset($_SESSION['books'])) {
    foreach($_SESSION['books'] as $b) {
        $library->addBook(new Book($b['title'], $b['author']));
    }
}

 
if (isset($_POST['add_book'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $book = new Book($title, $author);
    $library->addBook($book);
}

 
$_SESSION['books'] = [];
foreach($library->getBooks() as $b){
    $_SESSION['books'][] = ['title'=>$b->getTitle(),'author'=>$b->getAuthor()];
}

 
$searchResults = [];
if (isset($_POST['search_book'])) {
    $query = $_POST['search_query'];
    $searchResults = $library->searchBook($query);
}

$booksToShow = isset($_POST['search_book']) ? $searchResults : $library->getBooks();
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title> Library-System </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1> Library Management  </h1>

        
        <div class="form-container">
            <h3>   Add New book </h3>
            <form method="post">
                <input type="text" name="title" placeholder=" Title book" required>
                <input type="text" name="author" placeholder="Aouther" required><br>
                <button type="submit" name="add_book">   Add book</button>
            </form>
        </div>
 
        <div class="form-container">
            <h3>   search-book  </h3>
            <form method="post">
                <input type="text" name="search_query" placeholder="   Title and Aouther  " required><br>
                <button type="submit" name="search_book">search</button>
            </form>
        </div>

   
        <div class="table-container">
            <h3>   list books</h3>
            <table>
                <tr>
                    <th> Title</th>
                    <th> Aouther</th>
                </tr>
                <?php
                foreach ($booksToShow as $book) {
                    echo "<tr><td>{$book->getTitle()}</td><td>{$book->getAuthor()}</td></tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
