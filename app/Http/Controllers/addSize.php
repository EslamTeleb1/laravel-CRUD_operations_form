<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\size;

class addSize extends Controller
{
    
    function addSizeData(Request $request)
    {

       $validator = Validator::make($request->all(), [
        'sizeNum' => 'required|unique:sizes2,Size_ID',
        'sizeName' => 'required|max:255',
    ]);

    if ($validator->passes()) {


      
      $sizeModel = new size;

      $sizeModel->Size_ID = $request->sizeNum;
      $sizeModel->Size_Name = $request->sizeName;
      
      $sizeModel->Unit_ID = $request->sizeType;

      $sizeModel->save();



      return response()->json(['success'=>'Added new size.']);
      
        };
     

        return response()->json(['error' => $validator->errors()]);

    }

   

    function deletSize(Request $request,$num)
    {

     //   $sizeModel = new size;
    
       $rsltDelRec = size::find($num);

        $rsltDelRec->delete();  


    }
   
    function saveData(Request $request)
    {


      //  $sizeModel = new size;
        $rslt= size::find($request->sizeNum);

       $rslt->Size_Name = $request->sizeName;
       $rslt->Unit_ID = $request->sizeType;

        $rslt->save();

        return $request;
    }

    function showData(){


      $sizes =size::all();

       return $sizes;
    }


     
    function search(Request $request,$num)
    {
      $rslt = size::find($num);

      return $rslt;
    }

    //upload image

    public function imageUploadPost(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);
   
        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);
   
    }



}
