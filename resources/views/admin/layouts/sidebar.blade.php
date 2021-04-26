<div class="list-group mb-3">
    <a href="#" class="list-group-item list-group-item-action">
        <i class="fas fa-chart-line"></i> Dashboard
    </a>
    <a href="{{ route('admin.products.index') }}" class="list-group-item list-group-item-action">
        <i class="fas fa-box"></i> Sản phẩm
    </a>
    <a href="{{ route('admin.categories.index') }}" class="list-group-item list-group-item-action">
        <i class="fas fa-tags"></i> Danh mục
    </a>
    <a href="{{ route('admin.orders.index') }}" class="list-group-item list-group-item-action">
        <i class="fas fa-clipboard-list"></i> Đơn hàng
    </a>
    <a href="{{ route('admin.users.index') }}" class="list-group-item list-group-item-action">
        <i class="fas fa-users"></i> Khách hàng
    </a>
</div>