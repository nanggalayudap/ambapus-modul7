<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detail Peminjaman #{{ $peminjaman->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 space-y-4">
                <p><strong>ID Peminjaman:</strong> #{{ $peminjaman->id }}</p>
                <p><strong>Nama Peminjam:</strong> {{ $peminjaman->user->name ?? 'N/A' }}</p>
                <p><strong>Judul Buku:</strong> {{ $peminjaman->buku->judul ?? 'N/A' }}</p>
                <p><strong>Tanggal Pinjam:</strong> {{ $peminjaman->tanggal_pinjam }}</p>
                <p><strong>Status:</strong> {{ $peminjaman->status }}</p>
            </div>
        </div>
    </div>
</x-app-layout>