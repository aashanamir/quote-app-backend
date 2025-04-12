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
        Schema::create('ads_settings', function (Blueprint $table) {
            $table->id();
            $table->string('admob_app_id')->nullable();
            $table->string('banner_ad_id')->nullable();
            $table->string('interstitial_ad_id')->nullable();
            $table->string('rewarded_ad_id')->nullable();
            $table->boolean('is_enabled_banner')->default(false);
            $table->boolean('is_enabled_interstitial')->default(false);
            $table->boolean('is_enabled_rewarded')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads_settings');
    }
};
