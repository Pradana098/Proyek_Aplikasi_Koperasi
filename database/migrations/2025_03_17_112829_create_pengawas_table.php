<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengawas', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 255);
            $table->string('jabatan', 100);
            $table->string('no_hp', 20)->nullable();
            $table->string('email', 255)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->text('alamat')->nullable();
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai')->nullable();
            $table->enum('status', ['aktif', 'nonaktif'])->default('aktif');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengawas');
    }
};
