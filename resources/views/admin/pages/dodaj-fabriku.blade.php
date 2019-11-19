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

        
        <form action="/admin/dodaj-fabrike" method="POST">
            @csrf
            <div class="col-12 col-md-1"></div>

            <div class="col-12 col-md-10">

                <div class="row">
                    <div class="col-12 col-md-12">
                        <h4>Dodaj novu fabriku</h4>
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

                        <label for="">Ime fabrike</label>
                        <input class="form-control" type="text" name="fabrika">

                    </div>

                    <div class="form-group col-12 col-md-4">

                        <label for="">Link</label>
                        <input class="form-control" type="text" name="link">

                    </div>

                    <div class="form-group col-12 col-md-4">

                        <label for="">Telefon</label>
                        <input class="form-control" type="text" name="telefon">

                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-12 col-md-4">

                        <label for="">Email</label>
                        <input class="form-control" type="text" name="email">

                    </div>

                    <div class="form-group col-12 col-md-4">

                        <label for="">Adresa</label>
                        <input class="form-control" type="text" name="adresa">

                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-12 col-md-4">

                        <label for="">Opis</label>
                        <textarea class="form-control" name="opis" cols="30" rows="10"></textarea>

                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-12 col-md-4">

                        <label>Logo</label><br>
                        <span class="btn btn-primary" onclick="openModal(5)" data-toggle="modal" data-target="#myModal">Izaberi</span>
                        <br><br>
                        <div id="slike5">

                        </div>

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