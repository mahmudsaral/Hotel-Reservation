<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Review;
use App\Models\Category;
use App\Models\Hotel;
use App\Models\Image;
use App\Models\Message;
use App\Models\Setting;
use Faq;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public static function countreview($id)
    {
        return \App\Models\Review::where('hotel_id',$id)->count();
    }
    public static function categoryList()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    public static function getSetting()
    {
        return Setting::first();
    }

    public function index()
    {
        $setting=Setting::first();
        $slider=Hotel::select('title','image','country','id','slug')->limit(4)->get();
        $recommended_hotels  = Hotel::select('title','image','country','id','slug','star','city')->limit(7)->inRandomOrder()->get();
      /*  print_r($last);
        exit();*/
        $data= [
            'setting' => $setting,
            'slider' => $slider,
            'recommended_hotels' => $recommended_hotels,
            'page'  =>'home'
        ];
        return view('home.index',$data);
    }

    public function aboutus()
    {
        $setting=Setting::first();
        return view('home.about',['setting' => $setting]);
    }
    public function faq()
    {
        $datalist = \App\Models\Faq::all()->sortBy('position');
        return view('home.faq',['datalist' => $datalist]);
    }

    public function references()
    {
        $setting=Setting::first();
        return view('home.references',['setting' => $setting]);
    }
    public function hotel($id,$slug)
    {
        $data = Hotel::find($id);
        $datalist = Image::where('hotel_id',$id)->get();
        $reviews = \App\Models\Review::where('hotel_id',$id)->get();
        return view('home.hotel_detail',['data'=> $data,'datalist'=> $datalist,'reviews'=> $reviews]);

    }
    public function hoteldetail($id)
    {
        echo"View the hotel <br>";
        $data = Hotel::find($id);
        print_r($data);
        exit();

    }
    public function gethotel(Request $request)
    {
       /* $search=$request->input('search');
        $count = Hotel::where('title','like','%'.$search.'%')->get()->count();*/
        $data = Hotel::where('title',$request->input('search'))->first();
        return redirect()->route('hotel',['id'=>$data->id,'slug'=>$data->slug]);

    }

    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();
        return redirect()->route('contact')->with('success','Mesajınız kaydedilmiştir.');
    }

    public function contact()
    {
        $setting=Setting::first();
        return view('home.contact',['setting' => $setting]);
    }



    public function test($id,$name)
    {
        return view('home.test',['id'=>$id,'name'=>$name]);
        /*
        echo "Number".$id;
        for ($i=1;$i<=$id;$i++)
        {
            echo "<br> $i -- $name";
        }*/
    }
    public function login()
    {
        return view('admin.login');
    }
    public function logincheck(Request $request)
    {
        if($request->isMethod('post'))
        {
            $credentials = $request->only('email','password');
            if(Auth::attempt($credentials))
            {
                $request->session()->regenerate();
                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email'=>'The Provided credentials do not ']);
        }
        else
        {
            return view('admin.login');
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }


}
