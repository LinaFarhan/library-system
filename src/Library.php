<?php
namespace LibrarySystem;

class Library {
<<<<<<< HEAD
    private array $books = [];       
    private array $users = []; 

    
=======
    private array $books = [];      // قائمة الكتب
    private array $users = [];      // قائمة المستخدمين

    // 🟢 إضافة كتاب
>>>>>>> 50c214098081ecdfe1af2b9d6688143b23bc9b52
    public function addBook(Book $book): void {
        $this->books[] = $book;
    }

<<<<<<< HEAD
 
=======
    // 🟢 إزالة كتاب بالعنوان
>>>>>>> 50c214098081ecdfe1af2b9d6688143b23bc9b52
    public function removeBook(string $title): bool {
        foreach ($this->books as $key => $book) {
            if ($book->getTitle() === $title) {
                unset($this->books[$key]);
                $this->books = array_values($this->books); // إعادة ترتيب المصفوفة
                return true;
            }
        }
<<<<<<< HEAD
        return false; 
    }

    
=======
        return false; // الكتاب غير موجود
    }

    // 🟢 البحث عن كتاب (بالعنوان أو المؤلف)
>>>>>>> 50c214098081ecdfe1af2b9d6688143b23bc9b52
    public function searchBook(string $query): array {
        $results = [];
        foreach ($this->books as $book) {
            if (stripos($book->getTitle(), $query) !== false || stripos($book->getAuthor(), $query) !== false) {
                $results[] = $book;
            }
        }
        return $results;
    }

<<<<<<< HEAD
 
=======
    // 🟢 إضافة مستخدم
>>>>>>> 50c214098081ecdfe1af2b9d6688143b23bc9b52
    public function addUser(User $user): void {
        $this->users[] = $user;
    }

<<<<<<< HEAD
    
=======
    // 🟢 الحصول على جميع الكتب
>>>>>>> 50c214098081ecdfe1af2b9d6688143b23bc9b52
    public function getBooks(): array {
        return $this->books;
    }

<<<<<<< HEAD
 
=======
    // 🟢 الحصول على جميع المستخدمين
>>>>>>> 50c214098081ecdfe1af2b9d6688143b23bc9b52
    public function getUsers(): array {
        return $this->users;
    }

<<<<<<< HEAD
   
=======
    // رسالة ترحيب للتأكد
>>>>>>> 50c214098081ecdfe1af2b9d6688143b23bc9b52
    public function sayHello(): string {
        return "Hello from Library class!";
    }
}