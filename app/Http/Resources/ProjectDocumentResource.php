<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectDocumentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'document' => $this->document,
            'project_document_detail_count' => $this->project_document_detail_count,
            'latest_upload_by_date_count' => $this->latest_upload_by_date_count,
        ];
    }
}
