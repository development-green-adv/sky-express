<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Importer;
use Illuminate\Support\Facades\Validator;
use App\Product;
use App\Fabric;
use App\Nosioci;
use App\Atc;
use App\Legend;
use App\Baner;
use App\ImageGallery;
use App\Word;
use App\Lekbaner;
use App\Nosiocbaner;
use App\Proizvodjacbaner;
use App\User;

class AdminController extends Controller
{
    
    public function loginView(){

        return view("admin/pages/login");

    } 

    public function homePage(){

        $product = Product::count();
        $fabric = Fabric::count();
        $legend = Legend::count();
        $nosioci = Nosioci::count();

        return view("admin/pages/home", compact("product", "fabric", "legend", "nosioci"));

    }

    public function getAddLek(){

        $fabrics = Fabric::get();
        $nosioci = Nosioci::get();
        $atcs = Atc::get();

        return view("admin/pages/dodaj-modele", compact("fabrics", "nosioci", "atcs"));

    }



    public function storeLek(Request $request){

        $product = new Product();

        $product->naziv            = $request->input("naziv");
        $product->id_fabrike       = $request->input("id_fabrike");
        $product->nosioci_dozvole  = $request->input("nosioci_dozvole");
        $product->idAtc            = $request->input("idAtc");
        $product->inn              = $request->input("inn");
        $product->grupa            = $request->input("grupa");
        $product->idSimbolZuti     = $request->input("idSimbolZuti");
        $product->idSimbolZuti2    = $request->input("idSimbolZuti2");
        $product->idSimbolZuti3    = $request->input("idSimbolZuti3");
        $product->idSimbol1        = $request->input("idSimbol1");
        $product->idSimbol2        = $request->input("idSimbol2");
        $product->idSimbol3        = $request->input("idSimbol3");
        $product->doza1            = $request->input("doza1");
        $product->idSimbolDoza1    = $request->input("idSimbolDoza1");
        $product->idSimbolDoza2    = $request->input("idSimbolDoza2");
        $product->idSimbolDoza3    = $request->input("idSimbolDoza3");
        $product->idSimbolDoza4    = $request->input("idSimbolDoza4");
        $product->idSimbolDoza5    = $request->input("idSimbolDoza5");
        $product->idSimbolDoza6    = $request->input("idSimbolDoza6");
        $product->boja             = $request->input("boja");
        $product->upotreba         = $request->input("upotreba");
        $product->paralela         = $request->input("paralela");
        $product->smpc             = $request->input("smpc");
        $product->pil              = $request->input("pil");
        $product->cena             = $request->input("cena");

        $saveProduct = $product->save();

        if($saveProduct){

            return redirect()->back()->with('success', 'Uspešno ste dodali lek');

        }else{

            return redirect()->back()->with("messageError", "Morate uneti ispravan tip podataka");

        }

    }


    public function listLek(){

        $product = new Product();

        $products = Product::get();

        return view("admin/pages/lista-lekova", compact("products"));

    }


    public function getUpdateLek($id){

        $product = Product::where("id_fab", $id)->first();
        $fabrics = Fabric::get();
        $nosioci = Nosioci::get();
        $atcs = Atc::get();

        return view("admin/pages/izmeni-lek", compact("product", "fabrics", "nosioci", "atcs"));

    }


