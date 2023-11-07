<?php

class JsonCRUD {
    protected $filePath;

    public function __construct($filePath) {
        $this->filePath = $filePath;
    }

    protected function readFile() {
        if (!file_exists($this->filePath)) {
            return [];
        }

        $fileContent = file_get_contents($this->filePath);
        return json_decode($fileContent, true);
    }

    protected function writeFile($data) {
        $jsonContent = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents($this->filePath, $jsonContent);
        return true;
    }

    public function read() {
        return $this->readFile();
    }

    public function readByIndex($index) {
        $items = $this->read();
        if (isset($items[$index])) {
            return $items[$index];
        }
        return null;
    }
    public function create($data) {
        $content = $this->readFile();

        $content[] = $data;

        $this->writeFile($content);
    }


    public function update($index, $newData) {

        $products = $this->read();

        if (isset($products[$index])) {

            $products[$index] = array_merge($products[$index], $newData);

            return $this->writeFile($products);
        }

        return false;
    }

    public function delete($index) {
        $data = $this->read();
        if (array_key_exists($index, $data)) {

            unset($data[$index]);
            $data = array_values($data);
            $this->writeFile($data);
            return true;

        }
        return false;
    }
}