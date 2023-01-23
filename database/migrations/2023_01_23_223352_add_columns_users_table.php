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
        Schema::table('users', function (Blueprint $table) {
            $table->string("number_phone");
            $table->string('user_name')->unique();
            $table->enum('type_pix', ["CPF/CNPJ", "E-MAIL", "CELULAR", "ALEATÓRIA"]);
            $table->string("key_pix");
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn("number_phone");
            $table->dropColumn('user_name');
            $table->dropColumn('type_pix');
            $table->dropColumn("key_pix");
            $table->dropSoftDeletes();
        });
    }
};
