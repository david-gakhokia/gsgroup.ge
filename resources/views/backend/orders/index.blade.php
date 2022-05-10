@extends('backend.layouts.app')

@section('title', 'მაგიდები')

@section('content')
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show mb-2 " role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>შეკვეთების ცხრილი</h4>
                </div>

                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>

                            <th scope="col">#ID</th>
                            <th scope="col">შეკვეთის ადგილი</th>
                            <th scope="col">მომხმარებელი</th>
                            <th scope="col">სურათი</th>
                            <th scope="col">დასახელება</th>
                            <th scope="col">ფასი</th>
                            <th scope="col">რაოდენობა</th>
                            <th scope="col">ჯამი</th>
                            <th scope="col">მოქმედება</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($orders as $order)
                        <tr>
                                <th scope="row">{{ $order->id }}</th>
                                <th scope="row">{{ $order->id }}</th>
                                {{-- <td>{{ $order->plname }} / მაგიდა №{{ $order->name }}  </td> --}}
                                <td>
                                  <div class="badge badge-success badge-shadow">
                                    <i class="far fa-user"></i>
                                    {{ $order->user_id}}
                                  </div>
                                </td>
                                <td><img src="{{ asset($order->image)}}" width="100px"  /></td>
                                <td>{{ $order->pname}}</td>
                                <td>{{ $order->price }}</td>
                                <td>{{ $order->quantity }}</td>
                                <td>{{ $order->price * $order->quantity}}</td>
                                <td scope="row">
                                {{-- <a href="{{ url('admin/order/edit/'.$order->id) }}" class="btn btn-icon btn-primary">
                                    <i class="far fa-edit"></i>
                                </a> --}}
                                    <a href="{{ url('order/destroy/'.$order->id) }}"  class="btn btn-icon btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                        </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
            </div>
        </div>
    </div>

@endsection

