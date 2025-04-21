<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Botman\BotMan\BotMan;
use Botman\Botman\Messages\Incoming\Answer;

class User extends Controller
{
    
    public function addcart($p_id){
        $mid =$p_id;
        $user = DB::table('cart')
        ->where('productid',$mid)
        ->first();

        if(!$user){
            DB::table('cart')->insert([
                'productid'=>$mid,
            ]);
            return redirect()->Back()->with('Sucess','Cart Successfully');
        }
        else{
            return redirect()->Back()->with('Failed','Already in your cart '); 
        }
    }
    public function handle()
    {
       
        $botman = app('botman');
   
        $botman->hears('{message}', function($botman, $message) {
   
            if ($message == 'hi') {
                $this->askName($botman);
            }
            
            else{
               // $botman->reply("Start a conversation by saying hi.");
               $faqData = json_decode(file_get_contents(storage_path('app/faq.json')), true);
            
               // Search for the question in the FAQ data
               foreach ($faqData as $faq) {
                   if (stripos($faq['question'], $message) !== false) {
                       $botman->reply($faq['answer']);
                       return;
                   }
               }
               $botman->reply("Sorry, I couldn't find an answer to your question.");
            }
   
        });
   
        $botman->listen();
    }
    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function(Answer $answer) {
   
            $name = $answer->getText();
   
            $this->say('Nice to meet you '.$name);
        });
    }

    function submitproduct(Request $request){
        $product_name=$request->input('product_name');
        echo $product_name;

        $product_price=$request->input('product_price');
        echo $product_price;

        $product_color=$request->input('product_color');
        echo $product_color;

        $product_qty=$request->input('product_qty');
        echo $product_qty;

        DB::table ('product')->insert([
            'pro_nam'=>$product_name,
            'price'=>$product_price,
            'p_color'=>$product_color,
            'p_qty'=>$product_qty,

        ]
    );
    }

       function pro_submit(Request $request){
        $product_name=$request->input('product_name');
        echo $product_name;

        $product_price=$request->input('product_price');
        echo $product_price;

        $product_color=$request->input('product_color');
        echo $product_color;

        $product_qty=$request->input('product_qty');
        echo $product_qty;

        $product_status=$request->input('product_status');
        echo $product_status;

        $product_added_at=$request->input('product_added_at');
        echo $product_added_at;

        DB::table ('pro_reg')->insert([
            'pro_name'=>$product_name,
            'pro_price'=>$product_price,
            'pro_color'=>$product_color,
            'pro_qty'=>$product_qty,
            'pro_status'=>$product_status,
            'added_at'=>$product_added_at,
        ]
    );
    return redirect()->Back()->with(key: 'Success',value: 'Product added Successfully');
        }

        function menu()
        {

           $menu= DB::table('product')->get();
            return view('menu',compact('menu'));

        }
        function view_cart(){
            $menuitem = DB::table('cart')
                ->join('product', 'cart.productid', '=', 'product.product_id') 
                ->select('cart.*', 'product.pro_nam as product_name', 'product.price as product_price') 
                ->get();
       // echo $menuitem;
            return view('viewcart', compact('menuitem'));
        }
        public function deleteCart($Cartid){
            echo $Cartid;
          $user2=  DB::table('cart')->where('cartid', $Cartid)->delete();
        
            if($user2){
                return redirect()->back()->with('success', 'Item removed');
            }
            else{
                return redirect()->back()->with('success', 'Item not removed.');
            }
        }
        // function plus($Cartid,$qty){
        //     $newqty=
        // }
    }
