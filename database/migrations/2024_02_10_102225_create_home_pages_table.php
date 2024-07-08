<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
$table->string('slider_1_image');
            $table->string('slider_1_header');
            $table->string('slider_1_subheader');
            $table->string('slider_1_button_name');

            $table->string('slider_2_image');
            $table->string('slider_2_header');
            $table->string('slider_2_subheader');
            $table->string('slider_2_button_name');

            $table->string('about_image');
            $table->string('about_header');
            $table->string('about_subheader');
            $table->text('about_description');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};
