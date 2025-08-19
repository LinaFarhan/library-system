<?php
session_start();
require __DIR__ . '/vendor/autoload.php';

use LibrarySystem\Library;
use LibrarySystem\Book;

// إنشاء المكتبة
$library = new Library();

// استرجاع الكتب من الجلسة إذا موجودة
if(isset($_SESSION['books'])) {
    foreach($_SESSION['books'] as $b) {
        $library->addBook(new Book($b['title'], $b['author']));
    }
}

// معالجة إضافة كتاب جديد
if (isset($_POST['add_book'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $book = new Book($title, $author);
    $library->addBook($book);
}

// حفظ الكتب في الجلسة
$_SESSION['books'] = [];
foreach($library->getBooks() as $b){
    $_SESSION['books'][] = ['title'=>$b->getTitle(),'author'=>$b->getAuthor()];
}

// معالجة البحث عن كتاب
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
    <title>نظام إدارة المكتبة</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>إدارة المكتبة</h1>

        <!-- نموذج إضافة كتاب -->
        <div class="form-container">
            <h3>إضافة كتاب جديد</h3>
            <form method="post">
                <input type="text" name="title" placeholder="عنوان الكتاب" required>
                <input type="text" name="author" placeholder="اسم المؤلف" required><br>
                <button type="submit" name="add_book">إضافة الكتاب</button>
            </form>
        </div>

        <!-- نموذج البحث عن كتاب -->
        <div class="form-container">
            <h3>البحث عن كتاب</h3>
            <form method="post">
                <input type="text" name="search_query" placeholder="العنوان أو المؤلف" required><br>
                <button type="submit" name="search_book">بحث</button>
            </form>
        </div>

        <!-- عرض الكتب -->
        <div class="table-container">
            <h3>قائمة الكتب</h3>
            <table>
                <tr>
                    <th>العنوان</th>
                    <th>المؤلف</th>
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