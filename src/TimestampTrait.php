<?php
namespace LibrarySystem;

trait TimestampTrait {
    private string $createdAt;

    public function setCreatedAt(): void {
        $this->createdAt = date("Y-m-d H:i:s");
    }

    public function getCreatedAt(): string {
        return $this->createdAt;
    }
}