    public function updateLek(Request $request){

        $product = new Product();

        $updateProduct = $product->where('id_fab', $request->input("id"))
            ->update(
                [
                    "naziv"           => $request->input("naziv"),
                    "id_fabrike"      => $request->input("id_fabrike"),
                    "nosioci_dozvole" => $request->input("nosioci_dozvole"),
                    "idAtc"           => $request->input("idAtc"),
                    "inn"             => $request->input("inn"),
                    "grupa"           => $request->input("grupa"),
                    "idSimbolZuti"    => $request->input("idSimbolZuti"),
                    "idSimbolZuti2"   => $request->input("idSimbolZuti2"),
                    "idSimbolZuti3"   => $request->input("idSimbolZuti3"),
                    "idSimbol1"       => $request->input("idSimbol1"),
                    "idSimbol2"       => $request->input("idSimbol2"),
                    "idSimbol3"       => $request->input("idSimbol3"),
                    "doza1"           => $request->input("doza1"),
                    "idSimbolDoza1"   => $request->input("idSimbolDoza1"),
                    "idSimbolDoza2"   => $request->input("idSimbolDoza2"),
                    "idSimbolDoza3"   => $request->input("idSimbolDoza3"),
                    "idSimbolDoza4"   => $request->input("idSimbolDoza4"),
                    "idSimbolDoza5"   => $request->input("idSimbolDoza5"),
                    "idSimbolDoza6"   => $request->input("idSimbolDoza6"),
                    "boja"            => $request->input("boja"),
                    "upotreba"        => $request->input("upotreba"),
                    "paralela"        => $request->input("paralela"),
                    "smpc"            => $request->input("smpc"),
                    "pil"             => $request->input("pil"),
                    "cena"            => $request->input("cena")
                ]
            );

        if($updateProduct){

            return redirect()->back()->with('success', 'Uspešno ste izmenili lek');

        }else{

            return redirect()->back()->with("messageError", "Niste izmenili lek");

        }

    }


    public function getAjaxListLekovi(Request $request){

        $product = new Product();

        return $result = $product->where("naziv", "like", $request->searchData."%")->get();

    }


    public function deleteLek($id){

        $product = new Product();

        $deletePoruduct = $product->where("id_fab", $id)->delete();

        if($deletePoruduct){

            return redirect()->back()->with('success', 'Uspešno ste izbrisali lek');

        }else{

            return redirect()->back()->with("messageError", "Niste izbrisali lek");

        }

    }




    public function getAddFabrika(){

        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();

        return view("admin/pages/dodaj-fabriku", compact("allImages"));

    }


    public function storeFabrika(Request $request){

        $fabric = new Fabric();

        $fabric->fabrika        = $request->input("fabrika");
        $fabric->link           = $request->input("link");
        $fabric->telefon        = $request->input("telefon");
        $fabric->email          = $request->input("email");
        $fabric->adresa         = $request->input("adresa");
        $fabric->opis           = $request->input("opis");
        $fabric->logo           = $request["galleryImages"][0];

        $saveFabric = $fabric->save();

        if($saveFabric){

            $fabridId = Fabric::latest('id')->first();
            $fabridId = $fabridId->id;

            $fabric->where("id", $fabridId)->update(["id_fabrike" => $fabridId]);

            return redirect()->back()->with('success', 'Uspesno ste dodali fabriku');

        }else{

            return redirect()->back()->with("messageError", "Morate uneti ispravan tip podataka");

        }

    }


    public function listFabrika(){

        $product = new Fabric();

        $products = Fabric::get();

        return view("admin/pages/lista-fabrika", compact("products"));

    }


    public function getUpdateFabriku($id){

        $fabric = Fabric::where("id", $id)->first();
        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();

        return view("admin/pages/izmeni-fabriku", compact("fabric", "allImages"));

    }


    public function updateFabriku(Request $request){

        $fabric = new Fabric();

        $fabricUpdate = $fabric->where("id", $request->input("id"))->update(
            [
                "id_fabrike"   => $request->input("id"),
                "fabrika"      => $request->input("fabrika"),
                "link"         => $request->input("link"),
                "telefon"      => $request->input("telefon"),
                "email"        => $request->input("email"),
                "adresa"       => $request->input("adresa"),
                "opis"         => $request->input("opis"),
                "logo"         => $request["galleryImages"][0]
            ]
        );

        if($fabricUpdate){

            return redirect()->back()->with('success', 'Uspešno ste izmenili fabriku');

        }else{

            return redirect()->back()->with("messageError", "Niste izmenili fabriku");

        }

    }


    public function getAjaxListFabrika(Request $request){

        $product = new Fabric();
        
        return $result = $product->where("fabrika", "like", $request->searchData."%")->get();

    }


