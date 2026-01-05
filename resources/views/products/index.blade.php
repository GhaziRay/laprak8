<div class="container">
    <h1>Daftar Produk</h1>

    @if(Auth::user()->role === 'admin')
        <a href="{{ route('products.create') }}" class="btn btn-primary">
            Tambah Produk
        </a>
    @endif
    <table>
        </table>
</div>
