<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model {

    use HasFactory;
    // The table hat unique name, so we define it explicitly
    protected $table="job_listings";

    /* 
    Here we specify the columns title and salary to be mass assignable.
     Mass assignment allows you to insert or update multiple fields at once using arrays, 
     rather than setting each attribute individually.
    */
    protected $fillable=['title','salary'];

    public function employer(){
        // $emp=new Employer();
        return $this->belongsTo(Employer::class);
    }

    public function tags(){
        // foreignPivotKey: This is the name of the foreign key column in the pivot table (job_tag)
        // that references the primary key of the current model.

        // relatedPivotKey: This is the name of the foreign key column in the pivot table (job_tag) 
        // that references the primary key of the related model.
        return $this->belongsToMany(Tag::class, 'job_tag', foreignPivotKey: 'job_listing_id', relatedPivotKey: 'tag_id');
    }

}