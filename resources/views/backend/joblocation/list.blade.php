@extends('layouts.backend')
@section('title','List Page')
@section('content')
<div class="card shadow mb-4 p-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Job Location</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $joblocations as $joblocation )
                    <tr>
                        <td>{{ $joblocation->id }}</td>
                        <td>{{ $joblocation->name }}</td>
                        <td style="display: flex; justify-content:space-evenly;">
                            <a href="{{ route('JLEdit', $joblocation->id )}}" class="btn btn-primary btn-sm btn-icon-split" style="width:70px;">
                                <span class="text">Edit</span>
                            </a>
                            <a href="{{ route('JLDelete', $joblocation->id )}}" class="btn btn-danger btn-sm btn-icon-split" style="width:70px; margin-left:5px;">
                                <span class="text">Delete</span>
                            </a>
                          </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
