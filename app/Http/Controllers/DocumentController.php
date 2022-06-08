<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Document;
use App\Http\Resources\DocumentResource;

class DocumentController extends Controller
{
    public function index() {
        return DocumentResource::collection(Document::withCount('document')->paginate(5));
    }

    public function store(Request $request) {
        $document = Document::create($request->only('name'));

        return response($document, Response::HTTP_CREATED);
    }

    public function destroy($id) {
        Document::destroy($id);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
