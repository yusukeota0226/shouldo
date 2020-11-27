<?php

namespace App\Http\Controllers;

use Auth;
use App\Cards;
use App\Listing;
use Validator;

use Illuminate\Http\Request;

class CardsController extends Controller
{
    //コンストラクタ
    public function __construct()
    {
        //ログインしていなかったらログインページに遷移する
        $this->middleware('auth');
    }
    
    public function new($listing_id)
    {
        //テンプレート「card/new.blade.php」を表示する
        return view('card/new', ['listing_id' => $listing_id]);
    }
}
