<?php
namespace LibrarySystem;

class Library {
    private array $books = [];       
    private array $users = []; 

    
    public function addBook(Book $book): void {
        $this->books[] = $book;
    }

 
    public function removeBook(string $title): bool {
        foreach ($this->books as $key => $book) {
            if ($book->getTitle() === $title) {
                unset($this->books[$key]);
                $this->books = array_values($this->books); // إعادة ترتيب المصفوفة
                return true;
            }
        }
        return false; 
    }

    
    public function searchBook(string $query): array {
        $results = [];
        foreach ($this->books as $book) {
            if (stripos($book->getTitle(), $query) !== false || stripos($book->getAuthor(), $query) !== false) {
                $results[] = $book;
            }
        }
        return $results;
    }

 
    public function addUser(User $user): void {
        $this->users[] = $user;
    }

    
    public function getBooks(): array {
        return $this->books;
    }

 
    public function getUsers(): array {
        return $this->users;
    }

   
    public function sayHello(): string {
        return "Hello from Library class!";
    }
}