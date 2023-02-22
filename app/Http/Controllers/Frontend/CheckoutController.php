<?php

namespace App\Http\Controllers\Frontend;

use Pdf;
use Carbon\Carbon;
use App\Models\User;
use NumberFormatter;
use Illuminate\Http\Request;
use App\Models\Client\Client;
use App\Models\Frontend\Order;
use App\Models\Partner\Partner;
use App\Models\Frontend\OrderItem;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    // Checkout Method
    public function CheckoutCreate(){

         if (Auth::guard('client')->check()) {
             if (Cart::total() > 0) {

                $data['carts'] = Cart::content();
                $data['cartQty'] = Cart::count();
                $data['cartsubTotal'] = Cart::subtotal();
                $data['cartTotal'] = Cart::total();
                $data['id'] = Auth::guard('client')->user()->id;
                $data['name'] = Auth::guard('client')->user()->name;
                $data['phone'] = Auth::guard('client')->user()->phone;
                $data['email'] = Auth::guard('client')->user()->email;
                $data['address'] = Auth::guard('client')->user()->address;
                $data['city'] = Auth::guard('client')->user()->city;
                $data['state'] = Auth::guard('client')->user()->state;
                $data['postal'] = Auth::guard('client')->user()->postal;
                $data['country'] = Auth::guard('client')->user()->country;
                $data['user'] = Client::find($data['id']);
                $data['client_type'] = 'client';
                //dd($data['user']);

                //$divisions = ShipDivision::orderBy('division_name','ASC')->get();
                return view('frontend.pages.cart.checkout',$data);

            }else{
                Toastr::warning('Shopping At list One Product');
                return redirect()->route('shop');

            }


        }elseif (Auth::guard('partner')->check()) {
            if (Cart::total() > 0) {

                $data['carts'] = Cart::content();
                $data['cartQty'] = Cart::count();
                $data['cartsubTotal'] = Cart::subtotal();
                $data['cartTotal'] = Cart::total();
                $data['id'] = Auth::guard('partner')->user()->id;
                $data['name'] = Auth::guard('partner')->user()->name;
                $data['phone'] = Auth::guard('partner')->user()->phone_number;
                $data['email'] = Auth::guard('partner')->user()->primary_email_address;
                $data['address'] = Auth::guard('partner')->user()->company_address;
                $data['city'] = Auth::guard('partner')->user()->city;
                $data['state'] = Auth::guard('partner')->user()->state;
                $data['postal'] = Auth::guard('partner')->user()->postal;
                $data['country'] = Auth::guard('partner')->user()->country;
                $data['user'] = Partner::find($data['id']);
                $data['client_type'] = 'client';
                //dd($data['user']);

                //$divisions = ShipDivision::orderBy('division_name','ASC')->get();
                return view('frontend.pages.cart.checkout',$data);

            }else{
                Toastr::warning('Shopping At list One Product');
                return redirect()->route('shop');

            }
        }
        else{
            Toastr::warning('You Need to Login First');


         return redirect()->route('client.login');

        }

    } // end method


    public function CheckoutStore(Request $request){
    	//dd($request->all());
    	$data = array();
    	$data['name'] = $request->name;
    	$data['email'] = $request->email;
    	$data['phone'] = $request->phone;
    	$data['postal'] = $request->postal;
        $data['address'] = $request->address;
        $data['city'] = $request->city;
        $data['country'] = $request->country;
        $data['state'] = $request->state;
        $data['work_order'] = $request->work_order;
    	$data['payment_slip'] = $request->payment_slip;
    	$data['notes'] = $request->notes;
        $data['carts'] = Cart::content();
        //dd($data['carts']);
        $data['client_type'] = $request->client_type;
    	$data['cartTotal'] = Cart::total();
        $formattedNumber = round(Cart::total());
        $formatter = new NumberFormatter('en_US', NumberFormatter::SPELLOUT);

        $data['total_amount'] = $formatter->format($formattedNumber);


        $order_id = Order::insertGetId([
            'client_id'      => $request->client_id,
            'partner_id'     => $request->partner_id,
            'client_type'    => $request->client_type,
            'country'        => $request->country,
            'city'           => $request->city,
            'state'          => $request->state,
            'name'           => $request->name,
            'email'          => $request->email,
            'phone'          => $request->phone,
            'address'        => $request->address,
            'postal'         => $request->postal,
            'notes'          => $request->notes,
            'payment_method' => $request->payment_method,
            'currency'       => 'Usd',
            'amount'         => $data['cartTotal'],
            'invoice_no'     => 'NI-'.mt_rand(00000001,99999999),
            'order_date'     => Carbon::now()->format('d F Y'),
            'order_month'    => Carbon::now()->format('F'),
            'order_year'     => Carbon::now()->format('Y'),
            'status'         => 'unpaid',
            'created_at'     => Carbon::now(),

        ]);





        $invoice = Order::findOrFail($order_id);

        $data['invoice_no'] = $invoice->invoice_no;





        $carts = Cart::content();
        foreach($carts as $cart){

            OrderItem::insert([
                'order_id' => $order_id,
                'product_id' => $cart->id,
                'color' => $cart->options->color,
                'size' => $cart->options->size,
                'qty' => $cart->qty,
                'price' => $cart->price,
                'created_at' =>Carbon::now(),

            ]);

        } // End Foreach


        //Notification::send($user, new OrderComplete($request->name));
    		 //return view('pdf.proform',$data);
        $pdf = PDF::loadView('pdf.proform', $data);
        // $pdf = Pdf::loadView('pdf.proform', $data)->setOption(['dpi' => 120,'isRemoteEnabled' => true]);

        $emailSent = false;
        if ($emailSent) {
            return response()->json(['message' => 'Email has already been sent.']);
        }

        // $email = $data['email'];
        // $subject = 'Proforma Invoice From Ngen It';
        // $message = 'Here is the Proforma Invoice From Ngen It which is generated against your Order.';


        // //
        // // create a new email message
        // $mail = Mail::raw($message, function ($message) use ($email, $subject, $pdf) {
        //     $message->to($email)
        //             ->subject($subject)
        //             ->attachData($pdf->output(), 'proforma_invoice-Ngenit.pdf');
        // });


        // if (!$mail) {
        //     Toastr::success('Proforma Invoice Mail Sent Successfully');
        // } else {
        //     $emailSent = true;
        //     Toastr::error($message, 'Proforma Invoice Mail Sent Failed', ['timeOut' => 30000]);
        // }

        return $pdf->download('Proforma-invoice.pdf');
        // Download the PDF
        // $pdfFileName = 'Proforma-invoice.pdf';
        // $pdfFilePath = storage_path('app/' . $pdfFileName);
        // $pdf->save($pdfFilePath);
        // Cart::destroy();
        // Toastr::success('Your Order is Placed Successfully');
        // return response()->download($pdfFilePath, $pdfFileName)
        //                  ->deleteFileAfterSend(true);

        // Redirect the user to another page after a delay
        // $redirectUrl = route('payment.page');
        // $delaySeconds = 5; // Set a delay of 5 seconds
        // $script = "<script>setTimeout(function() { window.location.href = '$redirectUrl'; }, $delaySeconds * 1000);</script>";
        // return response($script);




    }// end mehtod.

    public function PaymentPage()
    {
        return view('frontend.pages.payment.stripe',$data);
    }

}
