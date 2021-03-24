<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ConsumptionController extends Controller
{
//    商品页面
    public function index()
    {
        return view('consumption/list');
    }
//    支付页面
    public function payment(Request $request)
    {
        $id=$request->get('id');
        $data=config("shang");
        foreach ($data as $k=>$v){
            if ($id==$k){
                $lot=$v;
            }
        }
        return view('consumption/payment',compact('lot'));
    }

    public function add(Request $request)
    {
//        获取用户是否登录
        $name=session('su_user');
        if (!$name) return
        $data=$request->all();
        echo "<form id='alipayment' action='/alipay/pagepay/pagepay.php' method='post' style='display: none'>
    <input id='WIDout_trade_no' name='WIDout_trade_no' value='{{$data["jia"]}}' />
    <input id='WIDsubject' name='WIDsubject' value='品优购' />
    <input id='WIDtotal_amount' name='WIDtotal_amount' value='{$data["jia"]}' />
    <input id='WIDbody' name='WIDbody' value='品优购订单,付款不发货' />
</form><script>document.getElementById('alipayment').submit();</script>";
//        return 11;
//        require_once ("./alipay/config.php");
//        require_once './alipay/pagepay/service/AlipayTradeService.php';
//        $ali=new \AlipayTradeService($config);
//        $result=$ali->check(200);
//        if($result){
//            $order_sn=200;
//            $order=\app\common\model\Order::where('order_sn',$order_sn)->find();
//            //        展示结果
//            return view('paysuccess',['pay_name'=>'支付宝','order_amount'=>$param['total_amount'],'order'=>$order]);
//        }else{
//            return view('payfail',['msg'=>'支付失败']);
//        }
    }
}
