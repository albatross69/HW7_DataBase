<?php
    require_once '../config.php';

    use Illuminate\Database\Capsule\Manager as Capsule;

    Capsule::schema()->create('products', function ($table)
    {
        $table->increments('product_id');
        $table->string('product_name');
        $table->decimal('price');
        $table->text('description');
        $table->integer('quantity');
        $table->string('category');
    });