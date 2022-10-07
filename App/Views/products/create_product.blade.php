@extends('layouts.master')

<!-- Truyền giá trị cho những phần thay đổi -->
<!-- yield(tên)  ~ section(tên, giá trị) -->
@section('title', 'Tạo mới')

<!-- yield(tên) ~ section(tên) nội dung endsection -->
@section('content-title', 'Create Product')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-9">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Thêm mới sản phẩm<small></small></h3>
                </div>
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="products_name">Loại hàng</label>
                            <select class="form-control" name="categories_id" id="categories_id ">
                                <option value="0">Lựa chọn loại hàng</option>
                                <?= $htmlOption ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="products_name">Tên sản phẩm</label>
                            <input type="text" name="products_name" class="form-control" id="products_name">
                        </div>

                        <div class="form-group">
                            <label for="price">Giá</label>
                            <input type="text" name="price" class="form-control" id="price">
                        </div>
                        <div class="form-group">

                            <div class="form-group">
                                <label for="image">Hình ảnh</label>
                                <input type="file" name="image" id="image">
                            </div>

                            <div class="form-group">
                                <label for="content">Nội dung</label>
                                <textarea name="content" id="content" cols="30" class="form-control" rows="6" placeholder="vui lòng nhập nội dung"></textarea>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                </form>
            </div>
        </div>
        <div class="col-md-6">
        </div>
    </div>
</div>
@endsection