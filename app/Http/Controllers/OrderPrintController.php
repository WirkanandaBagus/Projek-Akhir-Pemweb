<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TableOrderPrint;
use Illuminate\Support\Facades\Auth;

class OrderPrintController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kontak' => 'required|string',
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'keluhan' => 'required|string',
        ]);
       


        $userId = Auth::id();
        $statusDefault = "waiting";

        TableOrderPrint::create([
            'id_user' => $userId,
            'kontak' => $validatedData['kontak'],
            'nama' => $validatedData['nama'],
            'alamat' => $validatedData['alamat'],
            'keluhan' => $validatedData['keluhan'],
            'status' => $statusDefault,
        ]);

        return redirect()->route('dashboard');
    }
}
