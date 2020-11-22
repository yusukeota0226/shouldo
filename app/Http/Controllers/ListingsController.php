<?php

namespace App\Http\Controllers;

use App\Listing;
use Auth;
use Validator;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class ListingsController extends Controller
{
    //コンストラクタ
    public function __construct()
    {
        //ログインしていなかったらログインページに遷移する
        $this->middleware('auth');
    }
    
    public function index()
    {
        $listings = Listing::where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'asc')
            ->get();
            
        //テンプレート「listing/index.blade.php」を表示する
        return view('listing/index', ['listings' => $listings]);
    }
}
