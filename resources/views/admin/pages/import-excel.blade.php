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

        <form action="/admin/import-lekovi" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-12 col-md-1"></div>

            <div class="col-12 col-md-10">

                <div class="row">

                    <div class="form-group col-12 col-md-4">

                        <label for="">Import lekovi</label>
                        <input class="form-control" type="file" name="excel">

                    </div>
                    
                </div>

                <div class="row">
                    <div class="form-group col-12 col-md-4">

                        <button class="btn btn-success">Import</button>
    
                    </div>
                </div>
                
            </div>

        </form>


    </div>

    <br><br>

    <div class="row">

        <form action="/import-atc" method="POST">
            @csrf
            <div class="col-12 col-md-1"></div>

            <div class="col-12 col-md-10">

                <div class="row">

                    <div class="form-group col-12 col-md-4">

                        <label for="">Import Atc</label>
                        <input class="form-control" type="file" name="atc">

                    </div>
                    
                </div>

                <div class="row">
                    <div class="form-group col-12 col-md-4">

                        <button class="btn btn-success">Import</button>
    
                    </div>
                </div>
                
            </div>

        </form>

    </div>

    <br><br>

    <div class="row">

        <form action="/import-fabric" method="POST">
            @csrf
            <div class="col-12 col-md-1"></div>

            <div class="col-12 col-md-10">

                <div class="row">

                    <div class="form-group col-12 col-md-4">

                        <label for="">Import fabrike</label>
                        <input class="form-control" type="file" name="fabric">

                    </div>
                    
                </div>

                <div class="row">
                    <div class="form-group col-12 col-md-4">

                        <button class="btn btn-success">Import</button>
    
                    </div>
                </div>
                
            </div>

        </form>

    </div>

    <br><br>

    <div class="row">

        <form action="/import-nosioci" method="POST">
            @csrf
            <div class="col-12 col-md-1"></div>

            <div class="col-12 col-md-10">

                <div class="row">

                    <div class="form-group col-12 col-md-4">

                        <label for="">Import nosioca</label>
                        <input class="form-control" type="file" name="nosioci">

                    </div>
                    
                </div>

                <div class="row">
                    <div class="form-group col-12 col-md-4">

                        <button class="btn btn-success">Import</button>
    
                    </div>
                </div>
                
            </div>

        </form>

    </div>

    <br><br>

    <div class="row">

        <form action="/import-legend" method="POST">
            @csrf
            <div class="col-12 col-md-1"></div>

            <div class="col-12 col-md-10">

                <div class="row">

                    <div class="form-group col-12 col-md-4">

                        <label for="">Import Legendi</label>
                        <input class="form-control" type="file" name="legend">

                    </div>
                    
                </div>

                <div class="row">
                    <div class="form-group col-12 col-md-4">

                        <button class="btn btn-success">Import</button>
    
                    </div>
                </div>
                
            </div>

        </form>

    </div>





@endsection