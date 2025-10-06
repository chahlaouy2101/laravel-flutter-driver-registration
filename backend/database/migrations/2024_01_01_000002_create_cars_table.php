<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('brand');
            $table->string('model');
            $table->year('year');
            $table->string('plate_letter_right');
            $table->string('plate_letter_middle');
            $table->string('plate_letter_left');
            $table->smallInteger('plate_number');
            $table->enum('plate_type', [1, 2, 3]);
            $table->string('sequence_number', 15);
            $table->tinyInteger('seats');
            $table->unsignedBigInteger('car_category_status_id');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cars');
    }
}