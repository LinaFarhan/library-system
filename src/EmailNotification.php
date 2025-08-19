<?php
namespace LibrarySystem;

class EmailNotification implements NotificationInterface {
    public function send(string $message, string $recipient): void {
<<<<<<< HEAD
        echo "OK send $recipient: $message<br>";
=======
        echo "✉️ تم إرسال بريد إلى $recipient: $message<br>";
>>>>>>> 50c214098081ecdfe1af2b9d6688143b23bc9b52
    }
}
