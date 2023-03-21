<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\User;
use Illuminate\support\facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.adminlogin');
    }
    public function adminlogin()
    {
        return view('backend.adminlogin');
    }

    public function a_dashboard()
    {
        return view('backend.index');
    }

    public function adminloginsave(Request $request)
     {
        $user=User::where('email',$request->email)->first();

        if($user){
             if(Hash::check($request->password,$user->password)){
                // auth()->login($user);
                // dd($request->all());
                // $otp = rand(10,1000000);
            // if(Hash::check($request->password, $user->password)){
                // Userlogin::where('id',$user->id)->update(['otp'=>$otp ]);
                return redirect()->route('a_dashboard');
            }
            return redirect()->back();
        }

        return redirect()->back();



    }

    public function adminregister()
    {
        return view('backend.adminregister');
    }

    public function adminregistersave(Request $request)
    {
        $validate=[
            'name'=>'required',
            'email' =>'required',
            'password' =>'required'
            ];

            try{
             $data = [];
        //  dd($request->all());
            $data=[
            'name'=> $request->username,
            'email'=> $request->email,
            'password'=> bcrypt($request->password)
            ];

           User::insert($data);
             return redirect()->route('adminlogin');
               }

            catch (Exception $exception){
                dd($exception);
             }
      }

    public function home()
    {
        return view('backend.layouts.home');
    }

    public function productform()
    {
        return view('backend.layouts.product');
    }

    public function productsaveform(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'image'=>'required',

        ]);

        $array=[
            'name'=>$request->name,
            'price'=> $request->price,
            'description'=>$request->description,
              'image'=>$request->image,


        ];
        $image_url = '';
        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $filename=time().rand(10,100000000).$file->getClientOriginalName();
            $path = public_path().'/image';
            $file->move($path,$filename);
            $data['image']= asset("image/".$filename);
        }
           Product::insert($array);

           return redirect()->back();
        // dd($array);

      }

      public function brandform()
       {
        return view('backend.layouts.brand');
      }

       public function categoryshowform()
      {
        return view('backend.layouts.category');
      }

     public function categorysaveform(Request $request)
     {
        //    dd($request->all());
        $request->validate([
            'image'=>'required',

        ]);

        $data=[
            // 'image' =>$request->Category_image,
            'category_name'=>$request->name,
            'No_of_Products'=> $request->product

        ];
        // dd($array);
        $image_url = '';
        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $filename=time().rand(10,100000000).$file->getClientOriginalName();
            $path = public_path().'/image';
            $file->move($path,$filename);
            $data['image']= asset("image/".$filename);
        }
     Category::insert($data);

    return redirect()->back();
    }


    public function orderform()
    {
        return view('backend.layouts.order');
    }

}

