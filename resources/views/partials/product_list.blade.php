<div class="product-grid" id="product-list">
    @foreach($perfumes as $perfume)
        <a href="{{ route('product.detail', ['id' => $perfume->id]) }}" class="product-item-link">
            <div class="product-item">
                <img src="http://127.0.0.1:8000/assets/images/anhnuochoa/all/{{ $perfume->image }}" alt="{{ $perfume->tenSanPham }}" class="perfume-image">
                <h2>{{ $perfume->thuongHieu }}</h2>
                <p>{{ $perfume->name }}</p>
                <span>{{ number_format($perfume->giaTienLon) }} ₫</span>
            </div>
        </a>
    @endforeach
</div>
