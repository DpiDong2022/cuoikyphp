<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\InvoiceDetail;
use App\Models\Invoice;


class AppController extends Controller
{
    public function index(){
        $product = Product::all();
        // $category = Category::orderBy('id','ASC')->get() ;
        return view('public.index',compact('product'));
        // $category = Category::orderBy('id','ASC')->get();
        // return view('public.index', ['products' => Product::all(), 'category' => Category::orderBy('name','ASC')->get()]) ;
    }
    public function about(){
        return view('public.default.about');
    }
    public function blog(){
        return view('public.default.about');
    }
    public function contact(){
        return view('public.default.about');
    }
    public function faq(){
        return view('public.default.about');
    }   
    public function checkout(){
        if (!session('user')) {
            return redirect()->route('publicLogin');
        }
    
        
        $latestInvoice = Invoice::where('user_id', session('user')->id)->where('status_id', 5)
                                                                        ->orderBy('id', 'desc')
                                                                        ->first();
    
        if (!$latestInvoice) {
            
            return view('cart.empty');
        } 
        $invoiceDetails = InvoiceDetail::where('invoice_id', $latestInvoice->id)->get();
        $total = $invoiceDetails->sum(function ($invoiceDetail) {
            return $invoiceDetail->varient->product->price * $invoiceDetail->quantity;
        });
       
        return view('public.default.checkout',['invoiceDetails' => $invoiceDetails],['total' => $total]);
    }  
    
    public function sendInvoiceToEmail(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|string|max:255'
            ]);

            $email = $request->email;

            $user = DB::table('users')->where('email', $email)->first();
            if ($user) {
                return redirect()->back()->with('error', "Tài khoản đã tồn tại");
            }

            $this->sendEmail($email);

            return redirect()->route('email.formVerify');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function sendEmail(string $email)
    {
        $token = random_int(10000000, 99999999);
        session()->put('token', $token);
        session()->put('email', $email);
        Mail::to($email)->Send(new SendTokenMail($token));
    }
}
