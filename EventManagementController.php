<?php


namespace App\Http\Controllers\Api;

use App\Http\Requests\PermissionRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class EventManagementController extends BaseController
{
    
    
    public function Createevent (Request $request): JsonResponse
     {
        $users = DB::select('select * from event');
        return view('event',['users'=>$users]);
        
        
     }
     public function show($id) {
        $users = DB::select('select * from event where id = ?',[$id]);
        return view('event',['users'=>$users]);
     }

    
    
     public function ListallEvents(Request $request): JsonResponse
     {
          array('event'=> array('event'));
           
     }

     public function Updateevent(Request $request,$id): JsonResponse
    {
        $name = $request->input('eventname');
        DB::update('update event set eventname = ? where id = ?',[$eventname,$id]);
        echo "Record updated successfully.<br/>";
        echo '<a href = "/edit-records">Click Here</a> to go back.';
       
    }

}

    
    