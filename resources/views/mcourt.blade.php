@extends('master')
@section('title','master courts')
@section('content title','master courts')
@section('content')
<div class="col-md-8">
    <a class="btn btn-sm btn-success " href="">Add Data</a>
    <table class="table table-stripped">
        <tr>
        <th>No</th>
        <th>Court Type</th>
        <th>Court Name</th>
        <th>Price</th>    
        <th>Option</th>
        </tr> 
        @forelse ($courts as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->type->name}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->price}}</td>
            <td>
                <a class="btn btn-sm btn-warning" href="">Edit</a>
                <a class= "btn btn-sm btn-danger" href="">Delete</a>
            </td>
        </tr>
        @empty
        <div class="alert alert-danger">
            Belum ada data
            </div>
        @endforelse
        
    </table> 
</div>
<div class="col-md-4">

</div>

@endsection