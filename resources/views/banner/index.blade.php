

@extends('layouts.admin.master')



@section('content')
        <div class="container col-md-12">
            <div class="card">
                <a href="{{Route('banner.create')}}">
                <button class="btn btn-info mt-2 mx-2 btn-round">Create</button>
                </a>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Image</th>
                            <th scope="col">From</th>
                            <th scope="col">To</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $banner)
                          <tr>
                            <td>{{$banner->id}}</td>
                            <td>
                                <img src="{{asset('banner/'.$banner->image)}}" alt="" class="w-25">
                            </td>
                            <td>{{$banner->from}}</td>
                            <td>{{$banner->to}}</td>
                            @if ($banner->status == 1 )
                                <td>
                                    <button class="btn btn-warning btn-sm btn-round">Active</button>
                                </td>

                            @else
                                <td>
                                    <button class="btn btn-dark btn-sm btn-round">Default</button>
                                </td>
                            @endif

                            <td>
                                <a href="{{Route('banner.edit',$banner->id)}}" class="btn btn-info btn-sm btn-round">Edit</a>
                                <a href="{{Route('banner.destroy',$banner->id)}}" class="btn btn-danger btn-sm btn-round">Delete</a>

                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
@endsection
