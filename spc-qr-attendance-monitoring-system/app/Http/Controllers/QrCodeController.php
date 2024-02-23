<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function generateQrCode($data)
    {
        // Sample data for testing
        $sampleData = "student_id:1234|name:John Doe|class:Grade 10|section:A|dob:2005-05-15";

        // Use the provided data or the sample data for testing
        $dataToEncode = $data ?? $sampleData;

        // Generate the QR code
        $qrCode = QrCode::size(300)->generate($dataToEncode);

        // Return the generated QR code as an image response
        return response($qrCode)->header('Content-Type', 'image/png');
    }
}
