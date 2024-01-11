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
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); //phone ?? is it possible? else clear id key
            $table->timestamps();
            $table->string('firstname');
            $table->string('lastname');
            $table->integer('phone_number') ->unique(); //specific format?
            $table->text('company');//optional

            //HAVENT MIGRATED
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
