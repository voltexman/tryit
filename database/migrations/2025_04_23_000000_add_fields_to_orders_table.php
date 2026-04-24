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
        Schema::table('orders', function (Blueprint $table) {
            $table->string('address')->nullable()->after('contact');
            $table->string('square_area')->nullable()->after('address');
            $table->boolean('has_elevator')->nullable()->after('square_area');
            $table->boolean('has_water')->nullable()->after('has_elevator');
            $table->boolean('has_parking')->nullable()->after('has_water');
            $table->string('room_count')->nullable()->after('has_parking');
            $table->string('contamination_level')->nullable()->after('room_count');
            $table->boolean('is_urgent')->default(false)->after('contamination_level');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn([
                'address',
                'square_area',
                'has_elevator',
                'has_water',
                'has_parking',
                'room_count',
                'contamination_level',
                'is_urgent',
            ]);
        });
    }
};