    public function deleteFabriku($id){

        $product = new Fabric();

        $deletePoruduct = $product->where("id_fabrike", $id)->delete();

        if($deletePoruduct){

            return redirect()->back()->with('success', 'Uspešno ste izbrisali lek');

        }else{

            return redirect()->back()->with("messageError", "Niste izbrisali lek");

        }

    }


    public function getAddAtc(){

        return view("admin/pages/dodaj-atc");

    }

    public function storeAtc(Request $request){

        $atcdId = Atc::latest('id')->first();
        $atcId = $atcdId->id;

        $atc = new Atc();

        $atc->id_atc      = $atcId;
        $atc->atc         = $request->input("atc");
        $atc->naslov      = $request->input("naslov");
        $atc->napomena    = $request->input("napomena");
        $atc->ind         = $request->input("ind");
        $atc->ki          = $request->input("ki");
        $atc->nd          = $request->input("nd");
        $atc->interakt    = $request->input("interakt");
        $atc->oprez       = $request->input("oprez");

        $saveAtc = $atc->save();

        if($saveAtc){

            return redirect()->back()->with('success', 'Uspešno ste dodali atc');

        }else{

            return redirect()->back()->with("messageError", "Morate uneti ispravan tip podataka");

        }

    }


    public function listAtc(){

        $product = new Atc();

        $products = Atc::paginate(100);
        return view("admin/pages/lista-atc", compact("products"));

    }


    public function getAjaxListAtc(Request $request){

        $product = new Atc();

        return $result = $product->where("atc", "like", $request->searchData."%")->get();

    }


    public function deleteAtc($id){

        $product = new Atc();

        $deletePoruduct = $product->where("id_atc", $id)->delete();

        if($deletePoruduct){

            return redirect()->back()->with('success', 'Uspešno ste izbrisali lek');

        }else{

            return redirect()->back()->with("messageError", "Niste izbrisali lek");

        }

    }






    public function getAddLegende(){

        return view("admin/pages/dodaj-legende");

    }


    public function storeLegende(Request $request){

        $legenda = new Legend();

        $legenda->oznaka    = $request->input("oznaka");
        $legenda->opis      = $request->input("opis");

        $saveLegend = $legenda->save();

        if($saveLegend){

            return redirect()->back()->with('success', 'Uspešno ste dodali legendu');

        }else{

            return redirect()->back()->with("messageError", "Morate uneti ispravan tip podataka");

        }

    }

    public function listLegende(){

        $product = new Legend();

        $products = Legend::paginate(100);
        return view("admin/pages/lista-legende", compact("products"));

    }


    public function getUpdateLegend($id){

        $product = Legend::where("id", $id)->first();

        return view("admin/pages/izmeni-legendu", compact("product"));

    }


    public function updateLegend(Request $request){

        $updateLegend = Legend::where("id", $request->input("id"))
                        ->update(
                            [
                                "oznaka" => $request->input("oznaka"),
                                "opis"   => $request->input("opis")
                            ]
                        );
        
        if($updateLegend){

            return redirect()->back()->with('success', 'Uspešno ste izmenili legendu');

        }else{

            return redirect()->back()->with("messageError", "Niste izmenili legendu");

        }

    }


    public function getAjaxListLegende(Request $request){

        $product = new Legend();

        return $result = $product->where("oznaka", "like", $request->searchData."%")->get();

    }

    public function deleteLegende($id){

        $product = new Legend();

        $deletePoruduct = $product->where("id", $id)->delete();

        if($deletePoruduct){

            return redirect()->back()->with('success', 'Uspešno ste izbrisali legendu');

        }else{

            return redirect()->back()->with("messageError", "Niste izbrisali legendu");

        }

    }


    public function getAddNosioce(){

        return view("admin/pages/dodaj-nosioce");

    }


