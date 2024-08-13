<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Variation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function Index()
    {
        $banners = Banner::all();
        $categories = Category::with('subcategory')->get();
        $products = Product::with('category','subcategory','variations')->get();
        // dd($products);
        return view('user.pages.index', get_defined_vars());
    }

    public function About()
    {
        return view('user.pages.about', get_defined_vars());
    }

    public function Contact()
    {
        return view('user.pages.contact', get_defined_vars());
    }

    public function ProductDetails($slug)
    {
        $product = Product::with(['category','subcategory', 'productimages', 'productinventories', 'variations'])->where('slug', $slug)->first();
        // dd($product);
        $relatedproducts = Product::with('category','subcategory', 'productimages', 'productinventories', 'variations')->where('slug', '!=', $slug)->get();
        return view('user.pages.product-details', get_defined_vars());
    }

    public function Shop()
    {
        $categories = Category::with('subcategory')->get();
        $products = Product::with('category','subcategory', 'productinventories','variations')->get();
        // dd($products);
        return view('user.pages.shop', get_defined_vars());
    }

    public function ProductsByCategory($slug)
    {
        $categories = Category::with('subcategory')->get();
        $category = Category::where('slug',$slug)->first();
        $products = Product::with('category','subcategory', 'productinventories','variations')->where('category_id',$category->id)->get();
        
        return view('user.pages.products-by-category', get_defined_vars());
    }

    public function ProductsBySubCategory($slug)
    {
        $categories = Category::with('subcategory')->get();
        $subcategory = SubCategory::where('slug',$slug)->first();
        $products = Product::with('category','subcategory', 'productinventories','variations')->where('subcategory_id',$subcategory->id)->get();

        return view('user.pages.products-by-subcategory', get_defined_vars());
    }

    public function AddtoCart(Request $request)
    {
        // dd($request->all());
        $product = Product::find($request->product_id);
        $variation = Variation::where('id', $request->variation_id)->first();

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        $cart = session()->get('cart', []);
        if ($variation) {
            // dd($cart[$product->id]['variation_id']);
            if (isset($cart[$product->id]) && isset($cart[$product->id]['variation_id']) && $cart[$product->id]['variation_id'] == $variation->id) {
            // dd($variation->id);

                $cart[$product->id]['quantity'] += $request->quantity;
            } else {
                // dd(3);
                $total_price = $request->price + $variation->price;

                $cart[$product->id] = [
                    "id" => $product->id,
                    "name" => $product->name,
                    "quantity" => $request->quantity,
                    "price" => $total_price,
                    'variation_id' => $request->variation_id
                ];
            }

        } else {
            // dd(4);
            if (isset($cart[$product->id])) {
                $cart[$product->id]['quantity'] += $request->quantity;
            } else {
                $cart[$product->id] = [
                    "id" => $product->id,
                    "name" => $product->name,
                    "quantity" => $request->quantity,
                    "price" => $request->price,
                ];
            }
        }

        session()->put('cart', $cart);
        return response()->json(['data' => $cart,'cartcount' => Count($cart), 'success' => true]);
    }

    public function RemovetoCart(Request $request)
    {
        $cart = session()->get('cart', []);
        
        if (isset($cart[$request->product_id])) {
            unset($cart[$request->product_id]);
            session()->put('cart', $cart);
        }

        return response()->json(['data' => $cart,'cartcount' => Count($cart), 'success' => true]);
    }

    public function getProducts(Request $request)
    {

        if (!empty($request->key)) {

            $products = Product::with('category','subcategory','variations')->where('name', 'like', '%' . $request->key . '%')->get();
            $key = $request->key;

            return view('user.autocompletes.productlist', get_defined_vars());

        }
    }

}
