@extends('master')
@section('title','master project ')
@section('content title','master project')
@section('content')
<div class="col-md-8">
    <a class="btn btn-sm btn-success " href="">Add Data</a>
    <table class="table table-stripped">
        <tr>
        <th>No</th>
        <th>Court Type</th>
        <th>Court Name</th>  
        </tr> 
        @forelse ($types as $data)
        <tr>
            <td></td>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->name}}</td>
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