    public function storeNosioce(Request $request){

        $nosiocId = Nosioci::latest('id')->first();
        $nosiocId = $nosiocId->id;

        $nosioc = new Nosioci();

        $nosioc->id_nosioca    = $nosiocId;
        $nosioc->nosilac       = $request->input("nosilac");
        $nosioc->mesto         = $request->input("mesto");
        $nosioc->ulica         = $request->input("ulica");
        $nosioc->telefon       = $request->input("telefon");
        $nosioc->fax           = $request->input("fax");
        $nosioc->field         = $request->input("field");
        $nosioc->email         = $request->input("email");
        $nosioc->web           = $request->input("web");

        $nosiocSave = $nosioc->save();

        if($nosiocSave){

            return redirect()->back()->with('success', 'Uspešno ste dodali nosioca');

        }else{

            return redirect()->back()->with("messageError", "Morate uneti ispravan tip podataka");

        }

    }


    public function listNosioci(){

        $product = new Nosioci();
        $products = Nosioci::get();

        return view("admin/pages/lista-nosioca", compact("products"));

    }

    public function getUpdateNosioc($id){

        $product = Nosioci::where("id", $id)->first();

        return view("admin/pages/izmeni-nosioca", compact("product"));

    }

    public function updateNosioca(Request $request){

        $updateNosioc = Nosioci::where("id", $request->input("id"))
                        ->update(
                            [
                                "nosilac" => $request->input("nosilac"),
                                "mesto"   => $request->input("mesto"),
                                "ulica"   => $request->input("ulica"),
                                "telefon" => $request->input("telefon"),
                                "fax"     => $request->input("fax"),
                                "field"   => $request->input("field"),
                                "email"   => $request->input("email"),
                                "web"     => $request->input("web")
                            ]
                        );

        if($updateNosioc){

            return redirect()->back()->with('success', 'Uspešno ste izmenili nosioca');

        }else{

            return redirect()->back()->with("messageError", "Niste izmenili nosioca");

        }

    }


    public function getAjaxListNosioci(Request $request){

        $product = new Nosioci();

        return $result = $product->where("nosilac", "like", $request->searchData."%")->get();

    }
    

    public function deleteNosioca($id){

        $product = new Nosioci();

        $deletePoruduct = $product->where("id", $id)->delete();

        if($deletePoruduct){

            return redirect()->back()->with('success', 'Uspešno ste izbrisali nosioca');

        }else{

            return redirect()->back()->with("messageError", "Niste izbrisali nosioca");

        }

    }




    public function getAddBaners(){

        $products = Product::get();
        $fabrics = Fabric::get();
        $nosiocis = Nosioci::get();
        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();

        return view("/admin/pages/dodaj-banere", compact("products", "fabrics", "nosiocis", "allImages"));

    }
    

    public function storeBanerLek(Request $request){

        if($request->lekovi_baner_position != ""){

            if($request->galleryImages != ""){

                foreach($request->lekSlovo as $id_lek){

                    $lekBaner = new Lekbaner();

                    $banerExist = Lekbaner::where("id_lek", $id_lek)->where("baner_position", $request->input("lekovi_baner_position"))->get();

                    if(!empty($request->input("galleryImages"))){
                        $gallery = implode(",", $request->input("galleryImages"));
                    }else{
                        $gallery = "";
                    }

                    if(count($banerExist) > 0){

                        $saveBanerLek = lekBaner::where("id_lek", $id_lek)->where("baner_position", $request->input("lekovi_baner_position"))->update([

                            "baner_image" => $gallery,
                            "baner_link"  => $request->input("baner_link")

                        ]);

                    }else{

                        $lekBaner->id_lek = $id_lek;
                        $lekBaner->baner_position = $request->input("lekovi_baner_position");
                        $lekBaner->baner_image = $gallery;
                        $lekBaner->baner_link = $request->input("baner_link");

                        $saveBanerLek = $lekBaner->save();

                    }

                }

                if($saveBanerLek){

                    return redirect()->back()->with('success', 'Uspešno ste dodali baner za lekove');
        
                }else{
        
                    return redirect()->back()->with("messageError", "Niste dodali baner za lekove");
        
                }
    
            }else{
    
                return redirect()->back()->with("messageError", "Morate odabrati baner");
    
            }

        }else{

            return redirect()->back()->with("messageError", "Morate odabrati poziciju banera");

        }

    }


