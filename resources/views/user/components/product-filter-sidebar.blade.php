<div class="mb-5">
    <h5 class="mb-3">Danh mục</h5>
    @foreach ($categories as $item)
        <p class="ml-3">
            @if ($category->slug == $item->slug)
                <i class="fas fa-circle text-warning"></i>
            @endif
            <a class="text-dark" href="{{ route('product_list', ['slug' => $item->slug, 'page' => null]) }}">{{ $item->name }}</a>
        </p>

        @foreach ($item->children as $subItem)
            <p class="ml-5">
                @if ($category->slug == $subItem->slug)
                    <i class="fas fa-circle text-warning"></i>
                @endif
                <a class="text-dark" href="{{ route('product_list', ['slug' => $subItem->slug, 'page' => null]) }}">{{ $subItem->name }}</a>
            </p>
        @endforeach
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