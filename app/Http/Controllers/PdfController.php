<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function generatePDF($id)
    {
        
    $user=Product::find($id);
        $data = [
            'user'=>$user,
            
        ]; 
              
        $pdf = Pdf::loadView('admin.pdf.product', $data);
       
        return $pdf->stream('itsolutionstuff.pdf');
    }
}
