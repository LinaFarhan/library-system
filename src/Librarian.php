<?php
namespace LibrarySystem;

class Librarian extends User {
    public function __construct(string $name, string $email) {
        parent::__construct($name, $email);
        $this->role = "Librarian";
    }

    public function interactWithLibrary() {
<<<<<<< HEAD
        return "📖 {$this->name}  can add or remove book";
=======
        return "📖 {$this->name} (أمين المكتبة) يمكنه إضافة وحذف الكتب.";
>>>>>>> 50c214098081ecdfe1af2b9d6688143b23bc9b52
    }
}