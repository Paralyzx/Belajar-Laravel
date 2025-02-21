@extends('master')
@section('title','master courts')
@section('content title','master courts')
@section('content')
<div class="col-md-8">
    <a class="btn btn-sm btn-success " href="">Add Data</a>
    <table class="table table-stripped">
        <tr>
        <th>No</th>
        <th>User ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Phone</th>   
        <th>Date</th> 
        <th>Court ID</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Pay Total</th>
        <th>Option</th>
        </tr> 
        @forelse ($transaction as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->transaction->id}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->date}}</td>
            <td>{{$data->court->id}}</td>
            <td>{{$data->starttime}}</td>
            <td>{{$data->endtime}}</td>
            <td>{{$data->paytotal}}</td>
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