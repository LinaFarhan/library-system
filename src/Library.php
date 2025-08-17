<?php
namespace LibrarySystem;

class Library {
    private array $books = [];      // قائمة الكتب
    private array $users = [];      // قائمة المستخدمين

    // 🟢 إضافة كتاب
    public function addBook(Book $book): void {
        $this->books[] = $book;
    }

    // 🟢 إزالة كتاب بالعنوان
    public function removeBook(string $title): bool {
        foreach ($this->books as $key => $book) {
            if ($book->getTitle() === $title) {
                unset($this->books[$key]);
                $this->books = array_values($this->books); // إعادة ترتيب المصفوفة
                return true;
            }
        }
        return false; // الكتاب غير موجود
    }

    // 🟢 البحث عن كتاب (بالعنوان أو المؤلف)
    public function searchBook(string $query): array {
        $results = [];
        foreach ($this->books as $book) {
            if (stripos($book->getTitle(), $query) !== false || stripos($book->getAuthor(), $query) !== false) {
                $results[] = $book;
            }
        }
        return $results;
    }

    // 🟢 إضافة مستخدم
    public function addUser(User $user): void {
        $this->users[] = $user;
    }

    // 🟢 الحصول على جميع الكتب
    public function getBooks(): array {
        return $this->books;
    }

    // 🟢 الحصول على جميع المستخدمين
    public function getUsers(): array {
        return $this->users;
    }

    // رسالة ترحيب للتأكد
    public function sayHello(): string {
        return "Hello from Library class!";
    }
}