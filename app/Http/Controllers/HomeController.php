<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Http\Requests;
use Session;
use App\Models\slider;

class HomeController extends Controller
{

    public function Index(){

        $sliders = slider::where('status',1)
        ->where('activeStatus',1)
        ->orderBy('id','desc')
        ->get();

        foreach($sliders as $key=> $slider){
            // $slider->link last 5 chars is json or not
            if(substr($slider->link, -5) == '.json'){
                $slider->type = '1';
            }else{
                $slider->type = '0';
            }
        }
        
        return view('home.home')
                ->with('sliders',$sliders)
                ->with('title','Home');

    }

    public function ManageIndex(){
        $sliders = slider::where('activeStatus',1)->orderBy('id','desc')->get();

        return view('Manage.manage')
                ->with('sliders',$sliders)
                ->with('title','Manage');

    }

    public function CreateSlide(Request $request){
        $validator = Validator::make($request->all(),
        [
            'link' => 'required',
            'background' => 'required',
            'speed' => 'required',
            'loop' => 'required',
            'autoplay' => 'required',
            'controls' => 'required',
            'hover' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->with([
                'error' => true,
                'message' => 'Required data missing.'
            ]);
        }

        $data = $request->all();
        slider::create($data);

        return redirect()->back()->with([
            'error' => false,
            'message' => 'Created Successfully',
        ]);

    }

    public function DeleteSlider($id){
        $slider = slider::find($id);
        $slider->activeStatus = 0;
        $slider->save();
        return redirect()->back()->with([
            'error' => true,
            'message' => 'Deleted Successfully',
        ]);
    }

    
}
