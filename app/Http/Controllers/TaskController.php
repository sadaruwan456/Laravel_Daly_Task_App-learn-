<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function store(Request $request){
        $task = new Task;
$this->validate($request,[
'task'=>'required|max:150|min:5',

]);


        $task->task=$request->task;
        $task->save();  

        $data=Task::all();
        return view('tasks')->with('tasks',$data);
    }

    public function updateTaskCompleted($id){
$task=Task::find($id);
$task->status=1;
$task->save();

$data=Task::all();
return view('tasks')->with('tasks',$data);


    }
    public function updateTasknotCompleted($id){
$task=Task::find($id);
$task->status=0;
$task->save();

$data=Task::all();
return view('tasks')->with('tasks',$data);


    }
    public function deleteData($id){
$task=Task::find($id);

$task->delete();

$data=Task::all();
return view('tasks')->with('tasks',$data);


    }

    public function updatetaskview($id){
        $task=Task::find($id);

        return view('updates')->with('taskdata',$task);
    }

    public function updateDatas(Request $request){

        $id=$request->id;
        $task=$request->task;
        $data=Task::find($id);
        $data->task=$task;
        $data->save();

        $data=Task::all();
return view('tasks')->with('tasks',$data);
    }


}
