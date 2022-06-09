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

    public function get() {
        return DocumentResource::collection(Document::all());
    }

    public function show($id) {
        $document = Document::find($id);

        return new DocumentResource($document);
    }

    public function store(Request $request) {
        $document = Document::create($request->only('name'));

        return response(new DocumentResource($document), Response::HTTP_CREATED);
    }

    public function update(Request $request, $id) {
        $document = Document::find($id);

        $document->update($request->only('name'));

        return response(new DocumentResource($document), Response::HTTP_ACCEPTED);
    }

    public function destroy($id) {
        Document::destroy($id);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
