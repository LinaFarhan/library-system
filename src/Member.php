<?php
namespace LibrarySystem;

class Member extends User {
    public function __construct(string $name, string $email) {
        parent::__construct($name, $email);
        $this->role = "Member";
    }

    public function interactWithLibrary() {
<<<<<<< HEAD
        return "{$this->name}  can borrow books";
=======
        return "📚 {$this->name} (عضو) يمكنه استعارة الكتب.";
>>>>>>> 50c214098081ecdfe1af2b9d6688143b23bc9b52
    }
}