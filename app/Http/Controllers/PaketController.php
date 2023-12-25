<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Paket;
use App\Models\PaketCategory;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        // dd(request('search'));
        $title = 'Semua Paket';
        if (request('category')) {
            $category = PaketCategory::firstWhere('slug', request('category'));
            $title = 'Kategori ' . $category->name;
        }

        return view('paket', [
            'title' => $title,
            'active' => 'paket',
            'paketCategories' => PaketCategory::all(),
            'pakets' => Paket::latest()
                ->filter(request(['search', 'category']))
                ->paginate(6)
                ->withQueryString(),
        ]);
    }

    public function show(Paket $paket)
    {
        $arrayIncludes = explode(';', $paket->includes);
        $arrayIncludes = array_map('trim', $arrayIncludes);
        $arrayIncludes = array_filter($arrayIncludes);

        $arrayNotes = explode(';', $paket->notes);
        $arrayNotes = array_map('trim', $arrayNotes);
        $arrayNotes = array_filter($arrayNotes);

        return view('detail-paket', [
            'title' => 'paket',
            'active' => 'pakets',
            'paketCategories' => PaketCategory::all(),
            'includes' => $arrayIncludes,
            'notes' => $arrayNotes,
            'paket' => $paket
        ]);
    }
}
