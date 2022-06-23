<?php
  
namespace App\Http\Controllers;
  
use App\Models\Product;
use Illuminate\Http\Request;
  
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
    
        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'curse' => 'required',
            'lesson' => 'required',
            'question' => 'required',
            'answer' => 'required',
            'variant_1' => '',
            'variant_2' => '',
            'variant_3' => '',
            'variant_4' => '',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
        if(!(isset($request->variant_1))){
            $data = array(
                'curse'         => $request->curse,
                'lesson'        => $request->lesson,
                'question'      => $request->question,
                'answer'        => $request->answer,
                'variant_1'     => $request->answer,
                'variant_2'     => $request->variant_2,
                'variant_3'     => $request->variant_3,
                'variant_4'     => $request->variant_4,
            );
        }
        if(!(isset($request->variant_2))){
            $data = array(
                'curse'         => $request->curse,
                'lesson'        => $request->lesson,
                'question'      => $request->question,
                'answer'        => $request->answer,
                'variant_1'     => $request->variant_1,
                'variant_2'     => $request->answer,
                'variant_3'     => $request->variant_3,
                'variant_4'     => $request->variant_4,
            );
        }
        if(!(isset($request->variant_3))){
            $data = array(
                'curse'         => $request->curse,
                'lesson'        => $request->lesson,
                'question'      => $request->question,
                'answer'        => $request->answer,
                'variant_1'     => $request->variant_1,
                'variant_2'     => $request->variant_2,
                'variant_3'     => $request->answer,
                'variant_4'     => $request->variant_4,
            );
        }
        if(!(isset($request->variant_4))){
            $data = array(
                'curse'         => $request->curse,
                'lesson'        => $request->lesson,
                'question'      => $request->question,
                'answer'        => $request->answer,
                'variant_1'     => $request->variant_1,
                'variant_2'     => $request->variant_2,
                'variant_3'     => $request->variant_3,
                'variant_4'     => $request->answer,
            );
        }
        if ($image = $request->file('image')) { 
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }
    
        Product::create($data);
     
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        
        return view('products.show',compact('product'));
    }
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'curse' => 'required',
            'lesson' => 'required',
            'question' => 'required',
            'answer' => 'required',
            'variant_1' => '',
            'variant_2' => '',
            'variant_3' => '',
            'variant_4' => '',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $product->update($input);
    
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
     
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}