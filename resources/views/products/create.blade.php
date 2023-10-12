@extends('layouts.app')
  
@section('title', 'Create Product')
  
@section('contents')
    <h1 class="mb-0">Add Product</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="col">
                <input type="text" name="harga" class="form-control" placeholder="Harga">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="kode_product" class="form-control" placeholder="Kode Product">
            </div>
            <div class="col">
                <textarea class="form-control" name="deskripsi" placeholder="Deskripsi"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection