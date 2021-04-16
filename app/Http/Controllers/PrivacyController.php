<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use App\Models\Product;

class PrivacyController extends Controller
{
    function show(){
    
        $data = Contact::all();
        return view('list',['Contacts'=>$data]);
     
    }
    function listapi($id=null){
      return $id?Contact::find($id):Contact::all();
  }
    function contact(){
      Contact::all();
  
        return view('contact'); 
    }
function addapi(Request $request){
 $request->validate([
  'firstname'=>'required',
 // 'email' => 'required|unique:contacts,|max:255',
 'email' => "unique:contacts,email",
    'subject'=>'required',
'message'=>'required'
]);

// Validator::make($request->all(), [
//   'firstname'=>'required',
//  'email' => 'required|unique:posts|max:255',
   
//     'subject'=>'required',
// 'message'=>'required'
// ])->validate();
 $request->all();
  $member=new Contact;
  $member->firstname=$request->firstname;
  $member->lastname=$request->lastname;
  $member->email=$request->email;
  $member->subject=$request->subject;
  $member->message=$request->message;
  $result=$member->save();	
if($result){
  return ["$result"=>"success"];
}else{
  return ["$result"=>"failed"];
}
  
}
function updateapi(Request $request){
  $member=Contact::find($request->id);
  $member->firstname=$request->firstname;
  $member->lastname=$request->lastname;
  $member->email=$request->email;
  $member->subject=$request->subject;
  $member->message=$request->message;
  $result=$member->save();	
  if($result){
    return ["$result"=>"success"];
  }else{
    return ["$result"=>"failed"];
  }
}

function Deleteapi($id){
  $member=Contact::find($id);
  $result=$member->delete();
  if($result){
    return ["$result"=>"successfully delete"];
  }else{
    return ["$result"=>"not delete"];
  }

}

    function search($firstname){
return Contact::where("firstname",$firstname)->get();

    }


    function insert(Request $request ){
      echo "<pre>";
    	print_r($request->all());
    	echo "</pre>";
     $created_at	= date('Y-m-d h:i:s');

       $request->validate(['firstname'=>'required',
       'lastname'=>'required',
       'email'=>'required',
       'subject'=>'required',
       'message'=>'required']);
         $member=new Contact;
         $member->firstname=$request->firstname;
         $member->lastname=$request->lastname;
         $member->email=$request->email;
         $member->subject=$request->subject;
         $member->message=$request->message;
         $member->save();	
      //  return redirect('contact');
      return back()->with('added','you havebeen successfully inserted');
     }
  
    function product(){
        return view('product'); 
    }

    function delete($id){
          $data= Contact::find($id);
          $data->delete();
          return redirect('list'); 
         
     }
     function showdata($id){
         
       $data=  Contact::find($id);
       
       return view("edit", $data)->with('data', $data);
     }
     function update(Request $request ){
      echo "<pre>";
    	print_r($request->all());
    	echo "</pre>";
       $updated_at	= date('Y-m-d h:i:s');

        DB::table('contacts')->where('id', $request->id)->update([ 
          
                   'firstname'  			 =>$request->firstname,
                   'lastname'  		     =>$request->lastname,
                   'email'  		       =>$request->email,
                   'subject'		 	      =>$request->subject,
                   'message'             => $request->message,
                   'updated_at'          =>$updated_at,
        ]);	
        return redirect('list');
     }

     function listproduct(){
     
      $data= Product::all();
      return view('listproduct',['Products'=>$data]);
   
  }
     function addproduct(){
      
      $data= Product::all();
      return view('addproduct');
   
  }
  function insertproduct(Request $request){

  $extensions = ['jpeg', 'png', 'jpg'];
   $created_at	= date('Y-m-d h:i:s');
   if($request->hasFile('thumbnail') and in_array($request->thumbnail->extension(), $extensions)){
    $thumbnail = $request->thumbnail;
    $fileName = time().'.'.$thumbnail->getClientOriginalName();
    $thumbnail->move('resources/assets/images/', $fileName);
    $uploadImage = 'resources/assets/images/'.$fileName; 
  } 
  
  if($request->hasFile('image') and in_array($request->image->extension(), $extensions)){
    $image = $request->image;
    $fileName = time().'.'.$image->getClientOriginalName();
    $image->move('resources/assets/images/', $fileName);
    $uploadThumbnail = 'resources/assets/images/'.$fileName; 
  }
     DB::table('products')->insert([
      'title'  			   =>   $request->title,
      'description'  	 =>   $request->description,
      'thumbnail'  		 =>   $uploadImage,    
      'image'		    	 =>   $uploadThumbnail,  
      'playStoreUrl'  	 =>   $request->playStoreUrl, 
      'created_at'     =>  $created_at,
      ]);
  
return back()->with('added','products hasbeen added successfully');
   }
  function deleteproduct($id){
      $data=Product::find($id);
      $data->delete();
      return redirect('listproduct');
     
 }

}
