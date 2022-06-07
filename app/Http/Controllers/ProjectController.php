<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Project;
use App\Models\ProjectDocument;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\ProjectDocumentResource;

class ProjectController extends Controller
{
    public function index() {
        return ProjectResource::collection(Project::all());
    }

    public function show($id) {
        $project = Project::find($id);

        return new ProjectResource($project);
    }

    public function store(Request $request) {
        $project = Project::create($request->only('name'));

        if ($documents = $request->input('documents')) {
            foreach ($documents as $document_id) {
                DB::table('project_documents')->insert([
                    'project_id' => $project->id,
                    'document_id' => $document_id,
                ]);
            }
        }

        return response(new ProjectResource($project), Response::HTTP_CREATED);
    }

    public function update(Request $request, $id) {
        $project = Project::find($id);

        $project->update($request->only('name'));

        DB::table('project_documents')->where('project_id', $project->id)->delete();

        if ($documents = $request->input('documents')) {
            foreach ($documents as $document_id) {
                DB::table('project_documents')->insert([
                    'project_id' => $project->id,
                    'document_id' => $document_id,
                ]);
            }
        }

        return response(new ProjectResource($project), Response::HTTP_ACCEPTED);
    }

    public function permits($id) {
        $cpd = ProjectDocument::where('project_id', $id);
        $project_documents = $cpd->withCount('project_document_detail', 'latest_upload_by_date')->get();

        return ProjectDocumentResource::collection($project_documents);
    }


}
