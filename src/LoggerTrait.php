<?php
namespace LibrarySystem;

trait LoggerTrait {
    public function log(string $message): void {
        echo "[LOG " . date("Y-m-d H:i:s") . "] $message<br>";
    }
}