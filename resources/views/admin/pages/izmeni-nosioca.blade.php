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

        
        <form action="/admin/izmeni-nosioca" method="POST">
            @csrf
            <div class="col-12 col-md-1"></div>

            <div class="col-12 col-md-10">

                <div class="row">
                    <div class="col-12 col-md-12">
                        <h4>Izmeni nosioca dozvole</h4>
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

                <input type="hidden" name="id" value="{{ $product->id }}">

                <div class="row">
                    
                    <div class="form-group col-12 col-md-4">

                        <label for="">Nosilac</label>
                        <input class="form-control" type="text" name="nosilac" value="{{ $product->nosilac }}">

                    </div>

                    <div class="col-12 col-md-4">

                        <label for="">Mesto</label>
                        <input class="form-control" type="text" name="mesto" value="{{ $product->mesto }}">

                    </div>

                    <div class="col-12 col-md-4">

                        <label for="">Ulica</label>
                        <input class="form-control" type="text" name="ulica" value="{{ $product->ulica }}">

                    </div>

                </div>

                <div class="row">
                    
                    <div class="form-group col-12 col-md-4">

                        <label for="">Telefon</label>
                        <input class="form-control" type="text" name="telefon" value="{{ $product->telefon }}">

                    </div>

                    <div class="col-12 col-md-4">

                        <label for="">Fax</label>
                        <input class="form-control" type="text" name="fax" value="{{ $product->fax }}">

                    </div>

                    <div class="col-12 col-md-4">

                        <label for="">Field</label>
                        <input class="form-control" type="text" name="field" value="{{ $product->field }}">

                    </div>

                </div>

                <div class="row">
                    
                    <div class="form-group col-12 col-md-4">

                        <label for="">Email</label>
                        <input class="form-control" type="text" name="email" value="{{ $product->email }}">

                    </div>

                    <div class="col-12 col-md-4">

                        <label for="">Web</label>
                        <input class="form-control" type="text" name="web" value="{{ $product->web }}">

                    </div>

                </div>

                <div class="row">
                    <div class="col-12 col-md-4">
                        <button class="btn btn-success">Sačuvaj</button>
                    </div>
                </div>

                
            </div>

        </form>


    </div>


@endsection