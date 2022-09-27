@extends('layouts.provider')

@section('content')
@if ($message = session('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif
    <div class="card">
        <div class="card-header">
            <h1>Bookings Page</h1>
            <hr>
        </div>
        <div class="card-body table-responsive ">
            <table class="table table-bordered table-striped overflow-auto">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Saloon</th>
                        <th>Date</th>
                        <th>Phone</th>
                        <th>Paid</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody >
                    @foreach($orders as $item)
                    <tr class="border">
                        <td>{{ $item->id }}</td>
                        <td >{{ $item->name }}</td>
                        <td >{{ $item->s_name }}</td>
                        <td >{{ $item->date }}</td>
                        <td><a href="tel:{{ $item->u_phone }}">{{ $item->u_phone }}</a></td>
                        <td>{{ $item->paid }} / {{$item->payment}}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <a href="{{ url('invoice/'.$item->id) }}" class="btn btn-success">Invoice</a>
                            <a href="{{ url('edit-order/'.$item->id) }}" class="btn btn-primary">Edit</a>
                            <form method="POST" style="display: inline;" action="{{route('delete-order',$item->id)}}">
                                @csrf
                                @method('delete')
                                <button type="submit" style="display: inline;" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
