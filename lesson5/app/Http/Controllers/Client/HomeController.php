<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Mail;

class HomeController extends Controller
{
    public function index(Request $rq){

      $products = Product::where('product_name', 'like', "%$rq->keyword%")->orderBy('id', 'desc')->paginate(20);
      $keyword = $rq->keyword;

      $products->withPath("?keyword=$rq->keyword");
      return view('product.list', compact('products', 'keyword'));
   	}

    public function add(){
      $model = new Product();
      return view('product.form', compact('model'));
    }
    public function update($id){
      $model = Product::find($id);
      if($model == null){
        return view('not-found');
      }
      return view('product.form', compact('model'));
    }

    public function save(Request $rq){
      if($rq->id != ""){
        $model = Product::find($rq->id);
      }else{
        $model = new Product();
      }

      $model->fill($rq->all());
      $model->save();
      return redirect()->route('homepage');
    }

   	public function remove($id){
   		$product = Product::find($id);
      if($product != null){
        $product->delete();
      }
      return redirect()->back();
   	}

    public function sendMail($msg){
      Mail::send('emails.welcome', compact('msg'), function ($message) {

          $message->from('thienth32@gmail.com', 'Learning Laravel');

          $message->to([
            'thienth@fpt.edu.vn', 
            'hieuvmph04812@fpt.edu.vn'
          ])->subject('Learning Laravel test email');

      });

      return "Your email has been sent successfully";
    }
}
