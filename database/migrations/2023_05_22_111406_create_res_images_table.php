<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('res_images', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->integer('product_id')->nullable();
            $table->integer('status_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->text('table_name')->nullable();
            $table->integer('workspace_id')->nullable();
            $table->json('desc')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
            //  $table->foreign('product_id')->references('id')->on('product_sales')->onDelete('cascade');
            //  $table->foreign('status_id')->references('id')->on('res_status')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_images');
    }
};