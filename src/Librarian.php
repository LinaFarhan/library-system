<?php
namespace LibrarySystem;

class Librarian extends User {
    public function __construct(string $name, string $email) {
        parent::__construct($name, $email);
        $this->role = "Librarian";
    }

    public function interactWithLibrary() {
 
        return "  {$this->name}  can add or remove book";
 
    }
}
