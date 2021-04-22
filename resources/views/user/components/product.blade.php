<div class="col-6 col-md-3 mb-3">
    <img class="w-100 rounded" src="{{ $product->getThumbnail() }}">
    <h5 class='mt-2 font-weight-bold'>{{ $product->title }}</h5>
    <p class='mb-0 font-weight-bold text-danger'>{{ price($product->price) }}</p>
    @if ($product->cost)
        <p class='mb-0 text-muted'>
            <del>{{ price($product->cost) }}</del>
        </p>
    @endif
</div>