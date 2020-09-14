<?php

namespace App\Http\Controllers;

use PDF;
use view;
use App\Complaint;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index($id) {
        $complaint=Complaint::find($id);
        $array= array_combine($complaint->bill['items_name'],$complaint->bill['items_price']);
        view()->share('admin.template.home.layout.invoice',compact('complaint','array'));
        $pdf = PDF::loadview('admin.template.home.layout.invoice',compact('complaint','array'));
        return $pdf->stream("invoice.pdf", array("Attachment" => false));
        return $pdf->download('invoice.pdf');
    }
}
