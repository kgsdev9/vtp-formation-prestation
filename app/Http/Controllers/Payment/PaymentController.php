<?php

namespace App\Http\Controllers\Payment;

use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{

public function __construct() {
    $this->middleware('auth');
}

 public function initialisePayment(OrderRequest $request)  {


    $course = Course::find($request->course_id);
    $commande =  Order::create([
         'codeCommande'=>rand(1300, 4000),
         'phone'=>$request->phone,
         'email'=>$request->email,
         'fullname'=>$request->fullname,
         'amount'=>$request->amount,
         'adresse'=>$request->adresse,
         'course_id'=> $request->course_id,
         'user_id'=>Auth::user()->id,
         'status'=> "en atttente",
     ]);
         $data = array(
             'merchantId' => "PP-F2197",
             'amount' => $request->amount * 650,
             'description' => $course->title,
             'channel' =>trim($request->paymentMethod),
             'countryCurrencyCode' => "952",
             'referenceNumber' => "REF-".time(),
             'customerEmail' => Auth::user()->email,
             'customerFirstName' => $request->fullname,
             'customerLastname' => $request->fullname,
             'customerPhoneNumber' => $request->phone,
             'notificationURL' => route('success.payment'),
             'returnURL' => route('cancel.payment'),
             'returnContext' => '',
         );

         $data = json_encode($data);
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "https://www.paiementpro.net/webservice/onlinepayment/init/curl-init.php");
         curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8'));
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
         curl_setopt($ch, CURLOPT_HEADER, FALSE);
         curl_setopt($ch, CURLOPT_POST, TRUE);
         curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
         $response = curl_exec($ch);
         $obj = json_decode($response);
         $urlPayement = $obj->url ;
         return redirect()->to($urlPayement);
         // curl_close($ch);

     }


     public function sucessPayment() {

        $order = Order::where('user_id', Auth::user()->id)
        ->orderByDesc('created_at')
        ->first();
        $order->update([
        'status' =>'effectue'
        ]);
        return view('payment.sucess');
     }

     public function cancelPayment() {
         $order = Order::where('user_id', Auth::user()->id)
        ->orderByDesc('created_at')
        ->first();
        $order->update([
          'status' =>'echec'
        ]);
        return view('payment.cancel');
     }
}
