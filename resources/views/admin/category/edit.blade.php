@extends('admin.layouts.master')

@section('title', 'Tạo danh mục')

@section('content')
    <div class="container py-3">
        <div class="row">
            <div class="col-12 col-lg-3">
                @include('admin.layouts.sidebar')
            </div>
            <div class="col-12 col-lg-9">
                <h1 class="mb-4">Sửa danh mục</h1>
                <form action="{{ route('admin.categories.update', $category) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Tên danh mục <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                    </div>
                    <div class="form-group">
                        <label>Danh mục cha</label>
                        <select name="parent_id" class="form-control">
                            <option value="">-- Không --</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}"
                                    @if ($item->id == $category->parent_id) selected @endif
                                >{{ $item->name }}</option>
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
                    <button type="submit" class="btn btn-success">Sửa</button>
                </form>
            </div>
        </div>
    </div>
@endsection