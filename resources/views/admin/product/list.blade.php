@extends('layouts.admin')
@section('title', 'List')
@section('nav-title', 'List')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon"><i class="material-icons">list</i></div>
                    <h5 class="card-title">Products List</h5>
                </div>
                <div class="card-body">
                	<div class="row">
			            <div class="col-md-12">
			                <div class="toolbar text-right">
			                	<a href="{{route('admin.product.add')}}" class="btn btn-success">+ Add Product</a>
			                </div>
			            </div>
                	</div>
                	<div class="material-datatables mt-3">
                        <table class="datatables table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Porduct Code</th>
                                    <th>availability</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach ($list as $item)
                                <tr>
                                	<td>{{$item->id}}</td>
                                	<td>{{ $item->created_at->format('d/m/Y') }}</td>
                                    <td>{{$item->name}}</td>
                                	<td><img src="{{asset($item->image)}}" width="100%"></td>
                                    <td>{{$item->code}}</td>
                                    <td>{{$item->availability}}</td>
                                	<td>{!! Str::limit($item->description,200)!!}</td>
                                	<td>
                                		<a href="{{ route('admin.product.edit', $item->id) }}" rel="tooltip" class="btn btn-success btn-round" data-original-title="Edit" title="Edit">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <button type="button" onclick="deleteAlert('{{ route('admin.product.delete', $item->id) }}')" rel="tooltip" class="btn btn-danger btn-round delete-btn" data-original-title="Delete" title="Delete">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach		
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection