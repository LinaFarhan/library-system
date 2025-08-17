<?php
namespace LibrarySystem;

class Member extends User {
    public function __construct(string $name, string $email) {
        parent::__construct($name, $email);
        $this->role = "Member";
    }

    public function interactWithLibrary() {
        return "📚 {$this->name} (عضو) يمكنه استعارة الكتب.";
    }
}