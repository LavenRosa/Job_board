@extends('testing1.main')
@section('content')

{{--Alert message--}}

@if (session('success'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="container">
    <div class="row">
        <div class="table">
            <table style="border: 1px solid blueviolet; width:500px;">
                <thead>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th>Cateogry</th>
                    <th>Detail</th>
                    <th>Image</th>
                    <th colspan="2" style="text-align: center">Action</th>
                </thead>
            @foreach ($list as $item )
                <tbody>
                    <td>{{$item->item_name}}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->category }}</td>
                    <td>{{ $item->detail }}</td>
                    <td><img class="card-image-top" style="width: 100px; height:100px;" src="{{asset('storage/'.$item->image)}}" alt=""></td>
                    <td><a href="{{route('testing1.edit', $item->id)}}"><button class="btn btn-primary" type="submit">Edit</button></a></td>
                    <td><a href="{{route('testing1.delete', $item->id)}}"><button class="btn btn-danger" type="submit">Delete</button></a></td>
                </tbody>
            @endforeach
            </table>
        </div>
        </div>
    </div>
</div>
@endsection
