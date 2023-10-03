<?php
    // functions for retrieving and indexing all items, showing a specific item, creating an item, modifying an item, and deleting an item from the database

    // reads json file and turns it into an array.
    function readJSONFile($file){
        // check if file exists and is readable. Stolen from bit of code Jacob shared
        if(!file_exists($file) || !is_readable($file)) return false;

        $content=file_get_contents(APP_PATH.'/data/KeyProducts_Services.JSON');
        $content=json_decode($content,true);
        $products = $content['Key Products & Services'];

        return $products;
    }

    // returns a single product's information from the larger array.
    function getProduct($array,$index){
        $product = $array[$index];

        return $product;
    }

    function createInJSON($file){

    }

    function updateInJSON($file){

    }

    function deleteFromJSON($file){

    }