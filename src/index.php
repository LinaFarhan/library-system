 <?php
require _DIR_ . '/vendor/autoload.php';

use LibrarySystem\Book;
use LibrarySystem\Users\User;

$book = new Book("Clean Code", "Robert Martin", "123-456");
echo "تم إنشاء كتاب بنجاح!";