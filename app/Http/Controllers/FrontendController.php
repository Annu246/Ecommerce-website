<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Category;
use \App\Featured_Products;
use \App\Recent_Products;
use \App\Shopdetail;
use \App\Contact;
use \App\Userlogin;
use Illuminate\support\facades\Hash;

class FrontendController extends Controller
{
    public function homes()
    {
         $categories= Category::all();
        $featured_products=Featured_Products::all();
        $recent_products=Recent_Products::all();

        return view('frontend.home',compact('categories', 'featured_products','recent_products'));
    }

    public function shop()
    {
        // $categories= Category::all();
        // $featured_products=Featured_Products::all();
        $recent_products=Recent_Products::all();

         return view('frontend.shop',compact('recent_products'));
        // return view('frontend.shop');
    }

    public function shopdetail()
    {
        $shopdetail=Shopdetail::all();

        return view('frontend.shopdetail',compact('shopdetail'));

    }
    // public function cart()
    // {
    //     return view('frontend.cart');
    // }

    public function checkout()
    {
        return view('frontend.checkout');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function contactsaveform(Request $request)
    {
        //  dd($request->all());
        $array=[
            'name'=>$request->name,
            'email'=> $request->email,
            'Subject'=>$request->subject,
            'message'=>$request->message,

        ];
        // dd($array);
      Contact::insert($array);

      return redirect()->route('contact');
      }

    public function userlogin()
    {
        return view('frontend.userlogin');
    }
     public function userloginsave(Request $request)
     {
        $user=Userlogin::where('email',$request->email)->first();

        if($user){
            // if(Hash::check($request->password,$user->password)){
                // auth()->login($user);
                // dd($request->all());
                $otp = rand(10,1000000);
            if(Hash::check($request->password, $user->password)){
                Userlogin::where('id',$user->id)->update(['otp'=>$otp ]);
                return redirect()->route('verify');
            }
            return redirect()->back();
        }

        return redirect()->back();



    }

    public function userregister()
    {
        return view('frontend.userregister');
    }

    public function userregistersave(Request $request)
    {
        $validate=[
            'userName'=>'required',
            'email' =>'required',
            'password' =>'required'
            ];

            try{
             $data = [];
        //  dd($request->all());
            $data=[
            'userName'=> $request->username,
            'email'=> $request->email,
            'password'=> bcrypt($request->password)
            ];

           Userlogin::insert($data);
             return redirect()->route('userlogin');
               }

            catch (Exception $exception){
                dd($exception);
             }
      }
      public function verify()
    {
        return view('frontend.verifyotp');
    }
}

