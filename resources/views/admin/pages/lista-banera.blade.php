@extends('admin/layouts/mas')

@section('style')

    <style>
        
        .table > tbody > tr > td {
            vertical-align: middle;
        }

        .table td{
            width: 22% !important;
            text-align: left;
        }
    
    </style>

@endsection

@section('data')

    <div class="row">
        <div class="col-12 col-md-12">
            <div class="row">
                <div class="col-12 col-md-12">
                    <h4>Lista banera</h4>
                    <div style="border-bottom: 1px solid #c5c5c5; margin-bottom: 30px;"></div>
                </div>
            </div>

            <div class="row" style="margin-bottom: 20px;">
                <div class="col-12 col-md-6">
                    <button class="btn btn-default lekoviSlovoBtn">Lekovi slovo</button>
                </div>
                <div class="col-12 col-md-2"></div>
                <div class="form-group col-12 col-md-4">
                </div>
            </div>


            <div class="row lekoviSlovo">
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
                                <th>Baner</th>
                                <th>Slovo</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="els">

                            @if(count($words) > 0)

                                @foreach($words as $word)

                                    <tr>
                                        <td>
                                            <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#exampleModal{{ $word->id }}"><i class="fas fa-trash-alt"></i> Obriši baner</a>
                                        </td>
                                        <td>
                                            <?php 
                                                
                                                $data = explode(",",$word['letter_gallery']);
                                                
                                                for($i = 0; $i < count($data); $i++){ ?>

                                                    <img style="height: 50px; margin-left: 10px;" class="img-fluid" src="../images_gallery/<?=$data[$i];?>">

                                            <?php } ?>
                                        </td>
                                        
                                        <td>{{ $word->letter }}</td>
                                        <td></td>
                                    </tr>

                                    <div class="modal fade" id="exampleModal{{ $word->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <a href="/admin/obrisi-word-baner/{{ $word->id }}" class="btn btn-success">Da</a>
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
                    </div>
                </div>
            </div>

        </div>
    </div>





    <script>
    
        $(document).ready(function(){

            var lekoviSlovoBtn = $(".lekoviSlovoBtn");
            var lekoviBtn = $(".lekoviBtn");
            var proizvodjaciBtn = $(".proizvodjaciBtn");
            var nosiociBtn = $(".nosiociBtn");
            var footerBtn = $(".footerBtn");

                $(".lekoviSlovo").show();
                $(".lekovi").hide();
                $(".proizvodjaci").hide();
                $(".nosioci").hide();
                $(".footer").hide();


            lekoviSlovoBtn.on("click", function(){

                $(".lekoviSlovo").show();
                $(".lekovi").hide();
                $(".proizvodjaci").hide();
                $(".nosioci").hide();
                $(".footer").hide();

            });


            lekoviBtn.on("click", function(){

                $(".lekoviSlovo").hide();
                $(".lekovi").show();
                $(".proizvodjaci").hide();
                $(".nosioci").hide();
                $(".footer").hide();

            });

            proizvodjaciBtn.on("click", function(){

                $(".lekoviSlovo").hide();
                $(".lekovi").hide();
                $(".proizvodjaci").show();
                $(".nosioci").hide();
                $(".footer").hide();

            });

            nosiociBtn.on("click", function(){

                $(".lekoviSlovo").hide();
                $(".lekovi").hide();
                $(".proizvodjaci").hide();
                $(".nosioci").show();
                $(".footer").hide();

            });

            footerBtn.on("click", function(){

                $(".lekoviSlovo").hide();
                $(".lekovi").hide();
                $(".proizvodjaci").hide();
                $(".nosioci").hide();
                $(".footer").show();

            });


        });

    
    </script>

    <script>

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

        $('#myTable2').DataTable({
            "columnDefs": [{
                "searchable": false,
                "targets": [0]
            },{
                "orderable": false,
                "targets": [0]
            }]

        });
    
    </script>

    

@endsection