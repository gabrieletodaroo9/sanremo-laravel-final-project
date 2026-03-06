@extends('admin.layouts.dashboardLayout')

@section('content')
    <div class="container-fluid py-5 px-lg-5 bg-main min-vh-100 text-light">

        <div class="d-flex justify-content-end align-items-center mb-3">
            <a href="{{ route('admin.songs.index') }}" class="btn btn-outline-secondary btn-sm text-uppercase">
                Torna alla lista
            </a>
        </div>

        <div class="d-flex justify-content-between align-items-end mb-5 border-bottom border-secondary pb-4">
            <div>
                <h1 class="display-4 text-first text-uppercase fw-semibold m-0">{{ $song->title }}</h1>
                <p class="text-secondary mb-0 text-uppercase small tracking-widest">
                    <i class="fa-solid fa-calendar-check me-2"></i>Sanremo {{ $song->edition->year }}
                    @if($song->position)
                        <span class="ms-3 text-first"><i class="fa-solid fa-trophy me-2"></i>{{ $song->position }}° Posto</span>
                    @endif
                </p>
            </div>

            <div class="btn-group">
                <a href="{{ route('admin.songs.edit', $song) }}" class="btn btn-outline-dark border-secondary">
                    <i class="fa-solid fa-pencil"></i>
                </a>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                    data-bs-target="#deleteModal{{ $song->id }}">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">

                @if ($song->edition->logo_url)
                    <div class="card bg-main border-0 mb-5 text-center">
                        <div class="card-body p-0 overflow-hidden rounded-1">
                            <img src="{{ asset('storage/' . $song->edition->logo_url) }}" alt="Logo Edizione" class="w-100"
                                style="max-height: 150px; object-fit: contain; opacity: 0.8;">
                        </div>
                    </div>
                @endif

                <div class="row g-4 mb-5">

                    <div class="col-md-6">
                        <div class="px-2">
                            <h5 class="text-uppercase fw-bold text-secondary mb-3 border-bottom border-secondary pb-2">Cantanti</h5>
                            <div class="d-flex flex-wrap gap-2">
                                @foreach($song->artists as $artist)
                                    <span class="fs-5 text-first fw-bold">{{ $artist->name }}{{ !$loop->last ? ',' : '' }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="px-2">
                            <h5 class="text-uppercase fw-bold text-secondary mb-3 border-bottom border-secondary pb-2">Compositori</h5>
                            <div class="fs-5 text-first fw-bold">
                                {{ $song->collaborators ?? 'Nessun collaboratore inserito' }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="px-2 mt-5">
                    <h5 class="text-uppercase fw-bold text-secondary mb-4 border-bottom border-secondary pb-2">Testo Integrale</h5>
                    <p class="fs-5 lh-lg text-muted opacity-75" style="white-space: pre-line; font-family: 'Georgia', serif;">
                        {{ $song->lyrics ?? 'Testo non disponibile.' }}
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteModal{{ $song->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-light text-dark border-0">
                <div class="modal-body p-5 text-center">
                    <i class="fa-solid fa-circle-exclamation fa-3x text-danger mb-4"></i>
                    <h4 class="mb-3 text-dark">Eliminare il brano?</h4>
                    <p class="text-secondary">Sei sicuro di voler rimuovere <strong>{{ $song->title }}</strong>?</p>
                    <div class="d-flex justify-content-center gap-2 mt-4">
                        <button type="button" class="btn btn-outline-secondary px-4 text-uppercase fw-bold small"
                            data-bs-dismiss="modal">Annulla</button>
                        <form action="{{ route('admin.songs.destroy', $song) }}" method="POST">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger px-4 text-uppercase fw-bold small">Elimina</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection