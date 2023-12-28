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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('listings', function (Blueprint $table) {
            $table->ulid('id')->primary();

            $table->bigInteger('user_id');

            $table->string('title');
            $table->text('description');
            $table->string('address_street');
            $table->string('address_city');
            $table->string('address_state');
            $table->string('address_zip');
            // TODO: Add later
            // $table->float('latitude');
            // $table->float('longitude');
            $table->string('location_human');

            $table->integer('price_per_night');
            $table->integer('cleaning_fee')->nullable();
            $table->integer('pet_fee')->nullable();

            $table->time('check_in_time')->default('15:00:00');
            $table->time('check_out_time')->default('11:00:00');

            $table->integer('max_guests')->default(3);
            $table->integer('bedrooms');
            $table->integer('beds');
            $table->float('bathrooms');
            $table->integer('min_required_nights')->default(1);

            $table->integer('has_self_check_in')->default(0);
            $table->integer('has_office')->default(0);
            $table->integer('has_lakeview')->default(0);
            $table->integer('has_kitchen')->default(0);
            $table->integer('has_beach_access')->default(0);
            $table->integer('has_wifi')->default(0);
            $table->integer('has_free_parking')->default(0);
            $table->integer('has_hot_tub')->default(0);
            $table->integer('has_pool')->default(0);
            $table->integer('has_pets_allowed')->default(0);
            $table->integer('has_wheelchair_accessible')->default(0);
            $table->integer('has_smoking_allowed')->default(0);

            $table->timestamps();
        });

        Schema::create('listing_images', function (Blueprint $table) {
            $table->id();

            $table->string('listing_id');

            $table->string('path');
            $table->string('caption')->nullable();

            $table->timestamps();
        });

        Schema::create('listing_rooms', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->integer('king_beds')->nullable();
            $table->integer('queen_beds')->nullable();
            $table->integer('full_beds')->nullable();
            $table->integer('twin_beds')->nullable();
            $table->integer('bunk_beds')->nullable();
            $table->integer('futons')->nullable();
            $table->integer('sofas')->nullable();

            $table->string('listing_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('listings');
        Schema::dropIfExists('listing_images');
        Schema::dropIfExists('listing_rooms');
    }
};
