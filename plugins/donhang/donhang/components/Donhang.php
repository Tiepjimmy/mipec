<?php namespace Donhang\donhang\Components;

use Cms\Classes\ComponentBase;
use Donhang\Donhang\Models\Donhang as NewDonhang;
use Mipec\Home\Models\Setting as NewSetting;
use Redirect;
use BackendAuth;
use Input;
use Mail;


class Donhang extends  ComponentBase
{
    public $donhang;
    public  function  componentDetails()
    {
        // TODO: Implement componentDetails() method.
        return[
                'name' => 'Donhang',
                'description' => 'Đơn hàng'
        ];
    }
    public  function onRun()
    {
       
    }
    public function onCreateData()
    {
        $order = new NewDonhang();
        $name = $order->name = Input::post('name');
        $email = $order->email = Input::post('email');
        $phone = $order->phone = Input::post('phone');
        $order->content = Input::post('content');
        $alert = [
            'error' => true,
            'mesage' => 'Error: Lỗi hệ thống vui lòng thử lại!',
        ];
        if ($order->save()) {
            $alert['error'] = false;
            $alert['mesage'] = 'Success';
        }
         $setting = NewSetting::find(1);

         $vars = ['name' => $name, 'email' => $email, 'phone'=> $phone];
            Mail::send('mipec', $vars, function($message) use($setting){
                $message->to($setting->email, $setting->email)->cc('tiepmagiao@gmail.com');;
                $message->subject('Khách hàng tên '.Input::post('name').' số điện thoại '.Input::post('phone').' và email '.Input::post('email').' vừa đăng book đơn hàng mới từ Mipec Xuân Thủy');
            });
            Mail::sendTo(Input::post('email'), 'sendmail', $vars, function($message) use($setting) {
                $message->from($setting->email, $setting->email);
            });
        return response()->json($alert);
    }
}