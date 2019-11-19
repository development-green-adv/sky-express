@extends('admin/layouts/mas')

@section('style')

    <style>
        
       
    
    </style>

@endsection

@section('data')

    <div class="row">
        <div class="col-12 col-md-12">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h4>Lista Modela</h4>
                    <div style="border-bottom: 1px solid #c5c5c5; margin-bottom: 30px;"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6">
                    <button class="btn btn-default activeBtn">Aktivni Modeli</button>
                    <button class="btn btn-default inactiveBtn">Neaktivni modeli</button>
                </div>
            </div>

            <div class="row activee">
                <div class="col-12 col-md-12">

                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Akcija</th>
                                <th>Ime i prezime</th>
                                <th>Datum isteka ugovora</th>
                                <th>Datum rodjenja</th>
                                <th>Datum kreiranja</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if(count($activeModels))

                                @foreach($activeModels as $active)

                                    <tr>
                                        <td>
                                            <a class="btn btn-primary" href="/admin/izmeni-model/{{ $active->id_product }}">Izmeni</a>
                                            <a class="btn btn-danger" href="#">Obriši</a>
                                        </td>
                                        <td>{{ $active->product_name }}</td>
                                        <td>{{ $active->ugovor_do }}</td>
                                        <td>{{ $active->birthday }}</td>
                                        <td>{{ $active->created_at }}</td>
                                    </tr>

                                @endforeach

                            @else

                                <tr>
                                    <td>Trenutno nema aktivnih modela</td>
                                </tr> 

                            @endif

                        </tbody>
                    </table>
                    <?php /*echo $activeCategory->render();*/ ?>
                </div>
            </div>


            <div class="row inactive">
                <div class="col-12 col-md-12">

                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Akcija</th>
                                <th>Ime i prezime</th>
                                <th>Datum isteka ugovora</th>
                                <th>Datum rodjenja</th>
                                <th>Datum kreiranja</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if(count($inactiveModels))

                                @foreach($inactiveModels as $inactive)

                                    <tr>
                                        <td>
                                            <a class="btn btn-primary" href="/admin/izmeni-model/{{ $inactive->id_product }}">Izmeni</a>
                                            <a class="btn btn-danger" href="#">Obriši</a>
                                        </td>
                                        <td>{{ $inactive->product_name }}</td>
                                        <td>{{ $inactive->ugovor_do }}</td>
                                        <td>{{ $inactive->birthday }}</td>
                                        <td>{{ $inactive->created_at }}</td>
                                    </tr>

                                @endforeach
                            
                            @else

                                <tr>
                                    <td>Trenutno nema neaktivnih modela</td>
                                </tr>        

                            @endif
                        
                        </tbody>
                    </table>
                    <?php /*echo $inactiveCategory->render();*/ ?>
                </div>
            </div>

            

        </div>
    </div>


    <script>
    
        $(document).ready(function(){

            $(".activee").show();
            $(".inactive").hide();

            $(".activeBtn").css({"backgroundColor": "#3c8dbc", "color": "#fff"});

            $(".activeBtn").click(function(){
                $(this).css({"backgroundColor": "#3c8dbc", "color": "#fff"});
                $(".inactiveBtn").css({"backgroundColor": "transparent", "color":"#000"});
                $(".activee").show();
                $(".inactive").hide();
            });

            $(".inactiveBtn").click(function(){
                $(this).css({"backgroundColor": "#3c8dbc", "color": "#fff"});
                $(".activeBtn").css({"backgroundColor": "transparent", "color":"#000"});
                $(".activee").hide();
                $(".inactive").show();
            });

        });
    
    </script>

    <script>    
    
        $(document).ready( function () {
    
    
            $('#myTable').DataTable({
                "columnDefs": [{
                    "searchable": false,
                    "targets": [0]
                },{
                    "orderable": false,
                    "targets": [0]
                }]
    
            });


            $('#myTable1').DataTable({
                "columnDefs": [{
                    "searchable": false,
                    "targets": [0]
                },{
                    "orderable": false,
                    "targets": [0]
                }]
    
            });
        
        });
    
    </script>

    

@endsection