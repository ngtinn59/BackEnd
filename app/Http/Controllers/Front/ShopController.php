<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\ProductComment\ProductCommentService;
use App\Services\ProductComment\ProductCommentServiceInterface;
use App\Services\Product\ProductServiceInterface;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    private $productService;
    private $productCommentService;
    public function __construct(ProductServiceInterface $productService,
                                    ProductCommentServiceInterface $productCommentService)
    {
        $this->productService = $productService;
        $this->productCommentService = $productCommentService;
    }

    public function show($id){
        $product = $this->productService->find($id);
        $relatedProducts = $this->productService->getRelatedProducts($product);
        return view('front.shop.show', compact('product','relatedProducts'));
    }

    public function postComment(Request $request)
    {
       $this->productCommentService->create($request->all());
       return redirect()->back();
    }

    public function index()
    {
        $products = $this->productService->getProductOnindex();
        return view('front.shop.index',compact('products'));
    }
}
