@extends('admin.layouts.dashboardLayout')

@section('content')
    <div class="container-fluid py-5 px-lg-5 bg-main min-vh-100 text-light">

        <div class="d-flex justify-content-end align-items-center mb-3">
            <a href="{{ route('admin.artists.index') }}" class="btn btn-outline-secondary btn-sm text-uppercase">
                Torna alla lista
            </a>
        </div>

        <div class="d-flex justify-content-between align-items-end mb-5 border-bottom border-secondary pb-4">
            <div>
                <h1 class="display-4 text-first text-uppercase fw-semibold m-0">{{ $artist->name }}</h1>
                <p class="text-secondary mb-0 text-uppercase small tracking-widest">
                    <i class="fa-solid fa-microphone-lines me-2"></i>{{ $artist->type }}
                </p>
            </div>

            <div class="btn-group">
                <a href="{{ route('admin.artists.edit', $artist) }}" class="btn btn-outline-dark border-secondary">
                    <i class="fa-solid fa-pencil"></i>
                </a>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                    data-bs-target="#deleteModal{{ $artist->id }}">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">

                @if ($artist->img_url)
                    <div class="card bg-main border-0 mb-5">
                        <div class="card-body p-0 overflow-hidden rounded-1">
                            <img src="{{ asset('storage/' . $artist->img_url) }}" alt="{{ $artist->name }}" class="w-100"
                                style="max-height: 400px; object-fit: contain;">
                        </div>
                    </div>
                @endif

                <div class="px-2">
                    <h5 class="text-uppercase fw-bold text-secondary mb-4 border-bottom border-secondary pb-2">Biografia
                    </h5>
                    <p class="fs-5 lh-lg text-muted opacity-75">
                        {{ $artist->bio }}
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteModal{{ $artist->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-light text-dark border-0">
                <div class="modal-body p-5 text-center">
                    <i class="fa-solid fa-circle-exclamation fa-3x text-danger mb-4"></i>
                    <h4 class="mb-3 text-dark">Eliminare l'artista?</h4>
                    <p class="text-secondary">Sei sicuro di voler rimuovere <strong>{{ $artist->name }}</strong>?</p>
                    <div class="d-flex justify-content-center gap-2 mt-4">
                        <button type="button" class="btn btn-outline-secondary px-4 text-uppercase fw-bold small"
                            data-bs-dismiss="modal">Annulla</button>
                        <form action="{{ route('admin.artists.destroy', $artist) }}" method="POST">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger px-4 text-uppercase fw-bold small">Elimina</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
