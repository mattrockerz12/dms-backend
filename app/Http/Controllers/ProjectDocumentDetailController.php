<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectDocumentDetail;
use App\Http\Resources\ProjectDocumentDetailResource;

class ProjectDocumentDetailController extends Controller
{
    public function index() {
        return ProjectDocumentDetailResource::collection(ProjectDocumentDetail::all());
    }
}
