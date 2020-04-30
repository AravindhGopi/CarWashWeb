<?php

namespace App\Http\Controllers;
use App\Drivers;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\ImageManagerStatic as Image;
use Mapper;
class DriverController extends Controller
{
   public function index(Request $request){
	   
	  $data['title']="Driver Management";
	  $data['menu']="driver_management";
      $data['sub_menu']="driver";
	 if ($request->ajax()) {
            $data = Drivers::latest()->get();
			// print_R($data);
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action',
					'<a href="view_profile?id={{$id}}" data-id="{{$id}}"class="text-primary view_client"><i class="icon-eye"></i></a>&nbsp;&nbsp;'.
					'<a href="edit_profile?id={{$id}}" data-id="{{$id}}"class="list-icons-item text-primary edit_client"><i class="icon-pencil7"></i></a>&nbsp;&nbsp;'.
                    '<a href="delete_profile?id={{$id}}"onclick="return confirm("are you sure")"data-id="{{$id}}" class="list-icons-item text-danger delete_client"><i class="icon-trash"></i></a>'
                )
                ->rawColumns(['action'])
                ->make(true);
        }
	  return view('driver.driverList',$data);
   }
   public function create(){
	    $data['title']="Driver Add";
		 $data['menu']="driver_management";
      $data['sub_menu']="driver";
		 return view('driver.add',$data);
   }
   public function store(Request $req){
	    $validatedData = $req->validate([
        'driver_name' => 'required',
        'dob' => 'required',
        'age' => 'required',
        'mobile' => 'required',
        'other_mobile' => 'required',
        'licence_type' => 'required',
        'licence_no' => 'required',
        'licence_exp_date' => 'required',
        'year_of_exp' => 'required',
        'address' => 'required',
        'adhar_no' => 'required',
        'adhar_front_photo' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'adhar_back_photo' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'vehicle_type' => 'required',
        'vehicle_no' => 'required',
        'vehicle_photo' => 'required',
        'insurance_no' => 'required',
        'rc_no' => 'required',
        'insurance_exp_date' => 'required',
        'rc_exp_date' => 'required',
    ]);
	    if (isset($req->adhar_front_photo)) {
              $adharimagefront= "/images/adharfront/".time().'_'.$req->driver_name.'.'.$req->adhar_front_photo->extension();
			$req->adhar_front_photo->move(public_path('images/adharfront/'), $adharimagefront);	  
            }else{
				 $adharimagefront="";
			}
			   if (isset($req->adhar_back_photo)) {
              $adharimageback= "/images/adharback/".time().'_'.$req->driver_name.'.'.$req->adhar_back_photo->extension();
			$req->adhar_back_photo->move(public_path('images/adharback/'), $adharimagefront);	  
            }else{
				$adharimageback="";
			} 
			if (isset($req->vehicle_photo)) {
              $vehiclephoto= "/images/vehicle/".time().'_'.$req->driver_name.'.'.$req->vehicle_photo->extension();
			$req->vehicle_photo->move(public_path('images/vehicle/'), $adharimagefront);	  
            }else{
				$vehiclephoto="";
			}
					 
			$drivers=new Drivers;
			$drivers->name=$req->driver_name;
			$drivers->selfie_image=$req->driver_name;
			$drivers->dob=$req->dob;
			$drivers->age=$req->age;
			$drivers->mobile=$req->mobile;
			$drivers->other_mobile=$req->other_mobile;
			$drivers->licence_type=$req->licence_type;
			$drivers->licence_num=$req->licence_no;
			$drivers->licence_expiry_date=$req->licence_exp_date;
			$drivers->year_of_experience=$req->year_of_exp;
			$drivers->address=$req->address;
			$drivers->adharcard_num=$req->adhar_no;
			$drivers->adharcard_front_copy=$adharimagefront;
			$drivers->adharcard_back_copy=$adharimageback;
			$drivers->vehicle_type=$req->vehicle_type;
			$drivers->vehicle_num=$req->vehicle_no;
			$drivers->vehicle_photo=$vehiclephoto;
			$drivers->vehicle_insurance_num=$req->insurance_no;
			$drivers->vehicle_insurance_exp_date=$req->insurance_exp_date;
			$drivers->vehicle_insurance_exp_date=$req->insurance_exp_date;
			$drivers->vehicle_rc_num=$req->rc_no;
			$drivers->vehicle_rc_exp_date=$req->rc_exp_date;
			$drivers->status=0;
			if($drivers->save()){
				 Alert::success('Driver Added Successfully','Message');
			 return back();
			}
   }
   public function view_profile(Request $request)
	{	
		$data['title']="Driver Profile";
        $data['menu']="driver_management";
        $data['sub_menu']="driver";
        $id = $request->query('id');      
        $data['driverinfo']= Drivers::find($id);    
  
		return view('driver.view_profile',$data);
    }
	public function edit_profile(Request $request){
		$data['title']="Edit Profile ";
        $data['menu']="driver_management";
      $data['sub_menu']="driver";
		  $id = $request->query('id');      
        $data['driverinfo']= Drivers::find($id);    
  
		return view('driver.edit_profile',$data);
	}
	public function update_profile(Request $req){
	 $validatedData = $req->validate([
        'driver_name' => 'required',
        'dob' => 'required',
        'age' => 'required',
        'mobile' => 'required',
        'other_mobile' => 'required',
        'licence_type' => 'required',
        'licence_no' => 'required',
        'licence_exp_date' => 'required',
        'year_of_exp' => 'required',
        'address' => 'required',
        'adhar_no' => 'required',       
        'vehicle_type' => 'required',
        'vehicle_num' => 'required',        
        'insurance_no' => 'required',
        'rc_no' => 'required',
        'insurance_exp_date' => 'required',
        'rc_exp_date' => 'required',
    ]);
	
	    if (isset($req->adhar_front_photo)) {
              $adharimagefront= "/images/adharfront/".time().'_'.$req->driver_name.'.'.$req->adhar_front_photo->extension();
			$req->adhar_front_photo->move(public_path('images/adharfront/'), $adharimagefront);	  
            }else{
				 $adharimagefront=$req->past_frontimage;
			}
			   if (isset($req->adhar_back_photo)) {
              $adharimageback= "/images/adharback/".time().'_'.$req->driver_name.'.'.$req->adhar_back_photo->extension();
			$req->adhar_back_photo->move(public_path('images/adharback/'), $adharimagefront);	  
            }else{
				$adharimageback=$req->past_backimage;
			} 
			if (isset($req->vehicle_photo)) {
              $vehiclephoto= "/images/vehicle/".time().'_'.$req->driver_name.'.'.$req->vehicle_photo->extension();
			$req->vehicle_photo->move(public_path('images/vehicle/'), $adharimagefront);	  
            }else{
				$vehiclephoto=$req->past_vehicle_photo;
			}
					 
			$updatedata=array(
			"name"=>$req->driver_name,
			"selfie_image"=>$req->driver_name,
			"dob"=>$req->dob,
			"age"=>$req->age,
			"mobile"=>$req->mobile,
			"other_mobile"=>$req->other_mobile,
			"licence_type"=>$req->licence_type,
			"licence_num"=>$req->licence_no,
			"licence_expiry_date"=>$req->licence_exp_date,
			"year_of_experience"=>$req->year_of_exp,
			"address"=>$req->address,
			"adharcard_num"=>$req->adhar_no,
			"adharcard_front_copy"=>$adharimagefront,
			"adharcard_back_copy"=>$adharimageback,
			"vehicle_type"=>$req->vehicle_type,
			"vehicle_num"=>$req->vehicle_num,
			"vehicle_photo"=>$vehiclephoto,
			"vehicle_insurance_num"=>$req->insurance_no,
			"vehicle_insurance_exp_date"=>$req->insurance_exp_date,
			"vehicle_rc_num"=>$req->rc_no,
			"vehicle_rc_exp_date"=>$req->rc_exp_date
			);
			 DB::table('drivers')->where('id', $req->driver_id)->update($updatedata);
			  Alert::success('Driver Details Updated Successfully','Message');
			  return back();
	}
	public function delete_profile(Request $request)
	{
		try{
		$id = $request->query('id');
         DB::table('drivers')->where('id', '=', $request->query('id'))->delete();
        Alert::info('Driver Deleted Successfully','Message');
		return back()->with('success', 'Driver Deleted Successfully');
		} 
		catch (Exception $e) {
            Log::debug($e->getMessage());
            DB::rollBack();
            // dd($request->all());
			Alert::warning('Driver Not Deleted.Try again!','Message');
            return back();
        }
    }
	public function track_drivers(){
		$data['title']="Track Profile ";
        $data['menu']="driver_management";
      $data['sub_menu']="driver_track";
	  
	  $data['drivers'] = Drivers::latest()->get(['name', 'id','lat','lon']);
		 // print_r($data['drivers']);
	 $markers = array( 
		// array( 
        // "lat" => 11.020983, 
        // "lon" => 76.966331, 
    // ),           
    // array(         
        // "lat" => 11.4131, 
        // "lon" => 76.6960,       
    // ), 
    array( 
        "lat" => 9.9252, 
        "lon" => 78.1198, 
    ), 
); 
foreach ($markers as $m){
	Mapper::map($m['lat'], $m['lon']);
}
	
	  return view('driver.track-drivers',$data);
	}
	public function get_location(Request $request){
		
		if($request->selected_option=="all"){
			// $data['drivers'] =Drivers::get(['name', 'id']);
			$data= Drivers::latest()->get(['name','lat','lon']);
		}else{
			$data=Drivers::where('id',$request->selected_option)->get(['name','lat','lon']);
		}
		// $data=array(
		// "lat"=>18.2891,
		// "lon"=>12.223223
		// );
		return json_encode($data);
	}
    public function uploadImages($file, $newName)
    {	
	// echo "hai";
        // $folder = "public/images/";
        // if ($file != null) {
            // $newFileName = $adharimagefront= time().$newName.$file->extension();
			// $file->move(public_path('images'), $adharimagefront);
        // } else {
            // $newFileName = "";
        // }
        // return "app/" . $folder . "/" . $newFileName;
    }
}
