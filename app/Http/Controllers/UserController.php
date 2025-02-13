<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Client;
use App\Models\Follow;
use App\Models\Multiimage;
use App\Models\Ourclient;
use App\Models\Ourteam;
use App\Models\Product;
use App\Models\Skill;
use App\Models\Slider;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function home()
    {
        $data = Slider::where('status', 1)->get();
        $team = Team::where('status', 1)->get();
        $skill = Skill::where('status', 1)->get();
        $client = Client::where('status', 1)->get();
        $product = Product::where('status', 1)->get();
        $category = Category::all();
        $about = About::find(1);
        $ourteam = Ourteam::find(1);
        $ourclient = Ourclient::find(1);
        $follow = Follow::find(1);
        $multiimage = Multiimage::all();
        return view('front.home', ['data' => $data, 'team' => $team, 'skill' => $skill, 'client' => $client, 'product' => $product, 'category' => $category, 'about' => $about, 'ourteam' => $ourteam, 'ourclient' => $ourclient, 'follow' => $follow, 'multiimage' => $multiimage]);
    }
    public function category($id)
    {
        $data = Slider::all();
        $team = Team::all();
        $skill = Skill::all();
        $client = Client::all();
        $product = Product::where('category', $id)->get();
        $category = Category::all();
        $about = About::find(1);
        $ourteam = Ourteam::find(1);
        $ourclient = Ourclient::find(1);
        $follow = Follow::find(1);
        $multiimage = Multiimage::all();
        return view('front.home', ['data' => $data, 'team' => $team, 'skill' => $skill, 'client' => $client, 'product' => $product, 'category' => $category, 'about' => $about, 'ourteam' => $ourteam, 'ourclient' => $ourclient, 'follow' => $follow, 'multiimage' => $multiimage]);
    }
    public function about()
    {
        $about = About::find(1);
        $skill = Skill::all();
        $client = Client::where('status', 1)->get();
        $ourteam = Ourteam::find(1);
        $ourclient = Ourclient::find(1);
        $team = Team::where('status', 1)->get();
        return view('front.about', ['skill' => $skill, 'client' => $client, 'team' => $team,'about'=>$about,'ourteam'=>$ourteam,'ourclient' => $ourclient]);
    }
    public function shop()
    {
        $shop = Product::paginate(8);
        $category = Category::all();
        return view('front.shop', ['shop' => $shop, 'category' => $category]);
    }
    public function blog()
    {
        return view('front.blog');
    }
    public function shopdetails($id)
    {
        $product = Product::find($id);
        // dd($product);
        $shop = Product::where('category', $product->category)->get();
        return view('front.shop-details', ['data' => $product, 'shop' => $shop]);
    }
    public function shopcart()
    {
        $customerId = Session::get('customer_id');
        if (isset($customerId)) {
            $data = Cart::where('user_id',$customerId)->get();
            return view('front.shopping-cart',compact('data'));
        } else {
            return redirect()->route('customlogin');
        }
    }
    public function checkout()
    {
        return view('front.checkout');
    }
    public function wisslist()
    {
        return view('front.wisslist');
    }
    public function class()
    {
        return view('front.class');
    }
    public function blogdetails()
    {
        return view('front.blog-detail');
    }
    public function contact()
    {
        return view('front.contact');
    }
}