    public function storeBanerProizvodjac(Request $request){

        if($request->proizvodjaci_baner_position != ""){

            if($request->galleryImages != ""){

                foreach($request->proizvodjacSlovo as $id_proizvodjac){

                    $ProizvodjacBaner = new Proizvodjacbaner();

                    $banerExist = Proizvodjacbaner::where("id_proizvodjac", $id_proizvodjac)->where("baner_position", $request->input("proizvodjaci_baner_position"))->get();

                    if(!empty($request->input("galleryImages"))){
                        $gallery = implode(",", $request->input("galleryImages"));
                    }else{
                        $gallery = "";
                    }

                    if(count($banerExist) > 0){

                        $saveBanerProizvodjac = Proizvodjacbaner::where("id_proizvodjac", $id_proizvodjac)->where("baner_position", $request->input("proizvodjaci_baner_position"))->update([

                            "baner_image" => $gallery,
                            "baner_link"  => $request->input("baner_link")

                        ]);

                    }else{

                    $ProizvodjacBaner->id_proizvodjac = $id_proizvodjac;
                    $ProizvodjacBaner->baner_position = $request->input("proizvodjaci_baner_position");
                    $ProizvodjacBaner->baner_image = $gallery;
                    $ProizvodjacBaner->baner_link = $request->input("baner_link");

                    $saveBanerProizvodjac = $ProizvodjacBaner->save();

                    }

                }

                if($saveBanerProizvodjac){

                    return redirect()->back()->with('success', 'Uspešno ste dodali baner za proizvodjace');
        
                }else{
        
                    return redirect()->back()->with("messageError", "Niste dodali baner za proizvodjace");
        
                }
    
            }else{
    
                return redirect()->back()->with("messageError", "Morate odabrati baner");
    
            }

        }else{

            return redirect()->back()->with("messageError", "Morate odabrati poziciju banera");

        }

    }


    public function storeBanerNosioci(Request $request){

        if($request->nosioci_baner_position != ""){

            if($request->galleryImages != ""){

                foreach($request->nosiociSlovo as $id_nosioca){

                    $banerExist = Nosiocbaner::where("id_nosioca", $id_nosioca)->where("baner_position", $request->input("nosioci_baner_position"))->get();

                    $NosiocBaner = new Nosiocbaner();


                    if(!empty($request->input("galleryImages"))){
                        $gallery = implode(",", $request->input("galleryImages"));
                    }else{
                        $gallery = "";
                    }

                    if(count($banerExist) > 0){

                        $saveBanerNosioc = Nosiocbaner::where("id_nosioca", $id_nosioca)->where("baner_position", $request->input("nosioci_baner_position"))->update([

                            "baner_image" => $gallery,
                            "baner_link"  => $request->input("baner_link")

                        ]);

                    }else{

                        $NosiocBaner->id_nosioca = $id_nosioca;
                        $NosiocBaner->baner_position = $request->input("nosioci_baner_position");
                        $NosiocBaner->baner_image = $gallery;
                        $NosiocBaner->baner_link = $request->input("baner_link");
    
                        $saveBanerNosioc = $NosiocBaner->save();

                    }

                }

                if($saveBanerNosioc){

                    return redirect()->back()->with('success', 'Uspešno ste dodali baner za nosioce');
        
                }else{
        
                    return redirect()->back()->with("messageError", "Niste dodali baner za nosice");
        
                }
    
            }else{
    
                return redirect()->back()->with("messageError", "Morate odabrati baner");
    
            }

        }else{

            return redirect()->back()->with("messageError", "Morate odabrati poziciju banera");

        }

    }



