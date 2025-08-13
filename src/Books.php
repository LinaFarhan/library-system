<!-- git checkout feature/books-class -->
 
<?php
namespace LibrarySystem;

class Book{
    private $title;
    private $author;
    private $isbn;
    private $isBorrowed = false;

    public function __construct($title, $author, $isbn) {
        $this->title = $title;
        $this->author = $author;
        $this->isbn = $isbn;
    }

  
}