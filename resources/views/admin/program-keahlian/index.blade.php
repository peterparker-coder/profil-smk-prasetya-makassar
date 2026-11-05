@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-1">Program Keahlian</h4>
            <p class="text-muted mb-0">Kelola data program keahlian sekolah.</p>
        </div>

        <a href="{{ route('admin.program-keahlian.create') }}"
           class="btn btn-primary">
            Tambah Program
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Foto</th>
                            <th>Nama Program</th>
                            <th>Status</th>
                            <th width="180">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($programKeahlians as $program)
                            <tr>
                                <td>{{ $loop->iteration + $programKeahlians->firstItem() - 1 }}</td>
                                <td>
                                    @if ($program->foto)
                                        <img src="{{ asset('storage/' . $program->foto) }}"
                                             width="70" height="50"
                                             style="object-fit: cover;">
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>{{ $program->nama_program }}</td>
                                <td>
                                    @if ($program->status)
                                        <span class="badge bg-success">Aktif</span>
                                    @else
                                        <span class="badge bg-secondary">Nonaktif</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.program-keahlian.edit', $program) }}"
                                       class="btn btn-sm btn-warning">
                                        Edit
                                    </a>

                                    <form action="{{ route('admin.program-keahlian.destroy', $program) }}"
                                          method="POST"
                                          class="d-inline"
                                          onsubmit="return confirm('Yakin ingin menghapus program ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted py-4">
                                    Belum ada data program keahlian.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{ $programKeahlians->links() }}
        </div>
    </div>
</div>
@endsection