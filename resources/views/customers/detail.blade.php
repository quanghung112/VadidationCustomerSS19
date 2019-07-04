@extends('index')

@section('content')
    <h2 class="h2" >
        Trang ca nhan
    </h2>
    <div class="col">
    <img src="{{asset('storage/'.$customer->avatar)}}" class="rounded float-left" height="300px" width="250px">
    <ul class="list-group">
        <li class="list-group-item active">Name: {{$customer->name}}</li>
        <li class="list-group-item">Age: {{$customer->age}}</li>
        <li class="list-group-item">Email: {{$customer->email}}</li>
        <li class="list-group-item">Address: {{$customer->address}}</li>
    </ul>
    </div>
    <a  href="{{route('Customer.edit',['id'=>$customer->id])}} "><button type="button" class="btn btn-primary" >Uprade Information</button></a>
    <a href="{{route('Customer.list')}}"><button type="button" class="btn btn-primary" >Back</button></a>
@endsection
