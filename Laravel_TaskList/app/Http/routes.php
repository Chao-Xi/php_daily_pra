<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Illuminate\Http\Request;
use App\Task;

Route::get('/', function () {
	$tasks=Task::orderBy('created_at','asc')->get();
	//dd($tasks);
    //return view('tasks.index')->with($tasks);
    return view('tasks.index',['tasks'=>$tasks,

    	                      ]);
                          });

Route::post('/task', function (Request $request) {
    //return 'works'; 
    //die and dump
    //dd($request); 
    $validator=Validator::make($request->all(),[
          'name'=>'required|max:255',
    	]);
    if($validator->fails())
    {
    	return redirect('/')->withInput()
    	                   ->withErrors($validator);  
    } 

   $task=new Task;
   $task->name=$request->name;
   $task->save();
   //dd($task);
   return redirect('/');
   //go back to the home page
    
    // Task::create(['name'=>$request->name]);

    // return redirect('/');
});




Route::delete('/task/{task}', function (Task $task) {
 //which task you wanna delete 
	 //dd($task);
	$task->delete();
	return redirect('/');

});


