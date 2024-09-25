<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;

use function Spatie\LaravelPdf\Support\pdf;

class PdfController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return pdf()
            ->view('pdf.order', [])
            ->format('letter')
            ->margins(10, 10, 10, 10)
            ->withBrowsershot(function (Browsershot $browsershot) {
                $browsershot
                    ->setNodeBinary(config('paths.node_binary'))
                    ->setNpmBinary(config('paths.npm_binary'));
            })
            ->name('order.pdf');
    }
}
