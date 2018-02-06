<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('address');
            $table->string('email',100)->unique();
            $table->string('password');
            $table->integer('supplier_type')->unsigned();
            $table->string('slogan');
            $table->string('supplier_code');
            $table->string('status',1)->default(0)->comment('0 tidak aktif false 1 aktif true');
            $table->timestamps();
            $table->foreign('supplier_type')->references('id')->on('supplier_type');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplier');
    }
}