    public function storeBaners(Request $request){

        $baner = new Baner();

        if(!empty($request->input("galleryImages"))){
            $gallery = implode(",", $request->input("galleryImages"));
         }else{
             $gallery = "";
         }

        $baner->baner_position = $request->input("banerCat");
        $baner->baner_item_id = $request->input("value");
        $baner->baner_gallery = $gallery;        
        $banerSave = $baner->save();

        if($banerSave){

            return redirect()->back()->with('success', 'Uspešno ste dodali baner');

        }else{

            return redirect()->back()->with("messageError", "Baner nije dodat");

        }

    }

    public function storeWordBaners(Request $request){

        $word = new Word();

        if(!empty($request->input("galleryImages"))){
            $gallery = implode(",", $request->input("galleryImages"));
        }else{
            $gallery = "";
        }

        $word->letter = $request->input("slovo");
        $word->letter_gallery = $gallery;

        $saveWord = $word->save();

        if($saveWord){

            return redirect()->back()->with('success', 'Uspešno ste dodali baner');

        }else{

            return redirect()->back()->with("messageError", "Baner nije dodat");

        }

    }

    public function listBaners(){

        $words = Word::get();
        

        $proizvodjac = Fabric::get();
        $proizvodjacBaners = Proizvodjacbaner::get();

        $nosioci = Nosioci::get();
        $nosiociBaners = Nosiocbaner::get();

        return view("/admin/pages/lista-banera", compact("words", "proizvodjacBaners", "proizvodjac", "nosiociBaners", "nosioci"));

    }


    public function listLekoviBaners(){

        $data = Lekbaner::select("id_lek", "baner_image", "naziv")->leftJoin("products", "products.id_fab", "=", "lekbaners.id_lek")->get();

        return view("/admin/pages/lista-lekovi-baneri", compact("data"));

    }


    public function listProizvodjaciBaners(){

        $data = Proizvodjacbaner::select("id_proizvodjac", "baner_image", "fabrika")->leftJoin("fabrics", "fabrics.id_fabrike", "=", "proizvodjacbaners.id_proizvodjac")->get();

        return view("/admin/pages/lista-proizvodjaci-baneri", compact("data"));

    }


    public function listNosiociBaners(){

        $data = Nosiocbaner::leftJoin("nosiocis", "nosiocis.id_nosioca", "=", "nosiocbaners.id_nosioca")->get();

        return view("/admin/pages/lista-nosioci-baneri", compact("data"));

    }





    public function deleteWordBaner($id){

        $deleteWordBaner = Word::where("id", $id)->delete();

        if($deleteWordBaner){

            return redirect()->back();

        }else{

            return "Baner nije izbrisan";

        }

    }


    public function deleteLekBaner($id){

        $deleteLekBaner = Lekbaner::where("id_lek", $id)->delete();

        if($deleteLekBaner){

            return redirect()->back()->with("success", "Baner je uspesno izbrisan");

        }else{

            return redirect()->back()->with("Baner nije izbrisan");

        }

    }


    public function deleteFabricBaner($id){

        $deleteFabricBaner = Proizvodjacbaner::where("id_proizvodjac", $id)->delete();

        if($deleteFabricBaner){

            return redirect()->back()->with("success", "Baner je uspesno izbrisan");

        }else{

            return redirect()->back()->with("Baner nije izbrisan");

        }

    }


    public function deleteNosiocBaner($id){

        $deleteNosiocBaner = Nosiocbaner::where("id_nosioca", $id)->delete();

        if($deleteNosiocBaner){

            return redirect()->back()->with("success", "Baner je uspesno izbrisan");

        }else{

            return redirect()->back()->with("Baner nije izbrisan");

        }

    }







    public function getAjaxWordLek(Request $request){

        return $data = Product::where("naziv", "like", $request->word."%")->select('id_fab','naziv')->get();

    }


    public function getAjaxWordProizvodjac(Request $request){

        return $data = Fabric::where("fabrika", "like", $request->word."%")->select("id", "fabrika")->get();

    }

