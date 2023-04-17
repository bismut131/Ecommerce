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
        Schema::create('product_attribute_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->decimal('price');
            $table->string('sku')->index();
            $table->string('series');
            $table->string('release_data');
            $table->string('weight');
            $table->string('sim_type');
            $table->decimal('screen_size');
            $table->string('operating_system');
            $table->string('internal_storage');
            $table->string('ram');
            $table->string('additional_storage');
            $table->decimal('main_camera');
            $table->decimal('front_camera');
            $table->string('resolution');
            $table->string('color');
            $table->string('video_card_model');
            $table->string('hard_disk_type');
            $table->integer('hard_disk_size');
            $table->string('processor_type');
            $table->string('core_frequency');
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
        Schema::dropIfExists('product_attribute_values');
    }
};
