<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\UploadedFile;




class ProductController extends Controller
{

  private $product_fillable ;

  public function __construct(Product $product)
  {
      $this->product_fillable =$product->getFillable();
  }

  //




  public function store(Request $request){


    $fillable = array_diff($this->product_fillable,['product_image']);
    if($product = Product::create($request->only($fillable))){
        if ($product) {
            $img = $this->UploadOne($request);
            $product->update([
                'product_image'=>$img,
             ]);


        }
    }


    Product::create($request->all());

    return redirect()->back();

  }

  public function UploadOne(Request $request, $folder = 'images',  $disk = 'public')
  {


      $filename = "kbs_img-" . random_int(3000, 10000000);
      $file =  $request->file('product_image');
      return $file->storeAs($folder, $filename . "." . $file->getClientOriginalExtension());
      

  }



  public function show(){
    $products = Product::all();
     return view('admin.pages.all_product', ['products' => $products]);
 }

 public function dashboard(){
    return view('admin.pages.dashboard');
}
  

}
