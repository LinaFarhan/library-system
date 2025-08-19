<?php
namespace LibrarySystem;

 
abstract class User {
    protected string $name;
    protected string $email;
    protected string $role;

    public function __construct(string $name, string $email) {
        $this->name  = $name;
        $this->email = $email;
    }
 
    abstract public function interactWithLibrary();
    
  
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
