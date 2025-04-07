<?php

namespace App\Http\Controllers;

use App\Models\data_pks_model;
use Illuminate\Http\Request;
use Mpdf\Mpdf;

class PdfController extends Controller
{
    //
    public function exportPdf()
    {
        $data = data_pks_model::all(); // Ambil data dari database

        // Render HTML view ke dalam string
        $html = view('pdf-template', compact('data'))->render();

        // Buat instance Mpdf
        $mpdf = new Mpdf();

        // Tambahkan HTML ke PDF
        $mpdf->WriteHTML($html);

        // Output file ke browser
        return response($mpdf->Output('data.pdf', 'S'))
            ->header('Content-Type', 'application/pdf');

        // // Simpan file PDF sementara di storage
        // $filePath = storage_path('app/public/data-pks.pdf');
        // $mpdf->Output($filePath, 'F'); // Save as file

        // // Berikan response download otomatis
        // return response()->download($filePath)->deleteFileAfterSend(true);
    }
}