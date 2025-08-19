<?php
namespace LibrarySystem;

<<<<<<< HEAD
 
=======
// كلاس أساسي للمستخدمين
>>>>>>> 50c214098081ecdfe1af2b9d6688143b23bc9b52
abstract class User {
    protected string $name;
    protected string $email;
    protected string $role;

    public function __construct(string $name, string $email) {
        $this->name  = $name;
        $this->email = $email;
    }
<<<<<<< HEAD
 
    abstract public function interactWithLibrary();
    
 
=======

    // تعريف سلوك مشترك، لكن تفاصيله تختلف حسب نوع المستخدم
    abstract public function interactWithLibrary();
    
    // Getter
>>>>>>> 50c214098081ecdfe1af2b9d6688143b23bc9b52
    public function getName(): string {
        return $this->name;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getRole(): string {
        return $this->role;
    }
}