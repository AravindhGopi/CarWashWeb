<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
class UserController extends Controller
{
   public function index(Request $request)

    {
		$data['title']="User Management";
        $data['menu']="user_management";
        $data['sub_menu']="users";
        if ($request->ajax()) {
			// echo "hai"; 
            $data = User::latest()->get();
			// var_dump($data);
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action',
					'<a href="view_user?id={{$id}}" data-id="{{$id}}"class="text-primary view_client"><i class="icon-eye"></i></a>&nbsp;&nbsp;'.
					'<a href="edit_user?id={{$id}}" data-id="{{$id}}"class="list-icons-item text-primary edit_client"><i class="icon-pencil7"></i></a>&nbsp;&nbsp;'.
                    '<a href="delete_user?id={{$id}}"onclick="return confirm("are you sure")"data-id="{{$id}}" class="list-icons-item text-danger delete_client"><i class="icon-trash"></i></a>'
                )
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('users.users_view',$data);
    }
	public function view_profile(Request $request)
	{
       $data['title']="User Management";
        $data['menu']="user_management";
        $data['sub_menu']="users";
        $id = $request->query('id');      
        $data['clients']= User::find($id);    
       
		//$data['client'] =  DB::table('users')->where('id', $id)->get();
		return view('users/view_profile',$data);
    }
	public function edit_profile(Request $request)
	{
		$data['title']="User Management";
        $data['menu']="user_management";
        $data['sub_menu']="users";
        $id = $request->query('id');
        $data['user']= User::find($id);
       
		
		return view('users/edit_profile',$data);
	} 
	public function update_profile(Request $request){
		try{
            
        $id= $request->user_id;
        $updatedata=array(
            "first_name"=>$request->user_name,
            "email"=>$request->user_email,
            "mobile"=>$request->user_phone_no
            );
            DB::table('users')->where('id', $request->user_id)->update($updatedata);
       Alert::success('User Updated Successfully','Message');
		 return back();
		} 
		catch (Exception $e) {
            Log::debug($e->getMessage());
            DB::rollBack();
           Alert::success('User Update Failed!','Message');
            return back();
        }
	}
	public function delete_profile(Request $request)
	{
		try{
		$id = $request->query('id');
         DB::table('users')->where('id', '=', $request->query('id'))->delete();
      		 Alert::success('User Deleted Successfully!','Message');
		return back();
		} 
		catch (Exception $e) {
            Log::debug($e->getMessage());
            DB::rollBack();
            Alert::success('User Not Deleted.Try again!','Message');
            return back();
        }
    }
	public function set_user_status(Request $request){
	// $data=array(
	// "id"=>$request->userid,
	// "status"=>$request->status
	// );	
	 // dd($data);
	$id=$request->userid;
	$status['users']=$request->status;
	 $result=DB::table('users')->where('id', $id)->update(['status' => $request->status]);
	 if($result){
		  $data=array("message"=>"success","status"=>$request->status);
		  echo json_encode($data);
	 }
	}
}
