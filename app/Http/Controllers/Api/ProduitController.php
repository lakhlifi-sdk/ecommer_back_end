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
        $product->nom=$req->nom;
        $product->description=$req->description;
        $product->prix=$req->prix;
        $product->promotion=$req->promotion;
        $product->image_url="https://upload.wikimedia.org/wikipedia/commons/c/ca/Boston_skyline_from_Longfellow_Bridge_September_2017_panorama_2.jpg";
        /*if($req->photo!=''){
        $photo=time().'.jpg';
        file_put_contents('storage/public/produits/'.$photo,base64_decode($req->photo));
        $product->image_url=$photo;

        }*/
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
