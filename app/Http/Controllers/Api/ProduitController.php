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
}
