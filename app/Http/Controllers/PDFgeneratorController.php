<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use NahidulHasan\Html2pdf\Facades\Pdf;

class PDFgeneratorController extends Controller
{
    public function __invoke()
    {
        
        $pdf = Pdf::generatePdf('home');

        $name = 'resume.pdf';
    
        return Pdf::download(view('home'));
    }
}
