@extends('admin.layouts.master')

@section('title', 'Tạo sản phẩm')

@section('content')
    <div class="container py-3">
        <div class="row">
            <div class="col-12 col-lg-3">
                @include('admin.layouts.sidebar')
            </div>
            <div class="col-12 col-lg-9">
                <h1 class="mb-4">Tạo sản phẩm</h1>
                <form action="{{ route('admin.products.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Tiêu đề sản phẩm <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label>Danh mục cha</label>
                        <select name="parent_id" class="form-control">
                            <option value="">-- Không --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <button type="submit" class="btn btn-primary">Tạo</button>
                </form>
            </div>
        </div>
    </div>
@endsection