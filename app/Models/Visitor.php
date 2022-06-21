<?php

namespace App\Models;

class Visitor {
    private string $name;
    private string $phone_number;

    function __construct(string $name, string $phone_number) {
        $this->name = $name;
        $this->phone_number = $phone_number;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getPhoneNumber(): string {
        return $this->phone_number;
    }

    public function setPhoneNumber(string $phone_number): void {
        $this->phone_number = $phone_number;
    }

}
