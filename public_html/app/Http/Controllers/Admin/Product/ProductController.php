<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Image;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $product = DB::table('products')
            ->join('categories','products.category_id','categories.id')
            ->leftJoin('subcategories','products.subcategory_id','subcategories.id')
            ->select('products.*','categories.category_name','subcategories.subcategory_name')
            ->get();

        return view('admin.product.index',compact('product'));
    }

    public function create(){

        $category = DB::table('categories')->get();
        return view('admin.product.create',compact('category'));

    }

    public function GetSubCat($category_id){
        $cat = DB::table('subcategories')->where('category_id',$category_id)->get();
        return json_encode($cat);
    }

    public function store(Request $request){

        $validateData = $request->validate([
            'product_name' => 'required|unique:products|max:255',
            'product_code' => 'unique:products|max:20',
            'product_quantity' => 'required',
            'category_id' => 'required',
            'selling_price' => 'required',
            'product_desc' => 'required|max:16777215',
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'
        ]);

        $data = array();
        $data['product_name'] = $request->product_name;
        $p_code= Str::random(5);
        $data['product_code'] = strtoupper($p_code);
        $data['product_quantity'] = $request->product_quantity;
        $data['category_id'] = $request->category_id;
        $data['subcategory_id'] = $request->subcategory_id;
        $data['selling_price'] = $request->selling_price;
        $data['discount_price'] = $request->discount_price;
        $data['product_color'] = $request->product_color;
        $data['product_size'] = $request->product_size;
        $data['product_material'] = $request->product_material;
        $data['product_weight'] = $request->product_weight;
        $data['product_dimension'] = $request->product_dimension;
        $data['product_diameter'] = $request->product_diameter;
        $data['product_desc'] = $request->product_desc;
        $data['video_link'] = $request->video_link;
        $data['audio_link'] = $request->audio_link;
        $data['best_selling'] = $request->best_selling;
        $data['new_arrival'] = $request->new_arrival;
        $data['deal_week'] = $request->deal_week;
        $data['status'] = 1;

        if($request->hasfile('filename'))
        {
            foreach($request->file('filename') as $image)
            {
                $name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                \Intervention\Image\Facades\Image::make($image)->resize(600,600)->save('public/media/product/'.$name);
                $datas[] = $name;
            }
        }
        $data['filename']=json_encode($datas);

        $product = DB::table('products')->insert($data);

        $notification=array(
            'messege'=>'Product Added Successfully',
            'alert-type'=>'success'
        );
        return Redirect()->route('all.product')->with($notification);

    }

    public function inactive($id){
        DB::table('products')->where('id',$id)->update(['status'=>0]);
        $notification=array(
            'messege'=>'Product Deactivated !',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function active($id){
        DB::table('products')->where('id',$id)->update(['status'=>1]);
        $notification=array(
            'messege'=>'Product Activated !',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function DeleteProduct($id){

        $product = DB::table('products')->where('id',$id)->first();
        DB::table('products')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Product Successfully Deleted',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);

    }

    public function ViewProduct($id){

        $product = DB::table('products')
            ->join('categories','products.category_id','categories.id')
            ->leftJoin('subcategories','products.subcategory_id','subcategories.id')
            ->select('products.*','categories.category_name','subcategories.subcategory_name')
            ->where('products.id',$id)
            ->first();

        return view('admin.product.show',compact('product'));

    }

    public function EditProduct($id){
        $product = DB::table('products')->where('id',$id)->first();
        $category = DB::table('categories')->get();
        $subcategory = DB::table('subcategories')->get();
        return view('admin.product.edit',compact('product','category','subcategory'));
    }

    public function UpdateProductWithoutPhoto(Request $request,$id){

        $product = DB::table('products')->where('id',$id)->first();

        $validateData = $request->validate([
            'product_name' => 'required|max:255',
            'product_code' => 'unique:products|max:20',
            'product_quantity' => 'required',
            'category_id' => 'required',
            'selling_price' => 'required',
            'product_desc' => 'required|max:16777215',
        ]);

        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_code'] = $product->product_code;
        $data['product_quantity'] = $request->product_quantity;
        $data['category_id'] = $request->category_id;
        $data['subcategory_id'] = $request->subcategory_id;
        $data['selling_price'] = $request->selling_price;
        $data['discount_price'] = $request->discount_price;
        $data['product_color'] = $request->product_color;
        $data['product_size'] = $request->product_size;
        $data['product_material'] = $request->product_material;
        $data['product_weight'] = $request->product_weight;
        $data['product_dimension'] = $request->product_dimension;
        $data['product_diameter'] = $request->product_diameter;
        $data['product_desc'] = $request->product_desc;
        $data['video_link'] = $request->video_link;
        $data['audio_link'] = $request->audio_link;
        $data['best_selling'] = $request->best_selling;
        $data['new_arrival'] = $request->new_arrival;
        $data['deal_week'] = $request->deal_week;

        $update = DB::table('products')->where('id',$id)->update($data);
        if ($update) {
            $notification=array(
                'messege'=>'Product Successfully Updated',
                'alert-type'=>'success'
            );
            return Redirect()->route('all.product')->with($notification);
        }else{
            $notification=array(
                'messege'=>'Nothing To Update',
                'alert-type'=>'success'
            );
            return Redirect()->route('all.product')->with($notification);

        }

    }

    public function UpdateProductPhoto(Request $request,$id){

        $product = DB::table('products')->where('id',$id)->first();

        $image = $request->file('filename');
        $new_image = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        \Intervention\Image\Facades\Image::make($image)->resize(600,600)->save('public/media/product/'.$new_image);
        $image_list = json_decode($product->filename);
        array_push($image_list,$new_image);
        $new_images = json_encode($image_list);
        DB::table('products')->where('id',$id)->update(['filename'=>$new_images]);
        $notification=array(
            'messege'=>'New Image Added Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function deleteImage($id,$image_name){
        $product = DB::table('products')->where('id',$id)->first();
        $image = $image_name;
        $image_list = json_decode($product->filename);
        if (($key = array_search($image, $image_list)) !== false) {
            unset($image_list[$key]);
            $new_images = json_encode($image_list);
            unlink( 'public/media/product/'.$image);
            DB::table('products')->where('id',$id)->update(['filename'=>$new_images]);
        }
        $notification=array(
            'messege'=>'Image Deleted Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);

    }

    public function offers(){
        $deal_of_the_week = DB::table('products')->where('deal_week',1)->get();
        $best_selling = DB::table('products')->where('best_selling',1)->get();
        $new_arrivals = DB::table('products')->where('new_arrival',1)->get();
        $products = DB::table('products')->get();
        return view('admin.offer.offer')->with(compact('deal_of_the_week','best_selling','new_arrivals','products'));
    }


    public function addDealOfTheWeek(Request $request){
        $id = $request->product_id;
        $update = DB::table('products')->where('id',$id)->update(['deal_week'=>1]);
        $notification=array(
            'messege'=>'Product Added to Deal of the week Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);

    }

    public function addBestSelling(Request $request){
        $id = $request->product_id;
        $update = DB::table('products')->where('id',$id)->update(['best_selling'=>1]);
        $notification=array(
            'messege'=>'Product Added to Best Selling Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);

    }

    public function addNewArrivals(Request $request){
        $id = $request->product_id;
        $update = DB::table('products')->where('id',$id)->update(['new_arrival'=>1]);
        $notification=array(
            'messege'=>'Product Added to New Arrivals Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);

    }
    public function removeDealOfTheWeek($id){
        $update = DB::table('products')->where('id',$id)->update(['deal_week'=>0]);
        $notification=array(
            'messege'=>'Product Removed from Deal of the week Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function removeBestSelling($id){

        $update = DB::table('products')->where('id',$id)->update(['best_selling'=>0]);
        $notification=array(
            'messege'=>'Product Removed from Best Selling Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);

    }

    public function removeNewArrival($id){

        $update = DB::table('products')->where('id',$id)->update(['new_arrival'=>0]);
        $notification=array(
            'messege'=>'Product Removed from New Arrivals Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);

    }

}
