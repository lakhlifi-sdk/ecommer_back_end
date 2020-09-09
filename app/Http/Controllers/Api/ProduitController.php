<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produit;
use DB;

class ProduitController extends Controller
{
    //products methode for products

    function produits(Request $req){

    	$products = DB::table('produits')
                ->offset($req->start-1)
                ->limit($req->count)
                /*->orderByDesc('id')*/
                ->get();
         /*$products["count"]->count($products);      

*/
		        try{

			return response()->json([
					    		'success'=> true,
					    		"products"=>$products
					    	]);
			    	}catch(Exception $e){
			    		return esponse()->json([
					    		'success'=> false,
					    		
					    	]);

    	
             }

        }

    public function create(Request $req){



        $product= new Produit();
        try{
        $product->titre=$req->input('nom');
        $product->contenu=$req->input('description');
         if($request->photo!=''){
        $photo=time().'.jpg';
        file_put_contents('storage/produits/'.$photo,base64_decode($request->photo));
        $post->image_url=$photo;
        
        }
        $product->save();

        return response()->json([
                                'success'=> true,
                                "products"=>$product
                            ]);
                    }catch(Exception $e){
                        return esponse()->json([
                                'success'=> false,
                                
                            ]);

    }
}
}
