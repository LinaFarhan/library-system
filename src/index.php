<?php
require _DIR_ . '/vendor/autoload.php';

use LibrarySystem\{Book, Library, LateFeeCalculator};
use LibrarySystem\Users\{Member, Librarian};
use LibrarySystem\Notifications\EmailNotification;

// 1. إنشاء مكتبة
$library = new Library();

// 2. إضافة كتب
$book1 = new Book("Clean Code", "Robert Martin", "123-456");
$library->addBook($book1);

// 3. البحث
$results = $library->searchBooks("Clean");
print_r($results);

// 4. إشعار
$notification = new EmailNotification();
$notification->send("كتاب جديد تمت إضافته: Clean Code");

// 5. حساب غرامة
$calculator = new LateFeeCalculator();
$dueDate = new \DateTime('2023-01-01');
$fee = $calculator->calculate($dueDate);
echo "الغرامة المستحقة: $fee دولار";?>