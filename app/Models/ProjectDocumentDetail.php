<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectDocumentDetail extends Model
{
    use HasFactory;

    protected $guarded = [];

    /*public function project_document(){
        return $this->belongsTo(ProjectDocument::class, 'project_document_id');
    }*/

    public function user(){
        return $this->belongsTo(User::class);
    }
}
