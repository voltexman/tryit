<?php

use App\Enums\FeedbackTopicEnum;
use App\Enums\ServiceEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->enum('topic', FeedbackTopicEnum::all());
            $table->enum('service', ServiceEnum::all())->nullable();
            $table->string('name')->nullable();
            $table->string('contact')->nullable();
            $table->text('text');
            $table->unsignedTinyInteger('rating')->nullable();
            $table->boolean('is_visible_on_homepage')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
