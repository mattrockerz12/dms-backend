<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectDocument extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function compliance_document(){
        return $this->belongsTo(Document::class);
    }

    public function project_document_detail() {
        return $this->hasMany(ProjectDocumentDetail::class, 'id');
    }

    public function latest_upload_by_date(){
        return $this->hasOne(ProjectDocumentDetail::class, 'id')->latest();
    }
}
