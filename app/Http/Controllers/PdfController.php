<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf; // Mengimpor facade DomPDF untuk membuat PDF
use App\Models\HealthReport; // Mengimpor model HealthReport

class PdfController extends Controller
{
    // Metode untuk menghasilkan dan mengunduh PDF
    public function generatePDF()
    {
        // Mengambil semua data laporan kesehatan dari database
        $healthReports = HealthReport::all();

        // Menyusun data yang akan digunakan dalam tampilan PDF
        $data = [
            'title' => 'Laporan Kesehatan', // Judul laporan
            'date' => date('d-m-Y'), // Tanggal saat laporan dibuat
            'healthReports' => $healthReports, // Data laporan kesehatan
        ];

        // Membuat PDF dengan tampilan 'health_report' dan data yang telah disiapkan
        $pdf = Pdf::loadView('health_report', $data);

        // Mengunduh file PDF dengan nama 'laporan-kesehatan.pdf'
        return $pdf->download('laporan-kesehatan.pdf');
    }

    // Metode untuk menampilkan PDF langsung di browser
    public function streamPDF()
    {
        // Mengambil semua data laporan kesehatan dari database
        $healthReports = HealthReport::all();

        // Menyusun data yang akan digunakan dalam tampilan PDF
        $data = [
            'title' => 'Laporan Kesehatan', // Judul laporan
            'date' => date('d-m-Y'), // Tanggal saat laporan dibuat
            'healthReports' => $healthReports, // Data laporan kesehatan
        ];

        // Membuat PDF dengan tampilan 'health_report' dan data yang telah disiapkan
        $pdf = Pdf::loadView('health_report', $data);

        // Menampilkan PDF langsung di browser dengan nama 'laporan-kesehatan.pdf'
        return $pdf->stream('laporan-kesehatan.pdf');
    }
}
