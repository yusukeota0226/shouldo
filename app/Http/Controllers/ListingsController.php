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
    
    public function new()
    {
        return view('listing/new');
    }
    
    public function store(Request $request)
    {
        //バリデーションチェック
        $validator = Validator::make($request->all(), ['list_name' => 'required|max:255', ]);
        
        //バリデーションチェックの結果がエラーの場合
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        
        //Listingモデルでリスト新規登録処理
        $listings = new Listing;
        $listing->title = $request->list_name;
        $listing->user_id = Auth::user()->id;
        
        dd($listing);
        $listing->save();
        
        //ルートにリダイレクト
        return redirect('/');
    }
}
