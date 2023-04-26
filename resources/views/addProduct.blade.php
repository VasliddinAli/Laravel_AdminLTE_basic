@extends('main')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/products">Products</a></li>
                        <li class="breadcrumb-item active">Add Product</li>
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
                        <h3 class="card-title">Add Product</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('add_product') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="inputName">Product Name</label>
                                <input type="text" name="name" id="inputName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="price">Product Price</label>
                                <input type="number" name="price" id="price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="image">Product image</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                            <input type="hidden" name="user_id" class="form-control" value="1">
                            <div class="row">
                                <div class="col-12">
                                    <a href="#" class="btn btn-secondary">Cancel</a>
                                    <input type="submit" value="Create new Product" class="btn btn-success float-right">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection