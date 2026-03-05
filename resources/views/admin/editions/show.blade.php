@extends('admin.layouts.dashboardLayout')

@section('content')
    <div class="container-fluid py-5 px-lg-5 bg-main min-vh-100 text-light">

        <div class="d-flex justify-content-end align-items-center">
            <a href="{{ route('admin.editions.index') }}" class="btn btn-outline-secondary btn-sm text-uppercase">
                Torna alla lista
            </a>
        </div>

        <div class="d-flex justify-content-between align-items-end mb-5 border-bottom border-secondary pb-4">
            <div>
                <h1 class="display-4 text-first text-uppercase fw-semibold m-0">Sanremo {{ $edition->year }}</h1>
                <p class="text-secondary mb-0"><i class="fa-solid fa-location-dot me-2"></i>{{ $edition->location }}</p>
            </div>

            <div class="btn-group">
                <a href="{{ route('admin.editions.edit', $edition) }}" class="btn btn-outline-dark border-secondary">
                    <i class="fa-solid fa-pencil"></i>
                </a>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                    data-bs-target="#deleteModal{{ $edition->id }}">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </div>
        </div>

        <div class="text-center mb-5">
            <img src="{{ asset('storage/' . $edition->logo_url) }}" alt="Logo" class="img-fluid"
                style="max-height: 150px;">
        </div>

        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card bg-dark-subtle border-0 shadow text-light">
                    <div class="card-body p-4">
                        <h5 class="text-uppercase small fw-bold text-secondary mb-4 border-bottom border-secondary pb-2">
                            Dettagli</h5>
                        <div class="mb-4">
                            <label class="d-block small text-secondary text-uppercase">Conduttore</label>
                            <span class="fs-3 fw-semibold text-first">{{ $edition->host }}</span>
                        </div>
                        <div class="mb-0">
                            <label class="d-block small text-secondary text-uppercase">Co-conduzione</label>
                            <p class="mb-0 fw-bold fs-6 text-secondary">{{ $edition->co_hosts}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
    <div class="card bg-dark-subtle border-0 shadow text-light h-100">
        <div class="card-body p-4">
            <h5 class="text-uppercase small fw-bold text-secondary mb-4 border-bottom border-secondary pb-2">
                Brani in gara
            </h5>

            @if ($edition->songs->count() > 0)
                <div class="list-group list-group-flush">
                    @foreach ($edition->songs as $song)
                        <div class="list-group-item bg-transparent border-secondary-subtle px-0 py-3">
                                <div>
                                    <h6 class="text-first text-uppercase fw-bold mb-1">{{ $song->title }}</h6>
                                    <p class="small text-secondary mb-0">
                                        <i class="fa-solid fa-microphone-lines me-1 small"></i>
                                        @foreach ($song->artists as $artist)
                                            {{ $artist->name }}{{ !$loop->last ? ', ' : '' }}
                                        @endforeach
                                    </p>
                                </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="d-flex flex-column justify-content-center align-items-center py-5 h-100 opacity-50">
                    <i class="fa-solid fa-music fa-3x mb-3"></i>
                    <p class="small italic">Nessun brano collegato a questa edizione.</p>
                </div>
            @endif
        </div>
    </div>
</div>
        </div>
    </div>

    <div class="modal fade" id="deleteModal{{ $edition->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-light text-light border-secondary">
                <div class="modal-body p-5 text-center">
                    <i class="fa-solid fa-circle-exclamation fa-3x text-danger mb-4"></i>
                    <h4 class="mb-3 text-dark">Confermi l'eliminazione?</h4>
                    <p class="text-secondary">L'edizione <strong>{{ $edition->year }}</strong> del festival di Sanremo
                        verrà rimossa definitivamente dal database.</p>
                    <div class="d-flex justify-content-center gap-2 mt-4">
                        <button type="button" class="btn btn-outline-secondary px-4"
                            data-bs-dismiss="modal">Annulla</button>
                        <form action="{{ route('admin.editions.destroy', $edition) }}" method="POST">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger px-4">Elimina</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
