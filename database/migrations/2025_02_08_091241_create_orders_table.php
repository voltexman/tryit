<?php

use App\Enums\OrderStatus;
use App\Enums\ServiceEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('contact');
            $table->text('text')->nullable();
            $table->enum('service', ServiceEnum::all());
            $table->enum('status', OrderStatus::all())->default(OrderStatus::NEW);
            $table->text('comment')->nullable();

            $table->string('address')->nullable();
            $table->string('square_area')->nullable();
            $table->boolean('has_elevator')->nullable();
            $table->boolean('has_water')->nullable();
            $table->boolean('has_parking')->nullable();
            $table->string('room_count')->nullable();
            $table->string('contamination_level')->nullable();
            $table->boolean('is_urgent')->default(false);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
