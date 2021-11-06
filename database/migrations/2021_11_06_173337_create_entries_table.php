<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('provider_id')->constrained('providers');
            $table->foreignId('user_id')->constrained('users');
            $table->string('type_voucher', 20); // Tipo comprobante de pago
            $table->string('serie_voucher', 20);
            $table->string('num_voucher', 20);
            $table->datetime('date');
            $table->double('tax', 4, 2);
            $table->double('total_buy', 11, 2);
            $table->boolean('state')->default(true);
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
        Schema::dropIfExists('entries');
    }
}
