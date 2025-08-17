<?php
namespace LibrarySystem;

interface NotificationInterface {
    public function send(string $message, string $recipient): void;
}