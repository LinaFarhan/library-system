<?php
namespace LibrarySystem;

class Book {
   
    private string $title;
    private string $author;
    private bool $isAvailable = true;  

 
    public function __construct(string $title, string $author) {
        $this->title = $title;
        $this->author = $author;
    }

 
    public function getTitle(): string {
        return $this->title;
    }

    public function getAuthor(): string {
        return $this->author;
    }

 
    public function borrow(): bool {
        if ($this->isAvailable) {
            $this->isAvailable = false;
            return true;  
        }
        return false; 
    }
 
    public function returnBook(): void {
        $this->isAvailable = true;
    }

  
    public function isAvailable(): bool {
        return $this->isAvailable;
    }
}