<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
   
    return view('home');
});


Route::get('/jobs', function (){

    return view('jobs',[
        'jobs'=>Job::all()
    ]);
});



Route::get('/job/{id}', function ($id) {

    $job=Job::find($id);
    return view('job',['job'=>$job]);

});





Route::get('/contact', function () {
    return view('contact');
});


// $jobs=[
//     ['id'=>1 ,'title'=>'IT Administrator', 'salary'=>'€ 40,000'],
//     ['id'=>2 ,'title'=>'NodeJs Developer', 'salary'=>'€ 50,000'],
//     ['id'=>3 ,'title'=>'Python Developer', 'salary'=>'€ 50,000'],
//     ['id'=>4 ,'title'=>'IT Support Onsite', 'salary'=>'€ 30,000'],
// ];

// Route::get('/job/{id}', function ($id) use ($jobs) {

//     /* First method to pass data to view */

//     // foreach($jobs as $j){
//     //     if ($j['id']==$id){
//     //         $job=$j;
//     //     }
//     // }

//     /* Second method to pass data to view */

//     // $job=Arr::first($jobs,function($value,$key) use ($id){
//     //     // Return the first element of $jobs array which match the condition
//     //     return $value['id']==$id;
//     // });
    
//     /* Third method to pass data to view */

//     $job=Arr::first($jobs,fn($job_element) => $job_element['id']==$id);

//     // dd($job);
//     return view('job',['job'=>$job]);
// });
