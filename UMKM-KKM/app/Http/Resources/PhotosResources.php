<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PhotosResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

    public $massage;
    public $status;
    public $resource;

    public function __construct($massage, $resource, $status)
    {
        parent::__construct($resource);
        $this->resource = $resource;
        $this->status = $status;
    }

    public function toArray(Request $request): array
    {
        return [
            'massage' => $this->massage,
            'status' => $this->status,
            'data' => $this->resource,
        ];
    }
}
