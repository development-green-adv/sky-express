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

        <div class="col-12 col-md-1"></div>

        <div class="col-12 col-md-10">

            <div class="row">
                <div class="col-12 col-md-12">
                    <h4>Dodaj Banere</h4>
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
                
                <div class="col-12 col-md-3"></div>
                <div class="form-group col-12 col-md-6">

                    <label for="">Izaberite poziciju banera</label>

                    <select class="form-control" name="bander_category" id="baners">
                        <option selected disabled>Izaberite poziciju banera</option>
                        <option value="lekovi_slovo">Lekovi pretraga</option>
                        <option value="lekovi">Lekovi pozicije</option>
                        <option value="proizvodjaci">Proizvodjaci</option>
                        <option value="nosioci_dozvola">Nosioci dozvola</option>
                    </select>

                </div>

            </div>


            <div class="row slovo" style="display: none;">

                <div class="col-12 col-md-3"></div>
                <div class="form-group col-12 col-md-6">

                    <form action="/admin/dodaj-slova" method="POST">
                        @csrf
                        
                        <label for="">Izaberite slovo</label>
                        <select class="form-control" name="slovo">
                            <option selected disabled>Izaberite slovo</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                            <option value="H">H</option>
                            <option value="I">I</option>
                            <option value="J">J</option>
                            <option value="K">K</option>
                            <option value="L">L</option>
                            <option value="M">M</option>
                            <option value="N">N</option>
                            <option value="O">O</option>
                            <option value="P">P</option>
                            <option value="Q">Q</option>
                            <option value="R">R</option>
                            <option value="S">S</option>
                            <option value="T">T</option>
                            <option value="U">U</option>
                            <option value="V">V</option>
                            <option value="w">w</option>
                            <option value="X">X</option>
                            <option value="Y">Y</option>
                            <option value="Z">Z</option>
                        </select>

                        <div id="slike1">

                        </div>
                        
                        <br>
                        <label>Galerija slika</label><br>
                        <span class="btn btn-primary" onclick="openModal(1)" data-toggle="modal" data-target="#myModal">Izaberi</span>
                        <br><br>

                        <button class="btn btn-success">Sačuvaj</button>
                    </form>

                </div>
            </div>


            <div class="row lekovi" style="display: none;">

                <div class="col-12 col-md-3"></div>
                <div class="form-group col-12 col-md-6">

                    <form action="/admin/dodaj-banere-lek" method="POST">
                        @csrf

                        <div class="row" style="margin-bottom: 10px;">

                            <div class="col-12 col-md-12 lekoviCheck">

                                <select class="form-control" name="lekovi_baner_position">

                                    <option selected disabled>Izaberite poziciju</option>
                                    <option value="1">Pozicija banera 1</option>
                                    <option value="2">Pozicija banera 2</option>
                                    <option value="3">Pozicija banera 3</option>
    
                                </select>
                                
                            </div>

                        </div>

                        <label for="">Izaberite pocetno slovo leka</label>
                        <select class="form-control pocetno_lek">
                            <option selected disabled>Izaberite slovo</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                            <option value="H">H</option>
                            <option value="I">I</option>
                            <option value="J">J</option>
                            <option value="K">K</option>
                            <option value="L">L</option>
                            <option value="M">M</option>
                            <option value="N">N</option>
                            <option value="O">O</option>
                            <option value="P">P</option>
                            <option value="Q">Q</option>
                            <option value="R">R</option>
                            <option value="S">S</option>
                            <option value="T">T</option>
                            <option value="U">U</option>
                            <option value="V">V</option>
                            <option value="w">w</option>
                            <option value="X">X</option>
                            <option value="Y">Y</option>
                            <option value="Z">Z</option>
                        </select>

                        <br>
                        
                        <div class="row checkboxLek"></div>

                        <br>

                        <div id="slike2">

                        </div>

                        <br>

                        <label for="">Link banera</label>
                        <input class="form-control" type="text" name="baner_link">

                        <br>
                        <label>Izaberite baner</label><br>
                        <span class="btn btn-primary" onclick="openModal(2)" data-toggle="modal" data-target="#myModal">Izaberi</span>
                        <br><br>

                        <button class="btn btn-success">Sačuvaj</button>

                    </form>

                </div>
            </div>



            <script>

                $(".pocetno_lek").change(function(){

                    var arrLek = [];
                    var checkContainer = $(".checkboxLek");
                    var cheAll = "<div class='col-12 col-md-12' style='margin-bottom: 15px;'><input type='checkbox' id='checkAll' /> Odaberite sve</div>";

                    $.ajax({
                        url:"/admin/get-ajax-word-lek",
                        method:"POST",
                        data:{
                            _token: "{{ csrf_token() }}",
                            word: $(this).val()
                        },
                        success:function(data){

                            checkContainer.empty();
                            arrLek.push(data);
                            checkContainer.append(cheAll);

                            for (i = 0; i < arrLek[0].length; i++) {

                                var checkbox = '<div class="col-12 col-md-4"><input type="checkbox" name="lekSlovo[]" value="'+arrLek[0][i].id_fab+'"/><span style="margin-left: 10px;">'+  arrLek[0][i].naziv+'</span></div>';
                                checkContainer.append(checkbox);
                                
                            }

                            $("#checkAll").click(function () {
                                $('input:checkbox').not(this).prop('checked', this.checked);
                            });

                        },
                        error:function(data){

                            alert("Nema podataka za ovo slovo");

                        }

                    });

                });
                
            </script>


            <div class="row proizvodjaci" style="display: none;">

                <div class="col-12 col-md-3"></div>
                <div class="form-group col-12 col-md-6">

                    <form action="/admin/dodaj-banere-proizvodjac" method="POST">
                        @csrf

                        <div class="row" style="margin-bottom: 10px;">

                            <div class="col-12 col-md-12 proizvodjaciCheck">

                                <select class="form-control" name="proizvodjaci_baner_position">

                                    <option selected disabled>Izaberite poziciju</option>
                                    <option value="1">Pozicija banera 1</option>
                                    <option value="2">Pozicija banera 2</option>
                                    <option value="3">Pozicija banera 3</option>
    
                                </select>
                                
                            </div>

                        </div>

                        <label for="">Izaberite pocetno slovo proizvođača</label>
                        <select class="form-control pocetno_proizvodjac">
                            <option selected disabled>Izaberite slovo</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                            <option value="H">H</option>
                            <option value="I">I</option>
                            <option value="J">J</option>
                            <option value="K">K</option>
                            <option value="L">L</option>
                            <option value="M">M</option>
                            <option value="N">N</option>
                            <option value="O">O</option>
                            <option value="P">P</option>
                            <option value="Q">Q</option>
                            <option value="R">R</option>
                            <option value="S">S</option>
                            <option value="T">T</option>
                            <option value="U">U</option>
                            <option value="V">V</option>
                            <option value="w">w</option>
                            <option value="X">X</option>
                            <option value="Y">Y</option>
                            <option value="Z">Z</option>
                        </select>

                        <br>
                        
                        <div class="row checkboxProizvodjac"></div>

                        <br>

                        <div id="slike3">

                        </div>

                        <br>

                        <label for="">Link banera</label>
                        <input class="form-control" type="text" name="baner_link">

                        <br>
                        <label>Galerija slika</label><br>
                        <span class="btn btn-primary" onclick="openModal(3)" data-toggle="modal" data-target="#myModal">Izaberi</span>
                        <br><br>

                        <button class="btn btn-success">Sačuvaj</button>

                    </form>

                </div>
            </div>



            <script>

                $(".pocetno_proizvodjac").change(function(){

                    var arrLek = [];
                    var checkContainer = $(".checkboxProizvodjac");
                    var cheAll = "<div class='col-12 col-md-12' style='margin-bottom: 15px;'><input type='checkbox' id='checkAll' /> Odaberite sve</div>";

                    $.ajax({
                        url:"/admin/get-ajax-word-proizvodjac",
                        method:"POST",
                        data:{
                            _token: "{{ csrf_token() }}",
                            word: $(this).val()
                        },
                        success:function(data){

                            checkContainer.empty();
                            arrLek.push(data);
                            checkContainer.append(cheAll);

                            for (i = 0; i < arrLek[0].length; i++) {

                                var checkbox = '<div class="col-12 col-md-4"><input type="checkbox" name="proizvodjacSlovo[]" value="'+arrLek[0][i].id+'"/><span style="margin-left: 10px;">'+  arrLek[0][i].fabrika+'</span></div>';
                                checkContainer.append(checkbox);
                                
                            }

                            $("#checkAll").click(function () {
                                $('input:checkbox').not(this).prop('checked', this.checked);
                            });

                        },
                        error:function(data){

                            alert("Nema podataka za ovo slovo");

                        }

                    });

                });
                
            </script>



            <div class="row nosioci" style="display: none;">

                <div class="col-12 col-md-3"></div>
                <div class="form-group col-12 col-md-6">

                    <form action="/admin/dodaj-banere-nosioci" method="POST">
                        @csrf

                        <div class="row" style="margin-bottom: 10px;">

                            <div class="col-12 col-md-12 proizvodjaciCheck">

                                <select class="form-control" name="nosioci_baner_position">

                                    <option selected disabled>Izaberite poziciju</option>
                                    <option value="1">Pozicija banera 1</option>
                                    <option value="2">Pozicija banera 2</option>
                                    <option value="3">Pozicija banera 3</option>
    
                                </select>
                                
                            </div>

                        </div>

                        <label for="">Izaberite pocetno slovo proizvođača</label>
                        <select class="form-control pocetno_nosioci">
                            <option selected disabled>Izaberite slovo</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                            <option value="H">H</option>
                            <option value="I">I</option>
                            <option value="J">J</option>
                            <option value="K">K</option>
                            <option value="L">L</option>
                            <option value="M">M</option>
                            <option value="N">N</option>
                            <option value="O">O</option>
                            <option value="P">P</option>
                            <option value="Q">Q</option>
                            <option value="R">R</option>
                            <option value="S">S</option>
                            <option value="T">T</option>
                            <option value="U">U</option>
                            <option value="V">V</option>
                            <option value="w">w</option>
                            <option value="X">X</option>
                            <option value="Y">Y</option>
                            <option value="Z">Z</option>
                        </select>

                        <br>
                        
                        <div class="row checkboxNosioci"></div>

                        <br>

                        <div id="slike4">

                        </div>

                        <br>
                        <label>Galerija slika</label><br>
                        <span class="btn btn-primary" onclick="openModal(4)" data-toggle="modal" data-target="#myModal">Izaberi</span>
                        <br><br>

                        <button class="btn btn-success">Sačuvaj</button>
                    </form>

                </div>
            </div>



            <script>

                $(".pocetno_nosioci").change(function(){

                    var arrLek = [];
                    var checkContainer = $(".checkboxNosioci");
                    var cheAll = "<div class='col-12 col-md-12' style='margin-bottom: 15px;'><input type='checkbox' id='checkAll' /> Odaberite sve</div>";

                    $.ajax({
                        url:"/admin/get-ajax-word-nosioci",
                        method:"POST",
                        data:{
                            _token: "{{ csrf_token() }}",
                            word: $(this).val()
                        },
                        success:function(data){

                            checkContainer.empty();
                            arrLek.push(data);
                            checkContainer.append(cheAll);

                            for (i = 0; i < arrLek[0].length; i++) {

                                var checkbox = '<div class="col-12 col-md-4"><input type="checkbox" name="nosiociSlovo[]" value="'+arrLek[0][i].id_nosioca+'"/><span style="margin-left: 10px;">'+  arrLek[0][i].nosilac+'</span></div>';
                                checkContainer.append(checkbox);
                                
                            }

                            $("#checkAll").click(function () {
                                $('input:checkbox').not(this).prop('checked', this.checked);
                            });

                        },
                        error:function(data){

                            alert("Nema podataka za ovo slovo");

                        }

                    });

                });
                
            </script>
            
        </div>
    </div>




    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
        
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Dodajte fotografije u biblioteku</h4>
                </div>
                <div class="modal-body">
                    <div style="border-bottom: 2px solid #c5c5c5; padding-bottom: 10px;">
                        <p><b>Izaberite fotografije sa racunara</b></p>


                        <form action="/admin/dodaj-galeriju-slika" id="upload_form" method="POST" enctype="multipart/form-data">

                            @csrf
                            <input type="file" name="images[]" id="galImg" multiple>
                            <button id="submitGallery" style="margin-top: 10px;" class="btn btn-primary">Sačuvaj</button>
                            <button style="margin-top: 10px;float:right; margin-right: 10px;" class="btn btn-primary galleryImages" slikedata="" onclick="showInDiv(this)">Sačuvaj galeriju</button>
                        </form>
                        

                    </div>

                    <div class="row" id="gallery-images">
                        @if(count($allImages) > 0)
                            @foreach ($allImages as $image)
                                <div class="col-12 col-md-3" style="margin-top: 30px; height: 120px; width: 120px; overflow: hidden; display: inline-flex;">
                                <img class="img-responsive modal-img" id="{{ $image->id }}" name="{{ $image->image_name }}" onclick="getImageValue({{ $image->id }})" src="{{ asset('images_gallery/'.$image->image_name) }}">
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Zatvori</button>
                </div>
            </div>
        
        </div>
    </div>




    <script>
    
        $("#baners").on("change", function(){

            var baners = $(this).val();
            var lekovi_slovo = $(".slovo");
            var lekovi = $(".lekovi");
            var proizvodjaci = $(".proizvodjaci");
            var nosioci = $(".nosioci");
            var footer = $(".footer");


            switch(baners){

                case "lekovi_slovo":

                    lekovi_slovo.show();
                    lekovi.hide();
                    nosioci.hide();
                    proizvodjaci.hide();
                    footer.hide();
                    break;

                case "lekovi":
                    
                    lekovi_slovo.hide();
                    proizvodjaci.hide();
                    nosioci.hide();
                    footer.hide();
                    lekovi.show();
                    break;

                case "proizvodjaci":

                    lekovi_slovo.hide();
                    lekovi.hide();
                    nosioci.hide();
                    footer.hide();
                    proizvodjaci.show();
                    break;

                case "nosioci_dozvola":

                    lekovi_slovo.hide();
                    lekovi.hide();
                    proizvodjaci.hide();
                    footer.hide();
                    nosioci.show();
                    break;

                case "footer":

                    lekovi_slovo.hide();
                    lekovi.hide();
                    proizvodjaci.hide();
                    footer.show();
                    nosioci.hide();

            }

        });

    </script>


    <script>

        var imageArray = [];

        function openModal(modalID){

            var showImage = $(".galleryImages").attr("slikedata", modalID);

        }



        function getImageValue(id){

            var data = $('#' + id).attr('name');

            if(imageArray.includes(data) == false){

                imageArray.push(data);
                $("#"+id).css("border", "4px solid red");

            }else{
                var index = imageArray.indexOf(data);
                if (index > -1) {
                imageArray.splice(index, 1);
                $("#"+id).css("border", "none");

                }
            }

        }

        function showInDiv(el){

            var arrayLength = imageArray.length;

            var slID = $(el).attr("slikedata");

            $("#slike"+slID).empty();

            for (var i = 0; i < arrayLength; i++) {

                var img = "<img class='img-responsive' src='../images_gallery/"+imageArray[i]+"'/>";
                var input = "<input type='hidden' name='galleryImages[]' value="+imageArray[i]+" />";

                $("#slike"+slID).append(img);
                $("#slike"+slID).append(input);
            }

        }

    </script>


    <script>
        
        $(document).ready(function(){

            $('#upload_form').on('submit', function(event){
                event.preventDefault();
                $.ajax({
                    url:"/admin/dodaj-galeriju-slika",
                    method:"POST",
                    data:new FormData(this),
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success:function(data)
                    {

                        console.log(data);
                        $("#gallery-images").fadeOut(200);

                        $("#gallery-images").empty();

                        for(var i = 0; i < data.length; i++){
                           $('#gallery-images').append('<div class="col-12 col-md-3" style="margin-top: 30px; height: 120px; width: 120px; overflow: hidden; display: inline-flex;"><img class="img-responsive modal-img" id="'+ data[i]['id'] +'" name="'+ data[i]['image_name'] +'" onclick="getImageValue('+ data[i]['id'] +')" src="/images_gallery/' + data[i]['image_name'] + '"></div>');   
                        }

                        $("#gallery-images").fadeIn(4000);

                        $("#galImg").val("");

                    },
                    error: function(data){

                        console.log(data);
                    }
                })
            });

        });

    </script>

@endsection