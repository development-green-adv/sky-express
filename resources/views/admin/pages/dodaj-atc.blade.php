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

        
        <form action="/admin/dodaj-atc" method="POST">
            @csrf
            <div class="col-12 col-md-1"></div>

            <div class="col-12 col-md-10">

                <div class="row">
                    <div class="col-12 col-md-12">
                        <h4>Dodaj novi Atc</h4>
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

                

                <div class="row">
                    
                    <div class="form-group col-12 col-md-4">

                        <label for="">Atc</label>
                        <input class="form-control" type="text" name="atc">

                    </div>

                    <div class="col-12 col-md-4">

                        <label for="">Naslov</label>
                        <input class="form-control" type="text" name="naslov">

                    </div>

                    <div class="col-12 col-md-4">

                        <label for="">Napomena</label>
                        <input class="form-control" type="text" name="napomena">

                    </div>

                </div>

                <div class="row">
                    
                    <div class="form-group col-12 col-md-4">

                        <label for="">Ind</label>
                        <input class="form-control" type="text" name="ind">

                    </div>

                    <div class="form-group col-12 col-md-4">

                        <label for="">Ki</label>
                        <input class="form-control" type="text" name="ki">

                    </div>

                    <div class="form-group col-12 col-md-4">

                        <label for="">Nd</label>
                        <input class="form-control" type="text" name="nd">

                    </div>

                </div>

                <div class="row">
                    
                    <div class="form-group col-12 col-md-4">

                        <label for="">Interakt</label>
                        <input class="form-control" type="text" name="interakt">

                    </div>

                    <div class="form-group col-12 col-md-4">

                        <label for="">Oprez</label>
                        <input class="form-control" type="text" name="oprez">

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