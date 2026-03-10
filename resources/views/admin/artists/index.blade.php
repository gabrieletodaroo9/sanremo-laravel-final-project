@extends('admin.layouts.dashboardLayout')

@section('content')
<div class="container-fluid py-5 px-lg-5 bg-main min-vh-100 text-light">
    
    <div class="d-flex justify-content-between align-items-center mb-5 border-bottom border-secondary pb-4">
        <h1 class="h4 text-first text-uppercase display-6 fw-bold m-0">Gestione Artisti</h1>
        <a href="{{ route('admin.artists.create') }}" class="btn btn-secondary shadow-sm">
            <i class="fas fa-plus"></i>
        </a>
    </div>

    <div class="table-responsive">
        <table class="table bg-transparent table-borderless align-middle mb-0">
            <thead class="text-first text-uppercase small border-bottom border-secondary">
                <tr>
                    <th class="py-3 bg-transparent" style="width: 80px;">Foto</th>
                    <th class="py-3 bg-transparent">Nome</th>
                    <th class="py-3 bg-transparent d-none d-lg-table-cell">Tipo</th>
                    <th class="py-3 pe-3 text-end bg-transparent">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach($artists as $artist)
                    <tr class="border-bottom border-secondary-subtle">
                        <td class="py-3 bg-transparent">
                            @if($artist->img_url)
                                <img src="{{ asset('storage/' . $artist->img_url) }}" alt="{{ $artist->name }}" class="rounded-circle shadow-sm border border-secondary" style="width: 45px; height: 45px; object-fit: cover;">
                            @else
                                <div class="rounded-circle bg-dark d-flex align-items-center justify-content-center border border-secondary" style="width: 45px; height: 45px;">
                                    <i class="fa-solid fa-user text-secondary small"></i>
                                </div>
                            @endif
                        </td>
                        <td class="py-3 fw-bold bg-transparent">
                            <span class="text-first text-uppercase italic">{{ $artist->name }}</span>
                        </td>
                        <td class="py-3 text-secondary text-capitalize bg-transparent d-none d-lg-table-cell">
                            <small class="opacity-75">{{ $artist->type }}</small>
                        </td>
                        <td class="py-3 text-end bg-transparent">
                            <div class="btn-group gap-3">
                                <a href="{{ route('admin.artists.show', $artist) }}" class="text-secondary hover-first">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.artists.edit', $artist) }}" class="text-secondary hover-first">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>
                                <button type="button" class="bg-transparent border-0 text-secondary hover-first p-0" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $artist->id }}">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <div class="modal fade" id="deleteModal{{ $artist->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content bg-light text-dark border-0">
                                <div class="modal-body p-5 text-center">
                                    <i class="fa-solid fa-circle-exclamation fa-3x text-danger mb-4"></i>
                                    <h4 class="mb-3 text-dark text-uppercase fw-bold">Eliminare l'artista?</h4>
                                    <p class="text-secondary">Sei sicuro di voler rimuovere <strong>{{ $artist->name }}</strong>? Questa azione è irreversibile.</p>
                                    <div class="d-flex justify-content-center gap-2 mt-4">
                                        <button type="button" class="btn btn-outline-secondary px-4 text-uppercase fw-bold small" data-bs-dismiss="modal">Annulla</button>
                                        <form action="{{ route('admin.artists.destroy', $artist) }}" method="POST">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-danger px-4 text-uppercase fw-bold small">Elimina</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection