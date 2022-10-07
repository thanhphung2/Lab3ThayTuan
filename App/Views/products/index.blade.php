@extends('layouts.master')

<!-- Truyền giá trị cho những phần thay đổi -->
<!-- yield(tên)  ~ section(tên, giá trị) -->
@section('title', 'Danh sách')

<!-- yield(tên) ~ section(tên) nội dung endsection -->
@section('content-title', 'Product')
@section('content')
<div class="content">
    <div class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Danh sách sản phẩm</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Views</th>
                            <th>Img</th>
                            <th>Categories</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href="products/detail"><button class="btn btn-primary">Chi tiết</button></a></td>  
                        </tr>
                    </tbody>
            </div>
        </div>
    </div>
</div>
@endsection