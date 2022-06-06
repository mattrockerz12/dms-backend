<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function document() {
        return $this->belongsTo(ProjectDocument::class, 'id', 'document_id');
    }
}
