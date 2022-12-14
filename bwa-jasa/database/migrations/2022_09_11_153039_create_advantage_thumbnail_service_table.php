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
        Schema::create('advantage_thumbnail_service', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->nullable()->index('fk_advantage_thumbnail_service_to_service');
            $table->longText('thumbnail')->nullable();

            $table->softDeletes();
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advantage_thumbnail_service');
    }
};
