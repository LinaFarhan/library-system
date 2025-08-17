<?php
namespace LibrarySystem;

class EmailNotification implements NotificationInterface {
    public function send(string $message, string $recipient): void {
        echo "✉️ تم إرسال بريد إلى $recipient: $message<br>";
    }
}
