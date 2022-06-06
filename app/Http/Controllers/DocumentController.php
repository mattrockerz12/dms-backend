<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Document;
use App\Http\Resources\DocumentResource;

class DocumentController extends Controller
{
    public function index() {
        return Document::withCount('document')->get();
    }

    public function store(Request $request) {
        $document = Document::create($request->only('name', 'slug'));

        return response($document, Response::HTTP_CREATED);
    }
}
