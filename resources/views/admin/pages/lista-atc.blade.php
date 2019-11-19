@extends('admin/layouts/mas')

@section('style')

    <style>
        
        .table > tbody > tr > td {
            vertical-align: middle;
        }
    
    </style>

@endsection

@section('data')

    <div class="row">
        <div class="col-12 col-md-12">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h4>Lista novosti</h4>
                    <div style="border-bottom: 1px solid #c5c5c5; margin-bottom: 30px;"></div>
                </div>
            </div>

            <div class="row" style="margin-bottom: 20px;">
                <div class="col-12 col-md-6">
                    <button class="btn btn-default activeBtn">Aktivni lekovi</button>
                </div>
                <div class="col-12 col-md-2"></div>
                <div class="form-group col-12 col-md-4">
                    <input class="form-control" type="text" id="searcTable" placeholder="Uniseti naziv leka">
                    <a href="/admin/lista-atc">Poništi pretragu</a>
                </div>
            </div>

            <div class="row activee">
                <div class="col-12 col-md-12">

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
                    

                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Akcija</th>
                                <th>Atc</th>
                                <th>Naslov</th>
                            </tr>
                        </thead>
                        <tbody id="els">

                            @if(count($products))

                                @foreach($products as $product)

                                    <tr>
                                        <td>
                                            <a class="btn btn-primary" href="/admin/izmeni-lek/{{ $product->id_atc }}"><i class="far fa-edit"></i> Izmeni</a>
                                            <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#exampleModal{{ $product->id_atc }}"><i class="fas fa-trash-alt"></i> Obriši</a>
                                        </td>
                                        <td>{{ $product->atc }}</td>
                                        <td>{{ $product->naslov }}</td>
                                    </tr>

                                    <div class="modal fade" id="exampleModal{{ $product->id_atc }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h4><b>Da li ste sigurni ?</b></h4>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Ne</button>
                                                <a href="/admin/obrisi-fabriku/{{ $product->id_atc}}" class="btn btn-success">Da</a>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach

                                

                            @else

                                <tr>
                                    <td>Trenutno nema lekova</td>
                                </tr> 

                            @endif

                           

                        </tbody>
                    </table>
                    <div id="paginate">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>


        </div>
    </div>





    <script>

        $("#searcTable").on("keyup", function(){

            $("#paginate").hide();

            $.ajax({
                url:"/admin/get-ajax-list-atc",
                method:"POST",
                data:{
                    _token: "{{ csrf_token() }}",
                    searchData: $(this).val()
                },
                success:function(data){

                    arr = [];
                    arr.push(data);
                    var els = $("#els");
                    els.empty();

                    if(arr[0].length == 0){

                        var el = '';
                        els.append(el);

                    }else{

                        for (i = 0; i < arr[0].length; i++) {

                        var el = '<tr> <td> <a class="btn btn-primary" href="/admin/izmeni-atc/'+ arr[0][i].id_atc +'"><i class="far fa-edit"></i> Izmeni</a> <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#exampleModal'+ arr[0][i].id_atc +'"><i class="fas fa-trash-alt"></i> Obrisi</a> </td> <td>'+ arr[0][i].atc +'</td> <td>'+ arr[0][i].naslov +'</td> </tr>';
                        var modalBox = '<div class="modal fade" id="exampleModal'+ arr[0][i].id_atc +'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><h4><b>Da li ste sigurni ?</b></h4></div><div class="modal-footer"><button type="button" class="btn btn-danger" data-dismiss="modal">Ne</button><a href="/admin/obrisi-atc/'+ arr[0][i].id_atc +'" class="btn btn-success">Da</a></div></div></div></div>';

                        els.append(el);
                        els.append(modalBox);

                        }

                    }

                }
            });

        });
    
    </script>

    

@endsection