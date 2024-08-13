<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use App\Models\ProductInventory;
use App\Models\ProductShipping;
use App\Models\SubCategory;
use App\Models\Variation;
use App\Models\VariationAttribute;
use Illuminate\Http\Request;
use Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::with(['productcategory','productimages','productinventories'])->get();
        //    dd($products);
        return view('admin.pages.products.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $products = Product::all();
        $attributes = Attribute::with('values')->get();
        $categories = Category::all();
        $subcategories = SubCategory::all();
        // dd($products);
        return view('admin.pages.products.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $validation = \Validator::make(
            $request->all(),
            [
                'name' => 'required',
            ],
            [
                'name.required' => 'Product name is required',

            ]
        );

        $product = new Product;
        if ($validation->fails()) {
            return back()->withErrors($validation);
        } else {
            if ($request->hasFile('product_image')) {

                $featuredfile = $request->file('product_image');
                $featuredimage = uniqid() . '.' . $featuredfile->guessExtension();
                $image_path = $featuredfile->move(public_path() . '/assets/images/products/', $featuredimage);
                $product->image = $featuredimage;

            }
            $product->name = $request->name;
            $product->slug = Str::slug($request->name);
            $product->description = $request->description;
            $product->short_description = $request->short_description;
            $product->category_id = $request->category_id;
            $product->subcategory_id = $request->subcategory_id;
            $product->type = $request->type;
            $product->regular_price = $request->regular_price;
            $product->sale_price = $request->sale_price;
            $product->sale_start_date = $request->start_date;
            $product->sale_end_date = $request->end_date;
            if ($product->save()) {
                $product_inventory = new ProductInventory;
                $product_inventory->product_id = $product->id;
                $product_inventory->sku = $request->sku;
                $product_inventory->is_stock_manage = $request->stock_manage;
                $product_inventory->quantity = $request->quantity;
                $product_inventory->allow_backorders = $request->allow_backorders;
                $product_inventory->low_stock_threshold = $request->low_stock_threshold;
                $product_inventory->stock_status = $request->stock_status;
                $product_inventory->is_sold_individually = $request->is_sold_individually;
                if ($product_inventory->save()) {
                    $shipping = new ProductShipping;
                    $shipping->product_id = $product->id;
                    $shipping->weight = $request->weight;
                    $shipping->dimensions = $request->length . 'x' . $request->width . 'x' . $request->height;
                    if ($shipping->save()) {
                        // $category = new ProductCategory;
                        // $category->product_id = $product->id;
                        // $category->category_id = $request->category_id;
                        // $category->sub_category_id = $request->sub_category_id;
                        // if ($category->save()) {
                            $gallery = new ProductImage;
                            if ($request->hasFile('gallery_images')) {
                                $files = $request->file('gallery_images');
                                $images = array();
                                $image_paths = array();


                                foreach ($files as $photo) {
                                    $galleryimage = $photo->getClientOriginalName();
                                    $gallery_image_path = $photo->move(public_path() . '/assets/images/products/', $galleryimage);
                                    $images[] = $galleryimage;
                                    $image_paths[] = $image_path;

                                }
                                // dd($images);
                                $allimages = implode(",", $images);
                                $gallery->images = $allimages;

                            }
                            $gallery->product_id = $product->id;
                            if ($gallery->save()) {
                                // dd($request->variations);
                                foreach ($request->variations as $variation) {
                                //    dd($variation);
                                    $productvariation = new Variation;
                                    $productvariation->product_id = $product->id;
                                    $productvariation->attribute = $variation['attribute'];
                                    $productvariation->price = $variation['price'];
                                    // dd($productvariation);
                                    $productvariation->save();

                                    // $regular_price = $variation['variations_regular_price'];
                                    // $sale_price = $variation['variations_sale_price'];
                                    // $sale_start_date = $variation['variations_start_date'];
                                    // $sale_end_date = $variation['variations_end_date'];
                                    // $sku = $variation['variations_sku'];

                                    
                                //     foreach ($variation['attributes'] as $key => $attribute) {
                                // // dd($attribute);
                                       
                                //         $productvariation->attributes()->attach($key,[
                                //             'attribute_value_id' => $attribute['attribute_value_id'],
                                //             'regular_price' => $regular_price,
                                //             'sale_price' => $sale_price,
                                //             'sale_start_date' => $sale_start_date,
                                //             'sale_end_date' => $sale_end_date,
                                //             'sku' => $sku,

                                //         ]);
                                //     }
                                }
                                // dd($productvariation);

                                if ($productvariation) {
                                    return redirect()->route('products.index')->with('Success', 'Product Added Successfully!');

                                } else {
                                    $product = Product::find($product->id);
                                    $product->delete();
                                    return back()->with('Somthing went wrong!');
                                }

                            } else {
                                $product = Product::find($product->id);
                                $product->delete();
                                return back()->with('Somthing went wrong!');
                            }

                        // } else {
                        //     $product = Product::find($product->id);
                        //     $product->delete();
                        //     return back()->with('Somthing went wrong!');
                        // }

                    } else {
                        $product = Product::find($product->id);
                        $product->delete();
                        return back()->with('Somthing went wrong!');
                    }

                } else {
                    $product = Product::find($product->id);
                    $product->delete();
                    return back()->with('Somthing went wrong!');
                }
            } else {
                return back()->with('Somthing went wrong!');
            }
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::Select('products.*', 'product_categories.id as pro_category_id', 'product_categories.category_id as category', 'product_categories.sub_category_id as sub_category', 'product_inventories.*', 'product_inventories.id as pro_inventory_id', 'product_shippings.id as pro_shipping_id', 'product_shippings.*', 'product_images.id as pro_gallery_id')
            ->leftjoin('product_categories', 'product_categories.product_id', 'products.id')
            ->leftjoin('product_inventories', 'product_inventories.product_id', 'products.id')
            ->leftjoin('product_shippings', 'product_shippings.product_id', 'products.id')
            ->leftjoin('product_images', 'product_images.product_id', 'products.id')
            ->where('products.id', $id)->first();
        $categories = Category::all();
        $subcategories = SubCategory::all();

        return view('admin.products.edit-product', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // dd($request->all());
        $validation = \Validator::make(
            $request->all(),
            [
                'name' => 'required',
            ],
            [
                'name.required' => 'Product name is required',

            ]
        );

        $product = Product::find($id);
        if ($validation->fails()) {
            return back()->withErrors($validation);
        } else {
            if ($request->hasFile('product_image')) {

                $featuredfile = $request->file('product_image');
                $featuredimage = uniqid() . '.' . $featuredfile->guessExtension();
                $image_path = $featuredfile->move(public_path() . '/assets/images/products/', $featuredimage);
                $product->image = $featuredimage;

            }
            $product->name = $request->name;
            $product->slug = Str::slug($request->name);
            $product->description = $request->description;
            $product->short_description = $request->short_description;
            $product->type = $request->type;
            $product->regular_price = $request->regular_price;
            $product->sale_price = $request->sale_price;
            $product->sale_start_date = $request->start_date;
            $product->sale_end_date = $request->end_date;
            if ($product->save()) {

                $product_inventory = ProductInventory::find($request->pro_inventory_id);
                if ($product_inventory == null) {
                    $product_inventory = new ProductInventory;
                }
                $product_inventory->product_id = $product->id;
                $product_inventory->sku = $request->sku;
                $product_inventory->is_stock_manage = $request->is_stock_manage;
                $product_inventory->quantity = $request->quantity;
                $product_inventory->allow_backorders = $request->allow_backorders;
                $product_inventory->low_stock_threshold = $request->low_stock_threshold;
                $product_inventory->stock_status = $request->stock_status;
                $product_inventory->is_sold_individually = $request->is_sold_individually;
                if ($product_inventory->save()) {

                    $shipping = ProductShipping::find($request->pro_shipping_id);
                    if ($shipping == null) {
                        $shipping = new ProductShipping;
                    }
                    $shipping->product_id = $product->id;
                    $shipping->weight = $request->weight;
                    $shipping->dimensions = $request->length . 'x' . $request->width . 'x' . $request->height;
                    if ($shipping->save()) {

                        $category = ProductCategory::find($request->pro_category_id);
                        if ($category == null) {
                            $category = new ProductCategory;
                        }
                        $category->product_id = $product->id;
                        if ($request->category_ids) {
                            $category->category_id = implode(',', $request->category_ids);
                        } else {
                            $category->category_id = null;
                        }
                        if ($request->sub_category_ids) {
                            $category->sub_category_id = implode(',', $request->sub_category_ids);
                        } else {
                            $category->sub_category_id = null;
                        }
                        if ($category->save()) {

                            $gallery = ProductImage::find($request->pro_gallery_id);
                            if ($gallery == null) {
                                $gallery = new ProductImage;
                            }
                            if ($request->hasFile('gallery_images')) {
                                $files = $request->file('gallery_images');
                                $images = array();
                                $image_paths = array();


                                foreach ($files as $photo) {
                                    $galleryimage = $photo->getClientOriginalName();
                                    $gallery_image_path = $photo->move(public_path() . '/assets/images/products/', $galleryimage);
                                    $images[] = $galleryimage;
                                    $image_paths[] = $image_path;

                                }
                                // dd($images);
                                $allimages = implode(",", $images);
                                $gallery->images = $allimages;

                            }
                            // dd($gallery);
                            $gallery->product_id = $product->id;
                            if ($gallery->save()) {
                                return redirect()->route('products.index')->with('Product Updated Successfully!');
                            } else {
                                $product = Product::find($product->id);
                                $product->delete();
                                return back()->with('Somthing went wrong!');
                            }

                        } else {
                            $product = Product::find($product->id);
                            $product->delete();
                            return back()->with('Somthing went wrong!');
                        }
                    } else {
                        $product = Product::find($product->id);
                        $product->delete();
                        return back()->with('Somthing went wrong!');
                    }
                } else {
                    $product = Product::find($product->id);
                    $product->delete();
                    return back()->with('Somthing went wrong!');
                }

            } else {

                return back()->with('Somthing went wrong!');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::find($id);
        // dd($product);
        if ($product->delete()) {
            return back()->with('success', 'Product deleted successfully!');
        } else {
            return back()->with('error', 'Something went wrong!');
        }
    }

    public function getSubCategories(Request $request)
    {
        $subcategories = SubCategory::where('category_id', $request->category)->get();
        return response()->json(['data' => $subcategories, 'success' => true]);
    }
}
