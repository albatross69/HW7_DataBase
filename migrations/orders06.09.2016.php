<?php
    require_once '../config.php';

    use Illuminate\Database\Capsule\Manager as Capsule;

    Capsule::schema()->create('orders', function ($table)
    {
        $table->increments('order_id');
        $table->string('customer_name');
        $table->string('items');
        $table->decimal('total_price');
        $table->string('address');
        $table->timestamps();
    });