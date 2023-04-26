@extends('main')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/products">Products</a></li>
                        <li class="breadcrumb-item active">Product Edit</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">General</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('update_product', $item->id) }}">
                            @csrf
                            <div class="form-group">
                                <label for="inputName">Product Name</label>
                                <input type="text" name="name" id="inputName" class="form-control" value="{{ $item->name }}">
                            </div>
                            <div class="form-group">
                                <label for="inputClientCompany">Price</label>
                                <input type="number" name="price" id="inputClientCompany" class="form-control" value="{{ $item->price }}">
                            </div>
                            <div class="form-group">
                                <label for="inputProjectLeader">Image</label>
                                <input type="text" name="image" id="inputProjectLeader" class="form-control" value="{{ $item->image }}">
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="/products" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Image View</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <img src="{{ $item->image }}" width="400px">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection