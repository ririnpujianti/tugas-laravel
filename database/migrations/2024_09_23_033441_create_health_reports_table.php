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
        // Membuat tabel 'health_reports'
        Schema::create('health_reports', function (Blueprint $table) {
            $table->id(); // Menambahkan kolom 'id' sebagai primary key
            $table->string('patient_name', 100); // Menambahkan kolom 'patient_name' dengan tipe VARCHAR(100)
            $table->integer('age'); // Menambahkan kolom 'age' dengan tipe INT
            $table->date('checkup_date'); // Menambahkan kolom 'checkup_date' dengan tipe DATE
            $table->string('status', 50); // Menambahkan kolom 'status' dengan tipe VARCHAR(50)
            $table->timestamps(); // Menambahkan kolom 'created_at' dan 'updated_at' secara otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Menghapus tabel 'health_reports' jika migrasi dibatalkan
        Schema::dropIfExists('health_reports');
    }
};
