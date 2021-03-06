<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Listing extends Model
{
    use SoftDeletes; //SoftDeletesトレイトを使用する
    
     /**
     * 日付へキャストする属性
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    
    //hasMany設定
    public function cards()
    {
        return $this->hasMany('App\Card');
    }
}
