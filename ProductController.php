<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Package;
use App\Models\Productcat;
use Session;
use Image;
use File;
use DB;
use Auth;
use Hash;
use Response;
use Validator;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $product = Product::all();
        $data['category'] = DB::table('category')->get();
        $data['productimage'] = DB::table('products')->first();
        $data['state'] = DB::table('draw_cat')->get();
        $data['technical'] = DB::table('draw_cat')->get();
        $data['states'] = DB::table('draw_cat')->first();
        return view('product',compact('product'),$data);
    }

    public function dataShow(Request $request)
    {
        $product = Product::all();
        $data['category'] = DB::table('category')->get();
        $data['productimage'] = DB::table('products')->first();
        $data['state'] = DB::table('draw_cat')->get();
        $data['technical'] = DB::table('draw_cat')->get();
        $data['states'] = DB::table('draw_cat')->first();
        return view('show-data',compact('product'),$data);
    }

    public function SearchDetail($id)
    {
        $product = Product::find($id);
        $data['technicaldetail'] = DB::table('master_draw')->where('product_id',$id)->get();
        $data['bomItem'] = DB::table('bom_item')->where('product_id',$id)->get();
        $data['vendor'] = DB::table('vendor')->where('product_id',$id)->get();
        $data['productimage'] = DB::table('products')->where('id',$id)->first();
        return view('detail',compact('product'),$data);
    }

    public function Navbar($id)
    {
        $product = Product::find($id);
        $data['technicaldetail'] = DB::table('master_draw')->where('product_id',$id)->get();
        $data['bomItem'] = DB::table('bom_item')->where('product_id',$id)->get();
        $data['vendor'] = DB::table('vendor')->where('product_id',$id)->get();
        $data['productimage'] = DB::table('products')->where('id',$id)->first();
        return view('navbar',compact('product'),$data);
    }

    public function TechnicalDetail($id)
    {
        
        $product = Product::find($id);
        $data['technicaldetail'] = DB::table('master_draw')->where('product_id',$id)->get();
        $data['bomItem'] = DB::table('bom_item')->where('product_id',$id)->get();
        $data['vendor'] = DB::table('vendor')->where('product_id',$id)->get();
        $data['productimage'] = DB::table('products')->where('id',$id)->first();
        return view('technical-detail',compact('product'),$data);
    }

    public function CrossReference($id)
    {
        $product = Product::find($id);
        $data['technicaldetail'] = DB::table('master_draw')->where('product_id',$id)->get();
        $data['bomItem'] = DB::table('bom_item')->where('product_id',$id)->get();
        $data['vendor'] = DB::table('vendor')->where('product_id',$id)->get();
        $data['productimage'] = DB::table('products')->where('id',$id)->first();
        return view('cross-reference',compact('product'),$data);
    }

    public function Features($id)
    {
        $product = Product::find($id);
        $data['technicaldetail'] = DB::table('master_draw')->where('product_id',$id)->get();
        $data['bomItem'] = DB::table('bom_item')->where('product_id',$id)->get();
        $data['vendor'] = DB::table('vendor')->where('product_id',$id)->get();
        $data['productimage'] = DB::table('products')->where('id',$id)->first();
        return view('features',compact('product'),$data);
    }

    public function VendorDetails($id)
    {
        $product = Product::find($id);
        $data['technicaldetail'] = DB::table('master_draw')->where('product_id',$id)->get();
        $data['bomItem'] = DB::table('bom_item')->where('product_id',$id)->get();
        $data['vendor'] = DB::table('vendor')->where('product_id',$id)->get();
        $data['productimage'] = DB::table('products')->where('id',$id)->first();
        return view('vendor-details',compact('product'),$data);
    }

    public function CustomerData($id)
    {
        $product = Product::find($id);
        $data['technicaldetail'] = DB::table('master_draw')->where('product_id',$id)->get();
        $data['bomItem'] = DB::table('bom_item')->where('product_id',$id)->get();
        $data['vendor'] = DB::table('vendor')->where('product_id',$id)->get();
        $data['productimage'] = DB::table('products')->where('id',$id)->first();
        return view('customer-data',compact('product'),$data);
    }

    public function Drawing($id)
    {
        $product = Product::find($id);
        $data['technicaldetail'] = DB::table('master_draw')->where('product_id',$id)->get();
        $data['bomItem'] = DB::table('bom_item')->where('product_id',$id)->get();
        $data['vendor'] = DB::table('vendor')->where('product_id',$id)->get();
        $data['productimage'] = DB::table('products')->where('id',$id)->first();
        return view('drawing',compact('product'),$data);
    }

    public function Boms($id)
    {
        $product = Product::find($id);
        $data['technicaldetail'] = DB::table('master_draw')->where('product_id',$id)->get();
        $data['bomItem'] = DB::table('bom_item')->where('product_id',$id)->get();
        $data['vendor'] = DB::table('vendor')->where('product_id',$id)->get();
        $data['productimage'] = DB::table('products')->where('id',$id)->first();
        return view('boms',compact('product'),$data);
    }

    public function Indexes(Request $request)
    {
        return view('index');
    }

    public function SearchProductDetail(Request $request)
    {
        $search_all=$request->post('search');
        $search=$search_all['value'];

        $strt = $request->post('start');
        $length=$request->post('length');
        $draw=$request->post('draw');

        //DB::enableQueryLog();

        $searchrecordTot = DB::table('products')->where('status','1')
        ->where('product_cat', 'like', '%' . $search . '%')
        ->get();

        $searchrecord = DB::table('products')->where('status','1')
        ->where('product_cat', 'like', '%' . $search . '%')
        ->limit($length)->offset($strt)
        ->get();

        $searchrecord = DB::table('products')->where('status','1')
        ->where('suppl_code', 'like', '%' . $search . '%')
        ->limit($length)->offset($strt)
        ->get();

        $searchrecord = DB::table('products')->where('status','1')
        ->where('oem_name', 'like', '%' . $search . '%')
        ->limit($length)->offset($strt)
        ->get();

        $searchrecord = DB::table('products')->where('status','1')
        ->where('oem_code', 'like', '%' . $search . '%')
        ->limit($length)->offset($strt)
        ->get();

         $searchrecord = DB::table('products')->where('status','1')
        ->where('discription', 'like', '%' . $search . '%')
        ->limit($length)->offset($strt)
        ->get();

        $searchrecord = DB::table('products')->where('status','1')
        ->where('oes_name', 'like', '%' . $search . '%')
        ->limit($length)->offset($strt)
        ->get();

        //dd($searchrecord);

        $output_1=array();
        for($a=0;$a<sizeof($searchrecord);$a++){

            $edtBtn='<a href="'.url('/').'/search-details/'.$searchrecord[$a]->id.'" >Details</a>';

            $temp_arr=array(
                'id'=>$searchrecord[$a]->id,
                'edit_btn'=>$edtBtn,
                'product_cat'=>$searchrecord[$a]->product_cat,
                'suppl_code'=>$searchrecord[$a]->suppl_code,
                'oem_name'=>$searchrecord[$a]->oem_name,
                'oem_code'=>$searchrecord[$a]->oem_code,
                'description'=>$searchrecord[$a]->discription,
                'oes_name'=>$searchrecord[$a]->oes_name,
                'oes_code'=>$searchrecord[$a]->oes_code,
                'alias'=>$searchrecord[$a]->alias,
                'oes_name'=>$searchrecord[$a]->oes_name,
                'equip_cat'=>$searchrecord[$a]->equip_cat,
                'equip_model'=>$searchrecord[$a]->equip_model,
            );

            array_push($output_1,$temp_arr);
        }

        $output=array(
			"draw"=> intval($draw),
			"recordsTotal"=> sizeof($searchrecordTot)?sizeof($searchrecordTot):'0',
			"recordsFiltered"=> sizeof($searchrecordTot)?sizeof($searchrecordTot):'0',
			'data'=>isset($output_1)?$output_1:''
		);

        
        echo json_encode($output);

        //dd(DB::getQueryLog());
     
        //->orWhere('name', 'like', '%' . Input::get('name') . '%')->get();
       
    }

    public function product(Request $request)
    {
        return view('product');
    }

    public function add()
    {
        $category = Category::all();
        return view('product', compact('category'));
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if($product->item_image)
        {
            $path = 'assets2/item-image/'.$product->item_image;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        if($product->image1)
        {
            $path = 'assets2/image-1/'.$product->image1;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        if($product->image2)
        {
            $path = 'assets2/image-2/'.$product->image2;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        if($product->image3)
        {
            $path = 'assets2/image-3/'.$product->image3;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        if($product->image4)
        {
            $path = 'assets2/image-4/'.$product->image4;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        $product->delete();
        DB::table('master_draw')->where('product_id',$id)->delete();
        DB::table('bom_item')->where('product_id',$id)->delete();
        DB::table('vendor')->where('product_id',$id)->delete();
        return redirect('product')->with('status',"Product Deleted Successfully");
    }   

    public function subCategoryResults(Request $request)
    { 
        $categoryid = $request->post('product_cat'); 
        $getSubCategory = DB::table('draw_cat')->where('group_name',$categoryid)->get();
        ?>
        <div class="col-sm-3">
            <label for="">SUPPL_CODE</label>
            <select id="showSubcat" name="suppl_code" >
            <?php
                if(sizeof($getSubCategory)>0)
                {
                foreach($getSubCategory as $showsubCategory)
                {
                ?>
                <option value="<?=$showsubCategory->group_sno?>"<?php ?>><?=$showsubCategory->group_sno?></option>  
                <?php
                }
            }
            ?>
            </select>
        </div>
        <?php   
    }

    public function SearchProduct(Request $request)
    {
        $search_all=$request->post('search');
        $search=$search_all['value'];

        $strt = $request->post('start');
        $length=$request->post('length');
        $draw=$request->post('draw');

        //DB::enableQueryLog();

        $searchrecordTot = DB::table('products')->where('status','1')
        ->where('product_cat', 'like', '%' . $search . '%')
        ->get();

        $searchrecord = DB::table('products')->where('status','1')
        ->where('product_cat', 'like', '%' . $search . '%')
        ->limit($length)->offset($strt)
        ->get();

        //dd($searchrecord);

        $output_1=array();
        for($a=0;$a<sizeof($searchrecord);$a++){

            $edtBtn='<a href="'.url('/').'/edit-product/'.$searchrecord[$a]->id.'" class="btn btn-primary btn-sm">Edit</a>';
            $delBtn='<a href="'.url('/').'/delete-product/'.$searchrecord[$a]->id.'" style="background-color:#ff5252;"  class="btn btn-danger btn-sm">Delete</a>';

            $temp_arr=array(
                'id'=>$searchrecord[$a]->id,
                'product_cat'=>$searchrecord[$a]->product_cat,
                'suppl_code'=>$searchrecord[$a]->suppl_code,
                'oem_name'=>$searchrecord[$a]->oem_name,
                'description'=>$searchrecord[$a]->discription,
                'edit_btn'=>$edtBtn.$delBtn,
                // 'del_btn'=>$delBtn,
            );

            array_push($output_1,$temp_arr);
        }

        $output=array(
			"draw"=> intval($draw),
			"recordsTotal"=> sizeof($searchrecordTot)?sizeof($searchrecordTot):'0',
			"recordsFiltered"=> sizeof($searchrecordTot)?sizeof($searchrecordTot):'0',
			'data'=>isset($output_1)?$output_1:''
		);

        
        echo json_encode($output);

        //dd(DB::getQueryLog());
     
        //->orWhere('name', 'like', '%' . Input::get('name') . '%')->get();
       
    }

    public function insert(Request $request)
    {
        $access_admin_id = Session::get('usersession')->access_admin_id;
        $data['getproducts'] = DB::table('products')->first();

        if($request->isMethod('post')){ 

        if($request->hasFile('item_image'))
        {
            $file = $request->file('item_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets2/item-image/',$filename);
            $request->item_image = $filename;
        }

        if($request->hasFile('image1'))
        {
            $file = $request->file('image1');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets2/image-1/',$filename);
            $request->image1 = $filename;
        }

        if($request->hasFile('image2'))
        {
            $file = $request->file('image2');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets2/image-2/',$filename);
            $request->image2 = $filename;
        }

        if($request->hasFile('image3'))
        {
            $file = $request->file('image3');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets2/image-3/',$filename);
            $request->image3 = $filename;
        }

        if($request->hasFile('image4'))
        {
            $file = $request->file('image4');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets2/image-4/',$filename);
            $request->image4 = $filename;
        }

            $ParamArray = [
                'access_admin_id'=>$access_admin_id,
                'product_cat'=>$request->product_cat,
                'suppl_code'=>$request->suppl_code,
                'oem_name'=>$request->oem_name,
                'oem_code'=>$request->oem_code,
                'discription'=>$request->discription,
                'oes_name'=>$request->oes_name,
                'oes_code'=>$request->oes_code,
                'equip_cat'=>$request->equip_cat,
                'equip_model'=>$request->equip_model,
                'list_price'=>$request->list_price,
                'hsn_code'=>$request->hsn_code,
                'uom'=>$request->uom,
                'weight'=>$request->weight,
                'dimension'=>$request->dimension,
                'item_image'=>$request->item_image,
                'assy_instruction'=>$request->assy_instruction,
                'literature'=>$request->literature,
                'image1'=>$request->image1,
                'image2'=>$request->image2,
                'image3'=>$request->image3,
                'image4'=>$request->image4,
                'old_feature'=>$request->old_feature,
                'new_feature'=>$request->new_feature,
                'remarks'=>$request->remarks,
                'alias'=>$request->alias,
                'alias1'=>$request->alias1,
            ];
    
          $insert = DB::table('products')->insertGetId($ParamArray);

          if($insert>0){
            for($j=1;$j<=3;$j++){
              $product_id = $insert;
              $master_drawing_data = $request->post('master_drawing_data'.$j);       
              $master_drawing_data_details = $request->post('master_drawing_data_details'.$j);     
              //print_r($documenttitle); die();
         
           if($request->hasFile('master_drawing_data_file'.$j))
           {
                $file = $request->file('master_drawing_data_file'.$j);
                $master_drawing_data_file =  $file->getClientOriginalName();
                $destinationPath = public_path('assets2/master-file/');
                $file->move($destinationPath, $master_drawing_data_file);
           }
      
            $paramArrayP = array(
              'access_admin_id'=>$access_admin_id,
              'product_id'=>$product_id,
              'master_drawing_data'=>$master_drawing_data,
              'master_drawing_data_details'=>$master_drawing_data_details,
              'master_drawing_data_file'=>$master_drawing_data_file 
              );
              
             DB::table('master_draw')->insert($paramArrayP);                  
          }
        }

        if($insert>0){
            for($j=1;$j<=3;$j++){
              $product_id = $insert;   
              $bom_item = $request->post('bom_item'.$j);     
              //print_r($documenttitle); die();
      
            $paramArrayq = array(
              'access_admin_id'=>$access_admin_id,
              'product_id'=>$product_id,
              'bom_item'=>$bom_item 
              );
              
             DB::table('bom_item')->insert($paramArrayq);                  
          }
        }

        if($insert>0){
            for($j=1;$j<=3;$j++){
              $product_id = $insert;   
              $vendor = $request->post('vendor'.$j);     
              //print_r($vendor); die();
      
            $paramArrayr = array(
              'access_admin_id'=>$access_admin_id,
              'product_id'=>$product_id,
              'vendor'=>$vendor 
              );
              
             DB::table('vendor')->insert($paramArrayr);                  
          }
        }
      }

        if($insert>0){
            for($j=1;$j<=3;$j++){
            $product_id = $insert;   
            $major_customer = $request->post('major_customer'.$j);     
            //print_r($vendor); die();
    
            $paramArrayr = array(
            'access_admin_id'=>$access_admin_id,
            'product_id'=>$product_id,
            'major_customer'=>$major_customer 
            );
            
            DB::table('customer_data')->insert($paramArrayr);                  
        }
    }
  
        return redirect('product');
    }

      public function edit($id)
      {
        $product = Product::find($id);
        $data['category'] = DB::table('category')->get();
        $data['amit'] = DB::table('master_draw')->where('product_id',$id)->get();
        $data['bomItem'] = DB::table('bom_item')->where('product_id',$id)->get();
        $data['vendor'] = DB::table('vendor')->where('product_id',$id)->get();
        return view('edit-product', compact('product'),$data);
      }
  
      public function editProductdetail($id)
      {
        $product = Product::find($id);
        $data['category'] = DB::table('category')->get();
        $data['amit'] = DB::table('master_draw')->where('product_id',$id)->get();
        $data['bomItem'] = DB::table('bom_item')->where('product_id',$id)->get();
        $data['vendor'] = DB::table('vendor')->where('product_id',$id)->get();
        return view('edit-product-detail', compact('product'),$data);
      }

      public function updateProductdetail(Request $req, $id)
      {
        $access_admin_id = Session::get('usersession')->access_admin_id;
        $product = Product::all();
        $product = Product::find($id);
        $product_id = $product->id;
        
        if($req->hasFile('item_image'))
        {
            $path = 'assets2/item-image/'.$product->item_image;
            if(File::exists($path))
            {
                File::delete($path);
            }

            $file = $req->file('item_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('assets2/item-image/', $filename);
            $product->item_image = $filename; 
        }

        $ParamArray = [
            'product_cat'=>$req->product_cat,
            'suppl_code'=>$req->suppl_code,
            'oem_name'=>$req->oem_name,
            'oem_code'=>$req->oem_code,
            'oes_name'=>$req->oes_name,
            'oes_code'=>$req->oes_code,
            'discription'=>$req->discription,
            'equip_cat'=>$req->equip_cat,
            'equip_model'=>$req->equip_model,
            'hsn_code'=>$req->hsn_code,
            'uom'=>$req->uom,
            'weight'=>$req->weight,
            'dimension'=>$req->dimension,
            'list_price'=>$req->list_price,
            'item_image'=>$product->item_image,
        ];

        $update = DB::table('products')->where('id',$product_id)->update($ParamArray);
        return back()->with('status',"General Menu Updated Successfully");
      }

      public function update(Request $req, $id)
      {
        $access_admin_id = Session::get('usersession')->access_admin_id;
        $product = Product::all();
        $product = Product::find($id);
        $product_id = $product->id;
        
        if($req->hasFile('item_image'))
        {
            $path = 'assets2/item-image/'.$product->item_image;
            if(File::exists($path))
            {
                File::delete($path);
            }

            $file = $req->file('item_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('assets2/item-image/', $filename);
            $product->item_image = $filename; 
        }

        if($req->hasFile('image1'))
        {
            $path = 'assets2/image-1/'.$product->image1;
            if(File::exists($path))
            {
                File::delete($path);
            }

            $file = $req->file('image1');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('assets2/image-1/', $filename);
            $product->image1 = $filename; 
        }

        if($req->hasFile('image2'))
        {
            $path = 'assets2/image-2/'.$product->image2;
            if(File::exists($path))
            {
                File::delete($path);
            }

            $file = $req->file('image2');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('assets2/image-2/', $filename);
            $product->image2 = $filename; 
        }

        if($req->hasFile('image3'))
        {
            $path = 'assets2/image-3/'.$product->image3;
            if(File::exists($path))
            {
                File::delete($path);
            }

            $file = $req->file('image3');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('assets2/image-3/', $filename);
            $product->image3 = $filename; 
        }

        if($req->hasFile('image4'))
        {
            $path = 'assets2/image-4/'.$product->image4;
            if(File::exists($path))
            {
                File::delete($path);
            }

            $file = $req->file('image4');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('assets2/image-4/', $filename);
            $product->image4 = $filename; 
        }

        $ParamArray = [
            'product_cat'=>$req->product_cat,
            'suppl_code'=>$req->suppl_code,
            'oem_name'=>$req->oem_name,
            'oem_code'=>$req->oem_code,
            'discription'=>$req->discription,
            'oes_name'=>$req->oes_name,
            'oes_code'=>$req->oes_code,
            'equip_cat'=>$req->equip_cat,
            'equip_model'=>$req->equip_model,
            'list_price'=>$req->list_price,
            'hsn_code'=>$req->hsn_code,
            'uom'=>$req->uom,
            'weight'=>$req->weight,
            'dimension'=>$req->dimension,
            'item_image'=>$product->item_image,
            'assy_instruction'=>$req->assy_instruction,
            'literature'=>$req->literature,
            'image1'=>$product->image1,
            'image2'=>$product->image2,
            'image3'=>$product->image3,
            'image4'=>$product->image4,
            'old_feature'=>$req->old_feature,
            'new_feature'=>$req->new_feature,
            'remarks'=>$req->remarks,
            'alias'=>$req->alias,
            'alias1'=>$req->alias1,
        ];

        $update = DB::table('products')->where('id',$product_id)->update($ParamArray);

        $getUploadPDF = DB::table('master_draw')->where('product_id',$product_id)->get(); 
        foreach ($getUploadPDF as $showproPDF) {
        $j = $showproPDF->id;
        $master_drawing_data = $req->post('master_drawing_data'.$j);
        $master_drawing_data_details = $req->post('master_drawing_data_details'.$j);

        
        if($req->hasFile('master_drawing_data_file'.$j))
        {
            $path = 'assets2/master-file/'.$showproPDF->master_drawing_data_file;
            if(File::exists($path))
            {
                File::delete($path);
            }

            $file = $req->file('master_drawing_data_file'.$j);
            $master_drawing_data_file =  $file->getClientOriginalName();
            $destinationPath = public_path('assets2/master-file/');
            $file->move($destinationPath, $master_drawing_data_file);
        }else{
            $getProductPdf = DB::table('master_draw')->where('id',$j)->first();
            $master_drawing_data_file = $getProductPdf->master_drawing_data_file;
        } 

        if($master_drawing_data_file!=''){
            $paramArrayP = array(
                'product_id'=>$product_id,
                'master_drawing_data'=>$master_drawing_data,
                'master_drawing_data_details'=>$master_drawing_data_details,
                'master_drawing_data_file'=>$master_drawing_data_file
                );
            //print_r($paramArrayP);
            DB::table('master_draw')->where('id', $j)->update($paramArrayP);
            }   
        }

        $getProductDescription = DB::table('bom_item')->where('product_id',$product_id)->get();
          foreach ($getProductDescription as $showproDec) {
            $i = $showproDec->id;
            $bom_item = $req->post('bom_item'.$i);
            if($bom_item!=''){
              $paramArrayh = array(
                'product_id'=>$product_id,
                'bom_item'=>$bom_item,
                );
              //print_r($paramArrayh);
              DB::table('bom_item')->where('id', $i)->update($paramArrayh);
            }   
          }

          $getProductVendor = DB::table('vendor')->where('product_id',$product_id)->get();
          foreach ($getProductVendor as $showproDec) {
            $i = $showproDec->id;
            $vendor = $req->post('vendor'.$i);
            if($vendor!=''){
              $paramArrayh = array(
                'product_id'=>$product_id,
                'vendor'=>$vendor,
                );
              //print_r($paramArrayh);
              DB::table('vendor')->where('id', $i)->update($paramArrayh);
            }   
          }

        if(isset($product_id)){
            for($j=1;$j<=3;$j++){
              
              $master_drawing_data = $req->post('master_drawing_data'.$j);
              $master_drawing_data_details = $req->post('master_drawing_data_details'.$j);
  
          if($req->hasFile('master_drawing_data_file'.$j))
          {
              $file = $req->file('master_drawing_data_file'.$j);
              $master_drawing_data_file =  $file->getClientOriginalName();
               $destinationPath = public_path('assets2/master-file/');
              $file->move($destinationPath, $master_drawing_data_file);
          }

        if(isset($master_drawing_data)!=""){
            $paramArrayH = array(
                'product_id'=>$product_id,
                'access_admin_id'=>$access_admin_id,
                'master_drawing_data'=>$master_drawing_data,
                'master_drawing_data_details'=>$master_drawing_data_details,
                'master_drawing_data_file'=>$master_drawing_data_file
                );
            //print_r($paramArrayP);
            DB::table('master_draw')->insert($paramArrayH);
            }   
          }
        }

        if(isset($product_id)){
        for($j=1;$j<=3;$j++){
            
        $bom_item = $req->post('bom_item'.$j);

        if(isset($bom_item)!=""){
            $paramArrayI = array(
                'product_id'=>$product_id,
                'access_admin_id'=>$access_admin_id,
                'bom_item'=>$bom_item,
                );
            //print_r($paramArrayP);
            DB::table('bom_item')->insert($paramArrayI);
            }   
          }
        }

        if(isset($product_id)){
        for($j=1;$j<=3;$j++){
                
        $vendor = $req->post('vendor'.$j);

        if(isset($vendor)!=""){
            $paramArrayM = array(
            'product_id'=>$product_id,
            'access_admin_id'=>$access_admin_id,
            'vendor'=>$vendor,
            );
            //print_r($paramArrayP);
            DB::table('vendor')->insert($paramArrayM);
            }   
          }
        }

        return redirect('/product');
    }

      public function deletePdfs(Request $request){
        $pdf_id = $request->post('id');
        
        $showpdf = DB::table('master_draw')->where('id',$pdf_id)->first();
         
        $master_drawing_data_file = $showpdf->master_drawing_data_file;
        //$pdf_name = $showpdf->pdf_file;
        $pdf_path = public_path('assets2/master-file/'.$master_drawing_data_file); 

        if (file_exists($pdf_path)) {
            unlink($pdf_path);     
        }     

         DB::table('master_draw')->where('id',$pdf_id)->delete();
      }

      public function deleteBomitem(Request $request){
        $pdff_id = $request->post('id');
        
        $showpdf = DB::table('bom_item')->where('id',$pdff_id)->first();
        $bom_item = $showpdf->bom_item;
         DB::table('bom_item')->where('id',$pdff_id)->delete();
      }

      public function deleteVendor(Request $request){
        $vendor_id = $request->post('id');
        
        $showpdf = DB::table('vendor')->where('id',$vendor_id)->first();
        $vendor = $showpdf->vendor;
         DB::table('vendor')->where('id',$vendor_id)->delete();
      }
}
