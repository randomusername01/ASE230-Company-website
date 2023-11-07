<?php

class Product {
    public $name;
    public $description;
    public $applications;

    public function __construct($name, $description, $applications = []) {
        $this->name = $name;
        $this->description = $description;
        $this->applications = $applications;
    }

    public function toArray() {
        return [
            'Name' => $this->name,
            'Description' => $this->description,
            'Applications' => $this->applications
        ];
    }

    public static function fromArray($array) {
        return new Product($array['Name'], $array['Description'], $array['Applications']);
    }
}
