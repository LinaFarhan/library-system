<?php
namespace LibrarySystem;

class Book {
    // 🟢 الخصائص (Attributes)
    private string $title;
    private string $author;
    private bool $isAvailable = true; // افتراضياً الكتاب متاح

    // 🟢 الدالة البانية (Constructor) - تنشئ الكتاب بعنوان ومؤلف
    public function __construct(string $title, string $author) {
        $this->title = $title;
        $this->author = $author;
    }

    // 🟢 دوال Getter (للحصول على بيانات الكتاب)
    public function getTitle(): string {
        return $this->title;
    }

    public function getAuthor(): string {
        return $this->author;
    }

    // 🟢 استعارة الكتاب
    public function borrow(): bool {
        if ($this->isAvailable) {
            $this->isAvailable = false;
            return true; // تمت الاستعارة بنجاح
        }
        return false; // الكتاب غير متاح
    }

    // 🟢 إرجاع الكتاب
    public function returnBook(): void {
        $this->isAvailable = true;
    }

    // 🟢 التحقق من توفر الكتاب
    public function isAvailable(): bool {
        return $this->isAvailable;
    }
}