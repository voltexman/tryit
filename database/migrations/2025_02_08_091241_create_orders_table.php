<?php

use App\Enums\OrderStatus;
use App\Enums\ServiceEnum;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id()->startingValue(10504);
            $table->string('name');
            $table->string('contact');
            $table->text('text')->nullable();
            $table->enum('service', ServiceEnum::all());
            $table->enum('status', OrderStatus::all())->default(OrderStatus::NEW);
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
