<?php

namespace App\Mail;

use App\Models\Order;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DoneOrderMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $user , $order_id, $type;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id ,$type)
    {

        // $this->user = $user;
        $this->order_id = $id;
        $this->type = $type;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $order_by_id = DB::table('orders')
        //     ->join('users', 'orders.user_id', '=', 'users.id')
        //     ->join('shipping', 'orders.shipping_id', '=', 'shipping.shipping_id')
        //     ->join('order_details', 'orders.id', '=', 'order_details.order_id')
        //     ->select('orders.*', 'users.*', 'shipping.*', 'order_details.*')->first();
        $order_by_id = Order::find($this->order_id);
        $product_order = DB::table('order_details')->where('order_id', $this->order_id)->get();
        // dd($order_by_id);
        $user = Order::find($this->order_id)->user;
        $shipping = Order::find($this->order_id)->shipping;
        $dateNow = Carbon::now('Asia/Ho_Chi_Minh');
        $date = explode('-', $dateNow->format('Y-m-d'));
        if($this->type == 'print.bill'){
            return $this
            ->subject('Hóa đơn đặt hàng')
            ->view('admin.' . $this->type, compact('order_by_id', 'user', 'product_order', 'date', 'shipping'));
        }
        return $this
            ->subject('Hóa đơn xác nhận đặt hàng')
            ->view('admin.'.$this->type,compact('order_by_id', 'user', 'product_order','date', 'shipping'));
            // ->view('admin.print.bill',compact('order_by_id', 'user', 'product_order')); xác nhận đơn hàng
            // ->view('admin.mail.done_order',compact('order_by_id', 'user', 'product_order'));báo giá đơn hàng

    }
}
