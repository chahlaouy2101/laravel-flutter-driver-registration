<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('identity_document');
            $table->string('car_license');
            $table->string('car_application');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('documents');
    }
}