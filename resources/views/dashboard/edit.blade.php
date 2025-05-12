<x-layouts.app :title="'Edit Produk'">
    <form action="{{ route('products.update', $products->id) }}" method="POST">
        @csrf
        @method('PUT')

        <flux:input label="Nama Produk" name="name" value="{{ old('name', $products->name) }}" required />
        <flux:input label="Slug" name="slug" value="{{ old('slug', $products->slug) }}" required />
        <flux:textarea label="Deskripsi" name="description">{{ old('description', $products->description) }}
        </flux:textarea>
        <flux:input label="SKU" name="sku" value="{{ old('sku', $products->sku) }}" required />
        <flux:input label="Harga" name="price" type="number" step="0.01" value="{{ old('price', $products->price) }}"
            required />
        <flux:input label="Stok" name="stock" type="number" value="{{ old('stock', $products->stock) }}" required />

        <flux:select label="Kategori Produk" name="product_category_id">
            <option value="">-- Pilih Kategori --</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id == $products->product_category_id ? 'selected' : '' }}>
                {{ $category->name_categories }}
            </option>
            @endforeach
        </flux:select>

        <flux:input label="URL Gambar" name="image_url" value="{{ old('image_url', $products->image_url) }}" />
        <flux:checkbox name="is_active" label="Aktif" :checked="$products->is_active" />

        <flux:button type="submit" color="primary">
            Update Produk
        </flux:button>
    </form>
</x-layouts.app>