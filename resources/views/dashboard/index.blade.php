<x-layouts.app :title="__('Dashboard')">
    <div class="relative mb-6 w-full">
        <flux:heading size="xl">Products</flux:heading>
        <flux:subheading size="lg" class="mb-6">Manage data Products</flux:heading>
            <flux:separator variant="subtle" />
    </div>
    <div class="flex justify-between items-center mb-4">
        <div>
            <flux:input icon="magnifying-glass" placeholder="Search Products" />
        </div>
        <div>
            <a href="products/create" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Add New Product
            </a>
        </div>
    </div>
    <table class="table-fixed w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="border border-gray-300 px-4 py-2 text-left">Nama Produk</th>
                <th class="border border-gray-300 px-4 py-2 text-left">Harga</th>
                <th class="border border-gray-300 px-4 py-2 text-left">Stok</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
            <tr>
                <td class="border border-gray-300 px-4 py-2">{{ $product->name }}</td>
                <td class="border border-gray-300 px-4 py-2">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $product->stock }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="border border-gray-300 px-4 py-2 text-center">Tidak ada produk tersedia.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</x-layouts.app>