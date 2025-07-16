@extends('layouts.app')

@section('content')
    <h4>Edit Data Kas</h4>

   <form action="{{ route('kas.update', $kas->id) }}" method="POST">


        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ $kas->tanggal }}" required>
        </div>

        <div class="mb-3">
            <label for="keterangan">Keterangan</label>
            <input type="text" name="keterangan" class="form-control" value="{{ $kas->keterangan }}" required>
        </div>

        <div class="mb-3">
            <label for="pemasukan">Pemasukan</label>
            <input type="number" name="pemasukan" class="form-control" value="{{ $kas->pemasukan }}" required>
        </div>

        <div class="mb-3">
            <label for="pengeluaran">Pengeluaran</label>
            <input type="number" name="pengeluaran" class="form-control" value="{{ $kas->pengeluaran }}" required>
        </div>

        <div class="mb-3">
            <label for="saldo">Saldo</label>
            <input type="number" name="saldo" class="form-control" value="{{ $kas->saldo }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('kas.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
