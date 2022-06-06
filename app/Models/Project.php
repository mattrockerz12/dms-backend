<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function documents() {
        return $this->belongsToMany(Document::class, 'project_documents');
    }

    public function document() {
        return $this->belongsTo(ProjectDocument::class, 'id', 'project_id');
    }
}
