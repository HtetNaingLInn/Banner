

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




                {{--            <div class="col-lg-4">--}}
                {{--                <div class="page-header-breadcrumb">--}}
                {{--                    <ul class="breadcrumb-title">--}}
                {{--                        <li class="breadcrumb-item">--}}
                {{--                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>--}}
                {{--                        </li>--}}
                {{--                        <li class="breadcrumb-item"><a href="#!">Basic Components</a>--}}
                {{--                        </li>--}}
                {{--                        <li class="breadcrumb-item"><a href="#!">Accordion</a>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </div>--}}
                {{--            </div>--}}
            </div>
        </div>
        <!-- Page-header end -->

        <!-- Page-body start -->
        <div class="page-body">
            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <div>
                            <img src="{{asset('files/assets/images/avatar-1.jpg')}}" class="w-25" alt=""> <br>
                            <input type="file" class="mt-2">
                        </div>
                    </div>
                    <div class="col-7">
                        <div>
                            <div class="form-group row align-items-center">
                                <label for="address" class="col-sm-4 col-form-label">Default Status</label>
                                <div class="col-sm-8">
                                    <i class="feather-toggle-left toggle-icon" style="font-size: 30px"></i>
                                </div>
                            </div>
                            <div class="form-group from d-none row">
                                <label for="address" class="col-sm-4 col-form-label">From</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control w-50">
                                </div>
                            </div>
                            <div class="form-group to d-none row">
                                <label for="address" class="col-sm-4 col-form-label">To</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control w-50">
                                </div>
                            </div>
                            <div class="form-group d-block row">
                                <label for="address" class="col-sm-4 col-form-label">Link</label>
                                <div class="col-sm-8">
                                    <input type="text" class="w-50">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start">
                                <button class="btn btn-info">Save</button>
                            </div>

                        </div>
                    </div>
                </div>
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

        toggle_icon.addEventListener("click",function(){
            let addClass = this.classList.toggle("add");
            let hasClass = this.classList.contains("add");


            if(hasClass){
                toggle_icon.classList.remove("feather-toggle-left");
                toggle_icon.classList.add("feather-toggle-right");
                from.classList.add("show");
                to.classList.add("show")

            }else{
                from.classList.remove("show")
                to.classList.remove("show")
               toggle_icon.classList.remove("feather-toggle-right");
               toggle_icon.classList.add("feather-toggle-left");
            }

        })
    </script>

@endsection
