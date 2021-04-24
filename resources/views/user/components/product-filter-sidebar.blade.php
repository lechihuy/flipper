<div class="mb-5">
    <h5 class="mb-3">Danh mục</h5>
    <p class="ml-3">
        @if (! request()->query('category_id'))
            <i class="fas fa-circle text-warning"></i>
        @endif
        <a class="text-dark" href="{{ request()->fullUrlWithQuery(['category_id' => null, 'page' => null]) }}">Tất cả</a>
    </p>
    @foreach ($categories as $item)
        <p class="ml-3">
            @if (request()->query('category_id') == $item->id)
                <i class="fas fa-circle text-warning"></i>
            @endif
            <a class="text-dark" href="{{ request()->fullUrlWithQuery(['category_id' => $item->id, 'page' => null]) }}">{{ $item->name }}</a>
        </p>
    @endforeach
</div>
<div>
    <h5 class="mb-3">Chọn mức giá</h5>
    <p class="ml-3">
        @if (! request()->query('price'))
            <i class="fas fa-circle text-warning"></i>
        @endif
        <a class="text-dark" href="{{ request()->fullUrlWithQuery(['price' => null, 'page' => null]) }}">Tất cả</a>
    </p>
    @foreach(config('price_filter') as $price => $text)
        <p class="ml-3">
            @if (request()->query('price') == $price)
                <i class="fas fa-circle text-warning"></i>
            @endif
            <a class="text-dark" href="{{ request()->fullUrlWithQuery(['price' => $price, 'page' => null]) }}">{{ $text }}</a>
        </p>
    @endforeach 
</div>