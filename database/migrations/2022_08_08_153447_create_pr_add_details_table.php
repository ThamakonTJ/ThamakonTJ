<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('pr_add_details', function (Blueprint $table) {
            $table->id();
            $table->string('product');
            $table->integer('pcs');
            $table->integer('price_pcs');
            $table->text('note')->nullable();
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
        });
    
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pr_add_details');
    }
};
