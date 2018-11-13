<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListKunjin;
use PDF;

class PDFController extends Controller
{
  public function pdf($id)
  {
      $listkunjin = ListKunjin::find($id);
      // return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('reports.invoiceSell')->stream();
      $pdf = PDF::loadView('pdf',['listkunjin' => $listkunjin]);
      return $pdf->download('Detail_Kelompok.pdf');

  }
}
