@extends('index')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <h2 class="h2">
                Upgrade Customer
            </h2>
            <form action="{{route('Customer.upgrade',['id'=>$customer->id])}}" class="text-left" method="post" enctype="multipart/form-data">
                @csrf
                <label for="inputTitle">Avatar</label>
                <div class="form-group">
                    <img src="{{asset('storage/'.$customer->avatar)}}" id="blah" alt="your image" width="100" height="100" />
                    <input type="file" class="form-control-file" name="avatar" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                </div>
                <div class="form-group">
                    <label for="inputTitle">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$customer->name}}" required>
                    <d class=""></d>
                    @if($errors->has('name'))
                        *{{$errors->first('name')}}
                    @endif
                </div>
                <div class="form-group">
                    <label for="inputTitle">Age</label>
                    <input type="number" class="form-control" name="age" value="{{$customer->age}}" required>
                    @if($errors->has('age'))
                        *{{$errors->first('age')}}
                    @endif
                </div>
                <div class="form-group">
                    <label for="inputTitle">Email</label>
                    <input type="text" class="form-control" name="email" value="{{$customer->email}}" required >
                    @if($errors->has('email'))
                        *{{$errors->first('email')}}
                    @endif
                </div>
                <div class="form-group">
                    <label for="inputTitle">Address</label>
                    <input type="text" class="form-control" name="address" value="{{$customer->address}}" required>
                    @if($errors->has('address'))
                        *{{$errors->first('address')}}
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <hr>
            <a href="{{route('Customer.detail',['id'=>$customer->id])}}">< Back</a>
        </div>
    </div>
@endsection
