@extends('index')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <h2 class="h2">
            Add New Customer
        </h2>
        <form class="text-left" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="inputTitle">Name</label>
                <input type="text" class="form-control" name="name" required>
                <d class="text-danger">
                    @if($errors->has('name'))
                        *{{$errors->first('name')}}
                    @endif
                </d>
            </div>
            <div class="form-group">
                <label for="inputTitle">Age</label>
                <input type="number" class="form-control" name="age" required>
                <d class="text-danger">
                    @if($errors->has('age'))
                        *{{$errors->first('age')}}
                    @endif
                </d>
            </div>
            <div class="form-group">
                <label for="inputTitle">Email</label>
                <input type="text" class="form-control" name="email" required>
                <d class="text-danger">
                    @if($errors->has('email'))
                        *{{$errors->first('email')}}
                    @endif
                </d>
            </div>
            <div class="form-group">
                <label for="inputTitle">Address</label>
                <input type="text" class="form-control" name="address" required>
                <d class="text-danger">
                    @if($errors->has('address'))
                        *{{$errors->first('address')}}
                    @endif
                </d>
            </div>
            <div class="form-group">
                <label >Choose File</label>
                <input type="file" class="form-control-file" name="avatar">
                <d class="text-danger">
                    @if($errors->has('avatar'))
                        *{{$errors->first('avatar')}}
                    @endif
                </d>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <hr>
        <a href="{{route('Customer.list')}}">Back</a>
    </div>
</div>
@endsection
