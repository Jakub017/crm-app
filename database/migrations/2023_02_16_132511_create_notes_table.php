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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('content');
            $table->unsignedBigInteger('user_id'); // Tworzenie kolumny o nazwie user_id
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
            /* 
            Tworzenie klucza obcego z powiązaniem pomiędzy kolumną user_id, a kolumną id w tabeli users.
            onDelete('cascade') sprawia, że po usunięciu użytkownika zostaną usunięte również wszystkie jego powiązane notatki.
            */
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
        Schema::dropIfExists('notes');
    }
};
