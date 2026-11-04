
@extends('layouts.admin')

@section('title', 'Data Guru dan Tenaga Kependidikan')
@section('breadcrumb', 'Admin / Data Guru dan Tenaga Kependidikan')

@section('content')
<div class="container-fluid py-3">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Data Guru dan Tenaga Kependidikan</h2>
            <p class="text-secondary mb-0">Kelola data guru dan tenaga kependidikan sekolah.</p>
        </div>

        <a href="{{ route('admin.tenaga-pendidik.create') }}"
           class="btn btn-primary">
            Tambah Data
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>No.</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Kategori</th>
                            <th>Jabatan</th>
                            <th>Mata Pelajaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($tenagaPendidiks as $data)
                            <tr>
                                <td>{{ $loop->iteration + ($tenagaPendidiks->currentPage() - 1) * $tenagaPendidiks->perPage() }}</td>

                                <td>
                                    @if($data->foto)
                                        <img src="{{ asset('storage/' . $data->foto) }}"
                                             width="50" height="50"
                                             class="rounded object-fit-cover"
                                             alt="Foto {{ $data->nama }}">
                                    @else
                                        <span class="text-secondary">Tidak ada foto</span>
                                    @endif
                                </td>

                                <td class="fw-semibold">{{ $data->nama }}</td>
                                <td>{{ $data->nip ?? '-' }}</td>
                                <td>{{ $data->kategori }}</td>
                                <td>{{ $data->jabatan }}</td>
                                <td>{{ $data->mata_pelajaran ?? '-' }}</td>

                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('admin.tenaga-pendidik.edit', $data->id) }}"
                                           class="btn btn-sm btn-warning">
                                            Edit
                                        </a>

                                        <form action="{{ route('admin.tenaga-pendidik.destroy', $data->id) }}"
                                              method="POST"
                                              onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-sm btn-danger">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center py-4 text-secondary">
                                    Belum ada data guru dan tenaga kependidikan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                {{ $tenagaPendidiks->links() }}
            </div>
        </div>
    </div>

</div>
@endsection
