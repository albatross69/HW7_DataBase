<?php
    require_once '../config.php';

    use Illuminate\Database\Capsule\Manager as Capsule;

    Capsule::schema()->create('categories', function ($table)
    {
        $table->increments('category_id');//
        $table->string('category');
    });