    public function getAjaxWordNosioc(Request $request){

        return $data = Nosioci::where("nosilac", "like", $request->word."%")->select("id_nosioca", "nosilac")->get();

    }


    public function storeImages(Request $request){
        
        $images = $request->file("images");

        for($i = 0; $i < count($images); $i++){

            $new = $i.time().".".$images[$i]->getClientOriginalExtension();
            $slika = $images[$i]->move(public_path("images_gallery"), $new);

            $gallery = new ImageGallery();
            $gallery->image_name = $new;
            $gallery->save();

        }

        $gallery = new ImageGallery();
        $allImages = $gallery->orderBy('id', 'DESC')->get();

        return $allImages;

    }


    public function getAddAdmin(){

        return view("admin/pages/dodaj-administratora");

    }

    public function storeAdmin(Request $request){

        $user = new User();

        $user->name = $request->input("name");
        $user->email = $request->input("email");
        $user->password = Hash::make($request->input("password"));

        $storeAdmin = $user->save();

        if($storeAdmin){

            return redirect()->back()->with("success", "Admin je uspesno dodat");

        }else{

            return redirect()->back()->with("Niste dodali admina");

        }

    }


    public function listAdmins(){

        $users = User::get();

        return view("admin/pages/lista-administratora", compact("users"));

    }

    public function deleteAdmin($id){

        $deleteUser = User::where("id", $id)->delete();

        if($deleteUser){

            return redirect()->back()->with("success", "Admin je uspesno izbrisan");

        }else{

            return redirect()->back()->with("Niste izbrisali admina");

        }

    }


    public function getImport(){

        return view("admin/pages/import-excel");

    }


    public function importLekovi(Request $request){

        $validator = Validator::make($request->all(), [
            'excel' => 'required|mimes:xlsx, xls, csv' 
        ]);
 
        if($validator->passes()){
 
            $dateTime = date("Ymd_His");
            $file = $request->file("excel");
 
            $fileName = $dateTime."-".$file->getClientOriginalName();
            $savePath = public_path("/upload/");
            $file->move($savePath, $fileName);
 
            $excel = Importer::make("Excel");
            $excel->load($savePath.$fileName);
            $collection = $excel->getCollection();
 
            if(sizeof($collection[1]) == 24){
 
                $deleteProducts = Product::truncate();

                if($deleteProducts){

                    for($row = 1; $row < sizeof($collection); $row++){

                        $product = new Product();

                        $product->n_id = $collection[$row][0];
                        $product->t_id = $collection[$row][1];
                        $product->naziv = $collection[$row][2];
                        $product->id_fabrike = $collection[$row][3];
                        $product->nosioci_dozvole = $collection[$row][4];
                        $product->idAtc = $collection[$row][5];
                        $product->inn = $collection[$row][6];
                        $product->grupa = $collection[$row][7];
                        $product->idSimbolZuti = $collection[$row][8];
                        $product->idSimbolZuti2 = $collection[$row][9];
                        $product->idSimbolZuti3 = $collection[$row][10];
                        $product->idSimbol1 = $collection[$row][11];
                        $product->idSimbol2 = $collection[$row][12];
                        $product->idSimbol3 = $collection[$row][13];
                        $product->doza1 = $collection[$row][14];
                        $product->idSimbolDoza1 = $collection[$row][15];
                        $product->idSimbolDoza2 = $collection[$row][16];
                        $product->idSimbolDoza3 = $collection[$row][17];
                        $product->idSimbolDoza4 = $collection[$row][18];
                        $product->idSimbolDoza5 = $collection[$row][19];
                        $product->idSimbolDoza6 = $collection[$row][20];
                        $product->boja = $collection[$row][21];
                        $product->upotreba = $collection[$row][22];
                        $product->paralela = $collection[$row][23];
                        
                        $product->save();
     
                    }
                }

                

            }else{

                return sizeof($collection[1]); 
                
            }

            return "proslo";
 
        }else{
 
            return "nisu dodati proizvodi";
 
        }

    }




}
