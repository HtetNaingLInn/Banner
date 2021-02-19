

@extends('layouts.admin.master')



@section('content')
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-end">
                        <input type="text" class="" style="width: 20%;"><i class="feather icon-search search-list"></i>
                    </div>
                </div>

                <div class="col-12">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4 class="">Company Information</h4>
                        </div>
                    </div>

                </div>





            </div>
        </div>
        <a href="{{Route('banner.index')}}">
            <button class="btn btn-info btn-round my-3">Back</button>
        </a>
        <!-- Page-header end -->

        <!-- Page-body start -->
        <div class="page-body">
            <div class="col-12">
                <form  method="POST" action="{{Route('banner.store')}}" enctype="multipart/form-data">
                    @csrf
                <div class="row">

                    <div class="col-4">
                        <div>
                            <img src="" class="w-25" alt="" id="preview"> <br>
                            <input type="file" class="mt-2" name="image" id="file" accept="image/*" onchange="previewImage();">
                        </div>
                    </div>
                    <div class="col-7">
                        <div>
                            <div class="form-group row align-items-center">
                                <label for="address" class="col-sm-4 col-form-label">Default Status</label>
                                <div class="col-sm-8">
                                    <i class="feather-toggle-left toggle-icon toggle" style="font-size: 30px" onclick="toggleChange()"></i>
                                    <input type="hidden" id="onoff" name="status">
                                </div>
                            </div>
                            <div class="form-group from d-none row">
                                <label for="address" class="col-sm-4 col-form-label">From</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control w-50" name="from">
                                </div>
                            </div>
                            <div class="form-group to d-none row">
                                <label for="address" class="col-sm-4 col-form-label">To</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control w-50" name="to" >
                                </div>
                            </div>
                            <div class="form-group d-block row">
                                <label for="address" class="col-sm-4 col-form-label">Link</label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-50" name="link">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start">
                                <button class="btn btn-info" type="submit">Save</button>
                            </div>

                        </div>
                    </div>

                </div>
            </form>
            </div>
        </div>
        <!-- Page-body end -->
    </div>
    </div>
    <div id="styleSelector">

    </div>

    <style>
        .show{
            display: block !important;
        }
    </style>

    <script>
            let toggle_icon = document.querySelector(".toggle-icon");
            let from = document.querySelector(".from");
            let to = document.querySelector(".to");
            let onoff = document.getElementById("onoff");


function toggleChange(){


        toggle_icon.classList.toggle("feather-toggle-left");
        toggle_icon.classList.toggle("feather-toggle-right");
        from.classList.toggle("show_date");
        to.classList.toggle("show_date");
        let onoff_value = onoff.value;
          onoff.value = null;
         onoff.value = onoff_value == 0 ? 1 : 0;



}








        function previewImage(){
            var file = document.getElementById("file").files;
            if(file.length>0){
                var fileReader =new FileReader();
                fileReader.onload=function(event){
                    document.getElementById("preview").setAttribute("src",event.target.result);
                }
                fileReader.readAsDataURL(file[0]);
            }
        }



    </script>

@endsection
