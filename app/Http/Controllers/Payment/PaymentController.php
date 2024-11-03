<?php

namespace App\Http\Controllers\Payment;

use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function initialisePayment(OrderRequest $request) {
        $course = Course::findOrFail($request->course_id);

        // $order = Order::find(1);
        // $this->sendPaymentSuccessEmail($order);

        // Créer une commande
        $order = Order::create([
            'codeCommande' => rand(1300, 4000),
            'phone' => $request->phone,
            'email' => $request->email,
            'fullname' => $request->fullname,
            'amount' => $request->amount,
            'adresse' => $request->adresse,
            'course_id' => $request->course_id,
            'user_id' => Auth::user()->id,
            'status' => "en atttente",
        ]);

        $paymentData = $this->preparePaymentData($request, $course);

        $paymentUrl = $this->executePaymentRequest($paymentData);

        return redirect()->to($paymentUrl);
    }

    protected function preparePaymentData($request, $course) {
        return [
            'merchantId' => "PP-F2197",
            'amount' => $request->amount * 650,
            'description' => $course->title,
            'channel' => trim($request->paymentMethod),
            'countryCurrencyCode' => "952",
            'referenceNumber' => "REF-" . time(),
            'customerEmail' => Auth::user()->email,
            'customerFirstName' => $request->fullname,
            'customerLastname' => $request->fullname,
            'customerPhoneNumber' => $request->phone,
            'notificationURL' => route('success.payment'),
            'returnURL' => route('cancel.payment'),
            'returnContext' => '',
        ];
    }

    protected function executePaymentRequest($data) {
        $dataJson = json_encode($data);
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://www.paiementpro.net/webservice/onlinepayment/init/curl-init.php");
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json; charset=utf-8']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataJson);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($ch);
        curl_close($ch);

        $responseObj = json_decode($response);
        return $responseObj->url ?? null;
    }

    public function sucessPayment() {
        $order = Order::where('user_id', Auth::user()->id)
            ->orderByDesc('created_at')
            ->firstOrFail();

        $order->update(['status' => 'effectue']);

        // Envoyer un e-mail de notification
        $this->sendPaymentSuccessEmail($order);

        return view('payment.sucess');
    }

    protected function sendPaymentSuccessEmail($order) {
        $recipients = [
            'vtp.sas.contact@gmail.com',
            'kgsdev8@gmail.com',
            Auth::user()->email,
        ];

        foreach ($recipients as $recipient) {
            Mail::raw("Le paiement pour la commande {$order->codeCommande} a été effectué avec succès.", function ($message) use ($recipient) {
                $message->to($recipient)
                    ->subject('Notification de Paiement Réussi');
            });
        }
    }

    public function cancelPayment() {
        $order = Order::where('user_id', Auth::user()->id)
            ->orderByDesc('created_at')
            ->firstOrFail();

        $order->update(['status' => 'echec']);
        return view('payment.cancel');
    }
}
