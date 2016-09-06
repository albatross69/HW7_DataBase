<?php
    require_once '../config.php';

    use Illuminate\Database\Capsule\Manager as Capsule;

    Capsule::schema()->create('customers', function ($table)
    {
        $table->increments('customer_id');
        $table->string('first_name');
        $table->string('last_name');
        $table->string('e-mail');
        $table->string('password');
        $table->integer('age');
    });