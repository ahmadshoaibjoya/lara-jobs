<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;

    public function jobs(){
        // foreignPivotKey: This is the name of the foreign key column in the pivot table (job_tag)
        // that references the primary key of the current model.

        // relatedPivotKey: This is the name of the foreign key column in the pivot table (job_tag) 
        // that references the primary key of the related model.
        return $this->belongsToMany(Job::class,'job_tag',foreignPivotKey: 'tag_id',relatedPivotKey: 'job_listing_id');
    }
}
