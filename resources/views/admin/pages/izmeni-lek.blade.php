@extends('admin/layouts/mas')

@section('style')

    <style>
        
        .modal-img {
            margin-bottom: auto;
            margin-top: auto;
        }
        #slike img {
            max-width: 150px;
            margin-top: 10px;
        }
    
    </style>

@endsection

@section('data')


    <div class="row">

        
        <form action="/admin/izmeni-lek" method="POST">
            @csrf
            <div class="col-12 col-md-1"></div>

            <div class="col-12 col-md-10">

                <div class="row">
                    <div class="col-12 col-md-12">
                        <h4>Izmeni Lek</h4>
                        <div style="border-bottom: 1px solid #c5c5c5; margin-bottom: 30px;"></div>
                    </div>
                </div>

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session()->has('success'))
                    <div class="alert alert-success text-center">
                        {{ session()->get('success') }}
                    </div>
                @endif

                @if(session()->has('messageError'))
                    <div class="alert alert-danger text-center">
                        {{ session()->get('messageError') }}
                    </div>
                @endif

                <input type="hidden" name="id" value="{{ $product->id_fab}}" />

                <div class="row">
                    
                    <div class="form-group col-12 col-md-4">

                        <label for="">Naziv</label>
                        <input class="form-control" type="text" name="naziv" value="{{ $product->naziv }}">

                    </div>

                    <div class="form-group col-12 col-md-4">

                        <label for="">Izaberite fabriku</label>
                        <select class="form-control" name="id_fabrike">

                            <option selected disabled>Izaberite fabriku</option>

                            @if(count($fabrics) > 0)

                                @foreach($fabrics as $fabric)

                                    <option @if($fabric->id_fabrike == $product->id_fabrike) selected @endif value="{{ $fabric->id_fabrike }}">{{ $fabric->fabrika }}</option>

                                @endforeach

                            @endif

                        </select>

                    </div>

                    <div class="form-group col-12 col-md-4">
                        
                        <label for="">Izaberite nosioca dozvole</label>
                        <select class="form-control" name="nosioci_dozvole">

                            <option selected disabled>Izaberite nosioca dozvole</option>

                            @if(count($nosioci) > 0)

                                @foreach($nosioci as $nosioc)

                                    <option @if($nosioc->id_nosioca == $product->nosioci_dozvole) selected @endif value="{{ $nosioc->id_nosioca }}">{{ $nosioc->nosilac }}</option>

                                @endforeach

                            @endif

                        </select>

                    </div>

                </div>


                <div class="row">

                    <div class="col-12 col-md-4">
                        
                        <label for="">Izaberite Atc</label>
                        <select class="form-control" name="idAtc">

                            <option selected disabled>Izaberite atc</option>

                            @if(count($atcs) > 0)

                                @foreach($atcs as $atc)

                                    <option @if($atc->id_atc == $product->idAtc) selected @endif value="{{ $atc->id_atc }}">{{ $atc->atc }}</option>

                                @endforeach

                            @endif

                        </select>
                    
                    </div>

                    <div class="col-12 col-md-4">

                        <label for="">inn</label>
                        <input class="form-control" type="text" name="inn" value="{{ $product->inn }}">

                    </div>

                    <div class="col-12 col-md-4">

                        <label for="">Grupa</label>
                        <input class="form-control" type="text" name="grupa" value="{{ $product->grupa }}">

                    </div>

                </div>
                <br>

                <div class="row">

                    <div class="col-12 col-md-4">

                        <label for="">idSimbolZuti</label>
                        <input class="form-control" type="text" name="idSimbolZuti" value="{{ $product->idSimbolZuti }}">
                    
                    </div>
                    <div class="col-12 col-md-4">

                        <label for="">idSimbolZuti2</label>
                        <input class="form-control" type="text" name="idSimbolZuti2" value="{{ $product->idSimbolZuti2 }}">

                    </div>
                    <div class="col-12 col-md-4">

                        <label for="">idSimbolZuti3</label>
                        <input class="form-control" type="text" name="idSimbolZuti3" value="{{ $product->idSimbolZuti3 }}">

                    </div>

                </div> 
                <br>

                <div class="row">

                    <div class="col-12 col-md-4">

                        <label for="">idSimbol1</label>
                        <input class="form-control" type="text" name="idSimbol1" value="{{ $product->idSimbol1 }}">
                    
                    </div>
                    <div class="col-12 col-md-4">

                        <label for="">idSimbol2</label>
                        <input class="form-control" type="text" name="idSimbol2" value="{{ $product->idSimbol2 }}">

                    </div>
                    <div class="col-12 col-md-4">

                        <label for="">idSimbol3</label>
                        <input class="form-control" type="text" name="idSimbol3" value="{{ $product->idSimbol3 }}">

                    </div>

                </div>
                <br>

                <div class="row">

                    <div class="col-12 col-md-4">

                        <label for="">doza1</label>
                        <input class="form-control" type="text" name="doza1" value="{{ $product->doza1 }}">
                    
                    </div>
                    <div class="col-12 col-md-4">

                        <label for="">idSimbolDoza1</label>
                        <input class="form-control" type="text" name="idSimbolDoza1" value="{{ $product->idSimbolDoza1 }}">

                    </div>
                    <div class="col-12 col-md-4">

                        <label for="">idSimbolDoza2</label>
                        <input class="form-control" type="text" name="idSimbolDoza2" value="{{ $product->idSimbolDoza2 }}">

                    </div>

                </div>
                <br>

                <div class="row">

                    <div class="col-12 col-md-4">

                        <label for="">idSimbolDoza3</label>
                        <input class="form-control" type="text" name="idSimbolDoza3" value="{{ $product->idSimbolDoza3 }}">
                    
                    </div>
                    <div class="col-12 col-md-4">

                        <label for="">idSimbolDoza4</label>
                        <input class="form-control" type="text" name="idSimbolDoza4" value="{{ $product->idSimbolDoza4 }}">

                    </div>
                    <div class="col-12 col-md-4">

                        <label for="">idSimbolDoza5</label>
                        <input class="form-control" type="text" name="idSimbolDoza5" value="{{ $product->idSimbolDoza5 }}">

                    </div>

                </div>
                <br>

                <div class="row">

                    <div class="col-12 col-md-4">

                        <label for="">idSimbolDoza6</label>
                        <input class="form-control" type="text" name="idSimbolDoza6" value="{{ $product->idSimbolDoza6 }}">
                    
                    </div>
                    <div class="col-12 col-md-4">

                        <label for="">boja</label>
                        <input class="form-control" type="text" name="boja" value="{{ $product->boja }}">

                    </div>
                    <div class="col-12 col-md-4">

                        <label for="">upotreba</label>
                        <input class="form-control" type="text" name="upotreba" value="{{ $product->upotreba }}">

                    </div>

                </div>
                <br>
                <div class="row">

                    <div class="col-12 col-md-4">

                        <label for="">paralela</label>
                        <input class="form-control" type="text" name="paralela" value="{{ $product->paralela }}">
                    
                    </div>

                    <div class="col-12 col-md-4">

                        <label for="">SmPc</label>
                        <input class="form-control" type="text" name="smpc" value="{{ $product->smpc }}">
                    
                    </div>

                    <div class="col-12 col-md-4">

                        <label for="">Pil</label>
                        <input class="form-control" type="text" name="pil" value="{{ $product->pil }}">
                    
                    </div>

                </div>
                <br>
                <div class="row">

                    <div class="col-12 col-md-4">

                        <label for="">Cena</label>
                        <input class="form-control" type="text" name="cena" value="{{ $product->cena }}">
                    
                    </div>

                </div>
                <br>
                <div class="row">
                    <div class="col-12 col-md-4">

                        <button class="btn btn-success">Sačuvaj</button>

                    </div>
                </div>

                
            </div>

        </form>


    </div>


@endsection