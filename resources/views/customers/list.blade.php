@extends('index')

@section('content')

    <div class="container">
        <div class="col-12">
            <div class="row">
                <h1>Danh Sách Khách Hàng</h1>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Avatar</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Application</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse( $customers as $key => $customer)
                        <tr>
                            <th class="align-middle">{{$key+1}}</th>
                            <td class="align-middle">
                                <a href="{{route('Customer.detail',['id'=>$customer->id])}}">
                                    <img src="{{asset('storage/'.$customer->avatar)}}" width="100" height="100">
                                </a>
                            </td>
                            <td class="align-middle">{{$customer->name}}</td>
                            <td class="align-middle">{{$customer->age}}</td>
                            <td class="align-middle">{{$customer->email}}</td>
                            <td class="align-middle">{{$customer->address}}</td>
                            <td class="align-middle">
                                <a href="{{route('Customer.delete',['id'=>$customer->id])}}">
                                    <button type="submit" class="btn btn-secondary">Delete</button>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>Not customer</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{$customers->links()}}
            </div>
        </div>
    </div>
@endsection


