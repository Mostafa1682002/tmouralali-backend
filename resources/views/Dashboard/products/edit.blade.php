@extends('Dashboard.layouts.master')
@section('title')
    تعديل منتج
@endsection
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> تعديل منتج</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}" class="default-color">الرئيسيه</a></li>
                    <li class="breadcrumb-item active"> تعديل منتج</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection




@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <form action="{{ route('admin.products.update', $product->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="col">
                                <label for="title">اسم المنتج</label>
                                <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                                @error('name')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <label for="title">سعر المنتج</label>
                                <input type="number" name="price" step="any" class="form-control"
                                    value="{{ $product->price }}">
                                @error('price')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="title">حالة المنتج</label>
                                <select name="active" id="title" class="form-control p-1">
                                    <option @selected($product->active == 1) value="1">مفعل</option>
                                    <option @selected($product->active == 0) value="0">غير مفعل</option>
                                </select>
                                @error('active')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">وصف المنتج<span class="text-danger">*</span></label>
                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="10">{{ $product->description }}</textarea>
                            @error('description')
                                <p class="alert alert-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <label for="main_image">الصوره الاساسية للمنتج</label>
                                <input type="file" accept="image/*" name="main_image" class="form-control"
                                    value="">
                                @error('main_image')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                                <div>
                                    <img src="{{ $product->main_image }}" alt="" style="width: 60px;height:60px">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="images">صور المنتج</label>
                                <input type="file" name="images[]" multiple accept="image/*" class="form-control"
                                    value="">
                                @error('images')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                                <div style="display: flex;gap:10px;">
                                    @foreach ($product->images as $image)
                                        <img src="{{ $image->image }}" alt="" style="width: 60px;height:60px">
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <br>
                        <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">تعديل</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- row closed -->
@endsection
@section('js')
@endsection
