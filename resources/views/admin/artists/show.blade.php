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

        <div class="btn-group gap-2">
            <a href="{{ route('admin.artists.edit', $artist) }}" class="btn btn-outline-secondary border-secondary text-uppercase fw-bold small">
                <i class="fa-solid fa-pencil"></i>
            </a>
            <button type="button" class="btn btn-outline-danger text-uppercase fw-bold small" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $artist->id }}">
                <i class="fa-solid fa-trash"></i>
            </button>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">

            @if ($artist->img_url)
                <div class="mb-5 text-center bg-dark rounded border border-secondary p-2 shadow-sm">
                    <img src="{{ asset('storage/' . $artist->img_url) }}" alt="{{ $artist->name }}" class="img-fluid rounded-1" style="max-height: 500px; object-fit: contain;">
                </div>
            @endif

            <div class="mb-5">
                <h5 class="text-uppercase fw-bold text-first mb-4 border-bottom border-secondary pb-2 small">Biografia</h5>
                <p class="fs-5 lh-lg text-secondary italic">
                    {{ $artist->bio ?? 'Nessuna biografia disponibile per questo artista.' }}
                </p>
            </div>

            <div class="mb-5">
                <h5 class="text-uppercase fw-bold text-first mb-4 border-bottom border-secondary pb-2 small">Brani al Festival</h5>
                
                @if($artist->songs->count() > 0)
                    <div class="list-group list-group-flush border-top border-secondary-subtle">
                        @foreach($artist->songs->sortByDesc(fn($song) => $song->edition->year) as $song)
                            <div class="list-group-item bg-transparent border-secondary-subtle py-4 px-0">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <h6 class="text-first text-uppercase fw-bold mb-1 fs-5 italic">{{ $song->title }}</h6>
                                        <span class="text-secondary small text-uppercase">Edizione {{ $song->edition->year }}</span>
                                    </div>
                                    <div class="col-md-3 text-md-center mt-2 mt-md-0">
                                        <span class="{{ $song->position <= 3 && $song->position > 0 ? 'text-warning fw-bold' : 'text-secondary' }} text-uppercase small">
                                            <i class="fa-solid fa-trophy me-2 small"></i>{{ $song->position ? $song->position . '° Posto' : 'N.C.' }}
                                        </span>
                                    </div>
                                    <div class="col-md-3 text-end mt-2 mt-md-0">
                                        <a href="{{ route('admin.songs.show', $song) }}" class="text-secondary hover-first">
                                            <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-secondary italic opacity-50">Nessun brano registrato.</p>
                @endif
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal{{ $artist->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-light text-dark border-0">
            <div class="modal-body p-5 text-center">
                <i class="fa-solid fa-circle-exclamation fa-3x text-danger mb-4"></i>
                <h4 class="mb-3 text-dark text-uppercase fw-bold">Eliminare l'artista?</h4>
                <p class="text-secondary">Sei sicuro di voler rimuovere <strong>{{ $artist->name }}</strong>?</p>
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
@endsection