@extends('admin.layouts.dashboardLayout')

@section('content')
<div class="container-fluid py-3 py-md-5 px-lg-5 bg-main min-vh-100 text-light">

    <div class="d-flex justify-content-between align-items-center mb-1 mb-md-4 border-bottom border-secondary pb-2 pb-md-4">
        <h1 class="text-first text-uppercase display-6 fw-bold m-0">Dashboard</h1>
    </div>

    <div class="row g-1 g-lg-4 mb-2 mb-lg-2">
        
        <div class="col-6 col-md-3">
            <div class="bg-main p-2 p-md-4 h-100">
                <div class="mb-3">
                    <i class="fa-solid fa-calendar-days text-secondary fs-3"></i>
                </div>
                <h2 class="display-5 fw-bold text-first">{{ $editionsCount }}</h2>
                <p class="text-secondary small m-0 italic fw-bold text-uppercase tracking-wider">Edizioni</p>
            </div>
        </div>

        <div class="col-6 col-md-3">
            <div class="bg-main p-2 p-md-4 h-100">
                <div class="mb-3">
                    <i class="fa-solid fa-music text-secondary fs-3"></i>
                </div>
                <h2 class="display-5 fw-bold text-first">{{ $songsCount }}</h2>
                <p class="text-secondary small m-0 italic fw-bold text-uppercase tracking-wider">Canzoni</p>
            </div>
        </div>

        <div class="col-6 col-md-3">
            <div class="bg-main p-2 p-md-4 h-100">
                <div class="mb-3">
                    <i class="fa-solid fa-microphone-lines text-secondary fs-3"></i>
                </div>
                <h2 class="display-5 fw-bold text-first">{{ $artistsCount }}</h2>
                <p class="text-secondary small m-0 italic fw-bold text-uppercase tracking-wider">Artisti</p>
            </div>
        </div>

        <div class="col-6 col-md-3">
            <div class="bg-main p-2 p-md-4 h-100">
                <div class="mb-3">
                    <i class="fa-solid fa-trophy text-secondary fs-3"></i>
                </div>
                <h2 class="display-5 fw-bold text-first">{{ $awardsCount }}</h2>
                <p class="text-secondary small m-0 italic fw-bold text-uppercase tracking-wider">Premi</p>
            </div>
        </div>

    </div>

    <div class="row g-2 g-md-4 mb-2">
        <div class="col-12">
            <div class="bg-main p-2 p-md-4">
                <h5 class="text-uppercase fw-bold text-secondary mb-4 border-bottom border-secondary pb-2">
                    <i class="fa-solid fa-magnifying-glass me-2"></i>Ricerca Rapida
                </h5>

                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <form action="{{ route('admin.dashboard') }}" method="GET">
                            <label class="small text-secondary text-uppercase fw-bold mb-2 tracking-widest">Cerca tra le Canzoni</label>
                            <div class="input-group">
                                <input type="text" name="search_song" class="form-control bg-main border-secondary text-dark shadow-none py-2" placeholder="Titolo..." value="{{ request('search_song') }}">
                                <button class="btn btn-outline-secondary border-secondary px-3 text-uppercase fw-bold small" type="submit">Cerca</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-6">
                        <form action="{{ route('admin.dashboard') }}" method="GET">
                            <label class="small text-secondary text-uppercase fw-bold mb-2 tracking-widest">Cerca tra gli Artisti</label>
                            <div class="input-group">
                                <input type="text" name="search_artist" class="form-control bg-main border-secondary text-dark shadow-none py-2" placeholder="Nome..." value="{{ request('search_artist') }}">
                                <button class="btn btn-outline-secondary border-secondary px-3 text-uppercase fw-bold small" type="submit">Cerca</button>
                            </div>
                        </form>
                    </div>
                </div>

                @if ($searchResultsSongs || $searchResultsArtists)
                    <div class="mt-2 mt-md-4 pt-2">
                        <h6 class="text-first text-uppercase fw-bold mb-3 small italic">
                            <i class="fa-solid fa-list me-2"></i>Risultati trovati
                        </h6>

                        <div class="list-group list-group-flush overflow-hidden">
                            @if ($searchResultsSongs)
                                @forelse($searchResultsSongs as $song)
                                    <div class="list-group-item bg-main text-light border-secondary d-flex justify-content-between align-items-center py-2 py-md-3">
                                        <div>
                                            <span class="text-first fw-bold">{{ $song->title }}</span>
                                            <span class="text-secondary mx-2">|</span>
                                            <small class="text-secondary italic text-uppercase">Sanremo {{ $song->edition->year }}</small>
                                        </div>
                                        <div class="d-flex gap-2 gap-md-3">
                                            <a href="{{ route('admin.songs.show', $song) }}" class="text-secondary hover-first"><i class="fa-solid fa-eye"></i></a>
                                            <a href="{{ route('admin.songs.edit', $song) }}" class="text-secondary hover-first"><i class="fa-solid fa-pencil"></i></a>
                                        </div>
                                    </div>
                                @empty
                                    <div class="list-group-item bg-main text-secondary small italic py-3 text-center border-secondary">Nessuna canzone trovata.</div>
                                @endforelse
                            @endif

                            @if ($searchResultsArtists)
                                @forelse($searchResultsArtists as $artist)
                                    <div class="list-group-item bg-main text-light border-secondary d-flex justify-content-between align-items-center py-2 py-md-3">
                                        <div>
                                            <span class="text-first fw-bold">{{ $artist->name }}</span>
                                            <span class="text-secondary mx-2">|</span>
                                            <small class="text-secondary italic text-uppercase">{{ $artist->type }}</small>
                                        </div>
                                        <div class="d-flex gap-2 gap-md-3">
                                            <a href="{{ route('admin.artists.show', $artist) }}" class="text-secondary hover-first"><i class="fa-solid fa-eye"></i></a>
                                            <a href="{{ route('admin.artists.edit', $artist) }}" class="text-secondary hover-first"><i class="fa-solid fa-pencil"></i></a>
                                        </div>
                                    </div>
                                @empty
                                    <div class="list-group-item bg-main text-secondary small italic py-3 text-center border-secondary">Nessun artista trovato.</div>
                                @endforelse
                            @endif
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="row g-md-4 g-1">
        <div class="col-lg-4">
            <div class="bg-main p-2 p-md-4 h-100">
                <h5 class="text-uppercase fw-bold text-secondary mb-4 border-bottom border-secondary pb-2">
                    <i class="fa-solid fa-bolt me-2"></i>Azioni Rapide
                </h5>
                <div class="d-grid gap-1 gap-md-2">
                    <a href="{{ route('admin.songs.create') }}" class="text-decoration-none border-0 text-secondary text-uppercase fw-bold py-1">
                        <i class="fa-solid fa-plus me-2 text-first"></i> Nuova Canzone
                    </a>
                    <a href="{{ route('admin.artists.create') }}" class="text-decoration-none border-0 text-secondary text-uppercase fw-bold py-1">
                        <i class="fa-solid fa-user-plus me-2 text-first"></i> Nuovo Artista
                    </a>
                    <a href="{{ route('admin.awards.create') }}" class="text-decoration-none border-0 text-secondary text-uppercase fw-bold py-1">
                        <i class="fa-solid fa-trophy me-2 text-first"></i> Nuovo Premio
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection