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
        
        <form action="/admin/izmeni-event" method="POST">
            @csrf
            <div class="col-12 col-md-1"></div>

            <div class="col-12 col-md-10">

                <div class="row">
                    <div class="col-12 col-md-12">
                        <h4>Izmeni Dogadjaj</h4>
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

                <input type="hidden" name="id" value="{{ $data->id }}" />

                <div class="row">
                    
                    <div class="col-12 col-md-2"></div>
                    
                    <div class="col-12 col-md-8">
                        
                        <div class="row">

                            <div class="form-group col-12 col-md-6">

                                <label for="">Izabrani jezik</label>
                                <select class="form-control" name="lang">

                                    <option @if($data->lang == "en") selected @endif value="en">Engleski</option>
                                    <option @if($data->lang == "de") selected @endif value="de">Nemački</option>
                                    <option @if($data->lang == "sr") selected @endif value="sr">Srpski</option>
                                    
                                </select>
        
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-12 col-md-6">

                                <label for="">Naslov</label>
                                <input class="form-control" type="text" name="title" value="{{ $data->title }}">
        
                            </div>

                            <div class="form-group col-12 col-md-6">

                                <label for="">Podnaslov</label>
                                <input class="form-control" type="text" name="subtitle" value="{{ $data->subtitle }}">
        
                            </div>
                            
                            <div class="form-group col-12 col-md-6">
                        
                                <label for="">Datum</label>
                                <input class="form-control" type="date" name="date" value="{{ $data->date }}">
        
                            </div>

                            <div class="form-group col-12 col-md-6">
                        
                                <label for="">Vreme od</label>
                                <input class="form-control" type="time" name="time_from" value="{{ $data->time_from }}">
        
                            </div>

                            <div class="form-group col-12 col-md-6">
                        
                                <label for="">Vreme do</label>
                                <input class="form-control" type="time" name="time_to" value="{{ $data->time_to }}">
        
                            </div>

                            <div class="form-group col-12 col-md-6">
                        
                                <label for="">Link</label>
                                <input class="form-control" type="text" name="link" value="{{ $data->link }}">
        
                            </div>

                            <div class="form-group col-12 col-md-6">

                                <label for="">Dogadjaj prosao ili ne</label>
                                <select class="form-control" name="b_n">
                                    <option value="" selected disabled>Izaberite</option>

                                    <option @if($data->b_n == "sledi") selected @endif value="sledi">Uskoro sledi</option>
                                    <option @if($data->b_n == "prosao") selected @endif value="prosao">Prosao</option>

                                </select>

                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-12 col-md-12">

                                <label>Tekst</label>
                                <textarea class="textarea" name="text" placeholder="Unesite tekst ovde" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $data->text }}</textarea>

                            </div>

                        </div>


                        <div class="row">

                            <div class="form-group col-12 col-md-6">
                    
                                <label>Glavna slika</label><br>
                                <span class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Izaberi</span>
                                <div id="glavna-slika" style="margin-top: 10px;">
                                    
                                    @if (isset($data->main_image) && !empty($data->main_image))
                                        <img class='img-responsive' src='../../images_gallery/{{ $data->main_image }}'/>
                                        <input type='hidden' name='mainImage' value="{{ $data->main_image }}" />
                                    @endif
                                    
                                </div>

                            </div>

                            <div class="form-group col-12 col-md-6">
                        
                                <label>Galerija slika</label><br>
                                <span class="btn btn-primary" data-toggle="modal" data-target="#myModal">Izaberi</span>
                                
                                <div id="row slike1">
                                    
                                    <?php

                                        $gall = [];
                                        if(isset($data->image_gallery) && !empty($data->image_gallery)) {
                                            $gall = explode(',', $data->image_gallery);
                                        }

                                        $videos = [];
                                        if(isset($data->video_gallery) && !empty($data->video_gallery)) {
                                            $videos = explode(',', $data->video_gallery);
                                        }

                                    ?>

                                    @if (isset($gall) && !empty($gall))
                
                                        <?php
                                            $n = 200;
                                        ?>
                
                                        @foreach ($gall as $image)
                                            <?php
                                                $n++;
                                            ?>
                
                                            <div class="col-12 col-md-3" id="deleteGal{{ $n }}" style='margin-top: 10px;'>
                                                <img class='img-responsive' src='../../images_gallery/{{ $image }}'/>
                                                <input type='hidden' name='galleryImages[]' value="{{ $image }}" />
                                                <div class="btn btn-danger" id="{{ $n }}" onclick="deleteGal(this)" style="position: absolute; top: 0px; left: 0px;">-</div>
                                            </div>
                                        @endforeach
                                        
                                    @endif
                
                                </div>
                                
                                
                                <div id="slike"></div>
        
                                </div>

                        </div>

                        <br>
                        

                        <div class="row">

                            <div class="col-12 col-md-6">

                                <label>Dodaj video</label><br>
                                <div class="btn btn-success add-video-link"><b>+</b></div>
                                <div class="video-box">
        
                                </div>

                            </div>
                        
                        </div>
                        <br>
                        
                        @if (isset($videos) && !empty($videos))
                                <?php
                                    $rb = 50;
                                ?>
                            @foreach ($videos  as $video)
                            
                                <div class='row' id='{{ $rb }}'>
                                    <div class='col-11 col-md-11'> 
                                        <input id='"+rb+"' style='margin-top: 15px;' class='form-control input' type='text' name='video_link[]' placeholder='Unesite link' value="{{ $video }}">
                                    </div>
                                    <div class='col-1 col-md-1 text-right'>
                                        <div style='margin-top: 14px;' class='btn btn-danger' onclick='remove(this)' id='{{ $rb }}'>-</div>
                                    </div>
                                </div>  
                                <?php $rb++; ?>
                            @endforeach
                        @endif
                        
                        <br>

                        
                        <div class="row">

                            <div class="col-12 col-md-6">

                                <label for="">Status dogadjaja</label>
                                <select class="form-control" name="status">

                                    <option @if($data->status == "1") selected @endif value="1">Aktivan</option>
                                    <option @if($data->status == "0") selected @endif value="0">Neaktivan</option>
                                    
                                </select>
        
                            </div>

                        </div>
                        
                        <br>

                        <div class="row">

                            <div class="col-12 col-md-6">

                                <button class="btn btn-success">Sačuvaj</button>
        
                            </div>

                        </div>

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
                            <button style="margin-top: 10px;float:right; margin-right: 10px;" class="btn btn-primary galleryImages" onclick="showInDiv()">Sačuvaj galeriju</button>
                        </form>
                        

                    </div>

                    <div class="row" id="gallery-images">
                        @if(count($allImages) > 0)
                            @foreach ($allImages as $image)
                                <div class="col-12 col-md-3" style="margin-top: 30px; height: 120px; width: 120px; overflow: hidden; display: inline-flex;">
                                <img class="img-responsive modal-img" id="{{ $image->id }}" name="{{ $image->image_name }}" onclick="getImageValue({{ $image->id }})" src="../../images_gallery/{{ $image->image_name }}">
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


    <div id="myModal1" class="modal fade" role="dialog">
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


                        <form action="/admin/dodaj-galeriju-slika" id="upload_form1" method="POST" enctype="multipart/form-data">

                            @csrf
                            <input type="file" name="images[]" id="galImg1" multiple>
                            <button id="submitGallery" style="margin-top: 10px;" class="btn btn-primary">Sačuvaj</button>
                            <button style="margin-top: 10px; float:right;" class="btn btn-primary mainImage" onclick="showInDivMain()">Sačuvaj glavnu sliku</button>
                        </form>
                        

                    </div>

                    <div class="row" id="gallery-images1">
                        @if(count($allImages) > 0)
                            @foreach ($allImages as $image)
                                <div class="col-12 col-md-3" style="margin-top: 30px; height: 120px; width: 120px; overflow: hidden; display: inline-flex;">
                                <img class="img-responsive modal-img bor" id="1{{ $image->id }}" name="{{ $image->image_name }}" onclick="getImageValue1({{ $image->id }})" src="../../images_gallery/{{ $image->image_name }}">
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
        var imageArray1 = [];

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



        function getImageValue1(id){

            var data = $('#' + id).attr('name');
            $(".bor").css("border", "none");

            if(imageArray1.includes(data) == false){
                $("#1"+id).css("border", "none");

                imageArray1 = [];
                imageArray1.push(data);
                $("#1"+id).css("border", "4px solid red");

            }else{

                imageArray1 = [];

                imageArray1.push(data);
                $("#1"+id).css("border", "none");
                
            }


        }


        function showInDiv(){

            var arrayLength = imageArray.length;

            $("#slike").empty();

            for (var i = 0; i < arrayLength; i++) {

                var img = "<img class='img-responsive' src='../../images_gallery/"+imageArray[i]+"'/>";
                var input = "<input type='hidden' name='galleryImages[]' value="+imageArray[i]+" />";

                $("#slike").append(img);
                $("#slike").append(input);
            }

        }
        

        function showInDivMain(){

            var arrayLength1 = imageArray1.length;

            $("#glavna-slika").empty();

            for (var i = 0; i < arrayLength1; i++) {

                var img1 = "<img class='img-responsive' src='../../images_gallery/"+imageArray1[i]+"'/>";
                var input1 = "<input type='hidden' name='mainImage' value="+imageArray1[i]+" />";

                $("#glavna-slika").append(img1);
                $("#glavna-slika").append(input1);
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
                    // dataType:'JSON',
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success:function(data)
                    {
                        //console.log(data);
                        $("#gallery-images").fadeOut(200);

                        $("#gallery-images").empty();

                        for(var i = 0; i < data.length; i++){
                            $('#gallery-images').append('<div class="col-12 col-md-3" style="margin-top: 30px; height: 120px; width: 120px; overflow: hidden; display: inline-flex;"><img class="img-responsive modal-img" id="'+ data[i]['id'] +'" name="'+ data[i]['image_name'] +'" onclick="getImageValue('+ data[i]['id'] +')" src="/public/images_gallery/' + data[i]['image_name'] + '"></div>');   
                        }

                        $("#gallery-images").fadeIn(4000);

                        $("#galImg").val("");
                    }
                })
            });

        });


        $(document).ready(function(){

            $('#upload_form1').on('submit', function(event){
                event.preventDefault();
                $.ajax({
                    url:"/admin/dodaj-galeriju-slika",
                    method:"POST",
                    data:new FormData(this),
                    // dataType:'JSON',
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success:function(data)
                    {
                        console.log(data);
                        $("#gallery-images1").fadeOut(200);

                        $("#gallery-images1").empty();

                        for(var i = 0; i < data.length; i++){
                        $('#gallery-images1').append('<div class="col-12 col-md-3" style="margin-top: 30px; height: 120px; width: 120px; overflow: hidden; display: inline-flex;"><img class="img-responsive modal-img" id="'+ data[i]['id'] +'" name="'+ data[i]['image_name'] +'" onclick="getImageValue1('+ data[i]['id'] +')" src="/public/images_gallery/' + data[i]['image_name'] + '"></div>');   
                        }

                        $("#gallery-images1").fadeIn(4000);

                        $("#galImg1").val("");
                    }
                })
            });

        });

    </script>


    <script>

        var rb = 0;
        $(".add-video-link").click(function(){
            rb++;
            var input = "<div class='row' id='"+rb+"'><div class='col-11 col-md-11'> <input id='"+rb+"' style='margin-top: 15px;' class='form-control input' type='text' name='video_link[]' placeholder='Unesite link'></div> <div class='col-1 col-md-1 text-right'><div style='margin-top: 14px;' class='btn btn-danger' onclick='remove(this)' id='"+rb+"'>-</div></div></div>";
            $(".video-box").append(input);
        });

        function remove(el){
            $("div#" + el.id).remove();
        }

    </script>
    <script>
                    
        function deleteGal(el){
            $("#deleteGal"+el.id).remove();
        }

    </script>


@endsection