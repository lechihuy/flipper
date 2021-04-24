@php
    $pinnedProduct = pinned_product()
@endphp
@if ($pinnedProduct)
<div class="jumbotron jumbotron-fluid">
    <div class="container-fluid container-lg">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1 class="display-4">{{ $pinnedProduct->title }}</h1>
                <p class="lead text-muted">{{ $pinnedProduct->description }}</p>
                <a href="{{ route('product_detail', ['slug' => $pinnedProduct->slug]) }}" class="btn btn-dark text-warning btn-lg my-3">Xem ngay</a>            
            </div>
            <div class="col-12 col-md-6">
               <a href="{{ route('product_detail', ['slug' => $pinnedProduct->slug]) }}"><img src="{{ $pinnedProduct->getThumbnail() }}" alt="{{ $pinnedProduct->title }}" class="w-100"></a>
            </div>  
        </div>
    </div>
</div>
@endif