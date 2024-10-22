<?php
namespace App\Models;
use Illuminate\Support\Arr;

class Job{
    public static function all() : array {
        $jobs=[
            ['id'=>1 ,'title'=>'IT Administrator', 'salary'=>'€ 40,000'],
            ['id'=>2 ,'title'=>'NodeJs Developer', 'salary'=>'€ 50,000'],
            ['id'=>3 ,'title'=>'Python Developer', 'salary'=>'€ 50,000'],
            ['id'=>4 ,'title'=>'IT Support Onsite', 'salary'=>'€ 30,000'],
        ];
        return $jobs;
    }

    public static function find(int $id) : array {
        $job=Arr::first(static::all(),fn($job_element) => $job_element['id']==$id);
        if (! $job){
            abort(404);
        }
        return $job;
    }
}