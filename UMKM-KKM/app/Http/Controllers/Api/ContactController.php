<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Http\Resources\ContactResources;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        
        if ($contacts->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Data kontak tidak ditemukan',
                'data' => []
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Data kontak berhasil diambil',
            'data' => ContactResources::collection($contacts)
        ], 200);
    }
}
