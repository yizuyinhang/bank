<?php

namespace App\Http\Controllers;

use App\Bank;
use Illuminate\Http\Request;

class Index extends Controller
{
    // 首页
    public function index()
    {
        return view('index');
    }

    public function card()
    {
        $data = Bank::all();
        return ['code' => 200,'msg' => '查询成功','data' => $data];
    }
}
