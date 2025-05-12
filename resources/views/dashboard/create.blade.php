<x-layouts.app :title="__('Add Product')">
    <div class="relative mb-6 w-full">
        <flux:heading size="xl">Products</flux:heading>
        <flux:subheading size="lg" class="mb-6">Manage data Products</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <flux:input class="mb-4" label="Nama Produk" name="name" required />
        <flux:input class="mb-4" label="Slug" name="slug" required />
        <flux:textarea class="mb-4" label="Deskripsi" name="description" />
        <flux:input class="mb-4" label="SKU" name="sku" required />
        <flux:input class="mb-4" label="Harga" name="price" type="number" step="0.01" required />
        <flux:input class="mb-4" label="Stok" name="stock" type="number" required />

        <flux:select class="mb-4" label="Kategori Produk" name="product_category_id">
            <option value="">-- Pilih Kategori --</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name_categories }}</option>
            @endforeach
        </flux:select>

        <flux:input class="mb-4" label="URL Gambar" name="image_url" />
        <flux:checkbox class="mb-4" name="is_active" label="Aktif" checked />

        <flux:button type="submit" color="primary">
            Tambah Produk
        </flux:button>
    </form>
</x-layouts.app>