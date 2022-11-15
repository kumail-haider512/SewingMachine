@extends('layouts.admin')
@section('title', 'Brand')
@section('nav-title', 'Brand')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form class="validate-form" action="{{ route('admin.brand.save', $brand->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card ">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">edit</i>
                        </div>
                        <h5 class="card-title">Edit brand</h5>
                    </div>
                    <div class="card-body ">
                    	<div class="row">
                    		<div class="col-12">
                    			<div class="form-group">
                    				<label for="image">Image</label>
                    				<input type="file" name="image" id="image" class="dropify" data-default-file="{{ asset($brand->image) }}" accept=".png, .jpg, .jpeg, .gif, .svg">
                    				@error('name')
                    					<span class="invalid-feedback">
                    						<strong>{{ $message }}</strong>
                    					</span>
                    				@enderror

                    			</div>
                    		</div>
                    		<div class="col-12">
                    			<div class="form-group">
                    				<label for="name">Name</label>
                    				<input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $brand->name) }}" autocomplete="off">
                    				@error('name')
                    					<span class="invalid-feedback">
                    						<strong>{{ $message }}</strong>
                    					</span>
                    				@enderror
                    			</div>
                    		</div>
                    	</div>
                    </div>
                    <div class="card-footer mt-4">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js')

@endsection