<?php
namespace LibrarySystem;

class Book {
<<<<<<< HEAD
   
    private string $title;
    private string $author;
    private bool $isAvailable = true;  

 
=======
    // 🟢 الخصائص (Attributes)
    private string $title;
    private string $author;
    private bool $isAvailable = true; // افتراضياً الكتاب متاح

    // 🟢 الدالة البانية (Constructor) - تنشئ الكتاب بعنوان ومؤلف
>>>>>>> 50c214098081ecdfe1af2b9d6688143b23bc9b52
    public function __construct(string $title, string $author) {
        $this->title = $title;
        $this->author = $author;
    }

<<<<<<< HEAD
 
=======
    // 🟢 دوال Getter (للحصول على بيانات الكتاب)
>>>>>>> 50c214098081ecdfe1af2b9d6688143b23bc9b52
    public function getTitle(): string {
        return $this->title;
    }

    public function getAuthor(): string {
        return $this->author;
    }

<<<<<<< HEAD
 
    public function borrow(): bool {
        if ($this->isAvailable) {
            $this->isAvailable = false;
            return true;  
        }
        return false; 
    }
 
=======
    // 🟢 استعارة الكتاب
    public function borrow(): bool {
        if ($this->isAvailable) {
            $this->isAvailable = false;
            return true; // تمت الاستعارة بنجاح
        }
        return false; // الكتاب غير متاح
    }

    // 🟢 إرجاع الكتاب
>>>>>>> 50c214098081ecdfe1af2b9d6688143b23bc9b52
    public function returnBook(): void {
        $this->isAvailable = true;
    }

<<<<<<< HEAD
  
=======
    // 🟢 التحقق من توفر الكتاب
>>>>>>> 50c214098081ecdfe1af2b9d6688143b23bc9b52
    public function isAvailable(): bool {
        return $this->isAvailable;
    }
}