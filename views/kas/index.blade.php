@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="mb-4">Data Kas Harian</h3>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('kas.create') }}" class="btn btn-primary mb-3">
            <i class="fas fa-plus"></i> Tambah Data
        </a>
        
        <form action="{{ route('kas.index') }}" method="GET" class="mb-3 d-flex">
    <input type="text" name="cari" class="form-control me-2" placeholder="Cari keterangan..." value="{{ request('cari') }}">
    <button class="btn btn-primary" type="submit">Cari</button>
</form>

        <div class="alert alert-info">
    <strong>Total Saldo:</strong> Rp {{ number_format($totalSaldo, 0, ',', '.') }}
</div>


        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                    <th>Pemasukan</th>
                    <th>Pengeluaran</th>
                    <th>Saldo</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kas as $item)
                    <tr>
                        <td>{{ $item->tanggal }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td>{{ number_format($item->pemasukan) }}</td>
                        <td>{{ number_format($item->pengeluaran) }}</td>
                        <td>{{ number_format($item->saldo) }}</td>
                        <td>Rp {{ number_format($item->pemasukan, 0, ',', '.') }}</td>
                        <td>
                         <a href="{{ route('kas.edit', $item->id) }}" class="btn btn-sm btn-warning">
                           <i class="fas fa-edit"></i> Edit
                             </a>

                            <form action="{{ route('kas.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash-alt"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
