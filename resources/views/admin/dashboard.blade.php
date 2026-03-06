@extends('admin.layouts.dashboardLayout')

@section('content')
    <div class="container-fluid py-5 px-lg-5 bg-main min-vh-100 text-light">

        <div class="d-flex justify-content-between align-items-center mb-4 border-bottom border-secondary pb-4">
            <h1 class="text-first text-uppercase display-6 fw-bold m-0">Dashboard</h1>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-3">
                <div class="bg-main p-4 h-100">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <i class="fa-solid fa-calendar-days text-secondary fs-3"></i>
                    </div>
                    <h2 class="display-5 fw-bold text-first">{{ $editionsCount }}</h2>
                    <p class="text-secondary small m-0 italic fw-bold text-uppercase tracking-wider">Edizioni</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="bg-main p-4 h-100">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <i class="fa-solid fa-music text-secondary fs-3"></i>
                    </div>
                    <h2 class="display-5 fw-bold text-first">{{ $songsCount }}</h2>
                    <p class="text-secondary small m-0 italic fw-bold text-uppercase tracking-wider">Canzoni</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="bg-main p-4 h-100">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <i class="fa-solid fa-microphone-lines text-secondary fs-3"></i>
                    </div>
                    <h2 class="display-5 fw-bold text-first">{{ $artistsCount }}</h2>
                    <p class="text-secondary small m-0 italic fw-bold text-uppercase tracking-wider">Artisti</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="bg-main p-4 h-100">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <i class="fa-solid fa-trophy text-secondary fs-3"></i>
                    </div>
                    <h2 class="display-5 fw-bold text-first">{{ $awardsCount }}</h2>
                    <p class="text-secondary small m-0 italic fw-bold text-uppercase tracking-wider">Premi</p>
                </div>
            </div>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-12">
                <div class="bg-main p-4">
                    <h5 class="text-uppercase fw-bold text-secondary mb-4 border-bottom border-secondary pb-2">
                        <i class="fa-solid fa-magnifying-glass me-2"></i>Ricerca Rapida
                    </h5>
                    <div class="row g-4">
                        <div class="col-md-6 border-end border-secondary">
                            <form action="{{ route('admin.dashboard') }}" method="GET">
                                <label class="small text-secondary text-uppercase fw-bold mb-2 tracking-widest">Cerca tra le Canzoni</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="search_song" class="form-control bg-main border-secondary text-dark shadow-none py-2" 
                                           placeholder="Titolo..." value="{{ request('search_song') }}">
                                    <button class="btn btn-outline-secondary border-secondary px-3 text-uppercase fw-bold small" type="submit">Cerca</button>
                                </div>
                            </form>
                            @if ($searchResultsSongs)
                                <div class="list-group list-group-flush border border-secondary rounded overflow-hidden mt-3">
                                    @forelse($searchResultsSongs as $s)
                                        <div class="list-group-item bg-main text-light border-secondary d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="text-first fw-bold">{{ $s->title }}</span>
                                                <small class="text-secondary ms-2 italic text-uppercase" style="font-size: 0.7rem;">{{ $s->edition->year }}</small>
                                            </div>
                                            <div class="d-flex gap-3">
                                                <a href="{{ route('admin.songs.show', $s) }}" class="text-secondary hover-first"><i class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route('admin.songs.edit', $s) }}" class="text-secondary hover-first"><i class="fa-solid fa-pencil"></i></a>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="list-group-item bg-main text-secondary small italic">Nessun brano trovato.</div>
                                    @endforelse
                                </div>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <form action="{{ route('admin.dashboard') }}" method="GET">
                                <label class="small text-secondary text-uppercase fw-bold mb-2 tracking-widest">Cerca tra gli Artisti</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="search_artist" class="form-control bg-main border-secondary text-light shadow-none py-2" 
                                           placeholder="Nome..." value="{{ request('search_artist') }}">
                                    <button class="btn btn-outline-secondary border-secondary px-3 text-uppercase fw-bold small" type="submit">Cerca</button>
                                </div>
                            </form>
                            @if ($searchResultsArtists)
                                <div class="list-group list-group-flush border border-secondary rounded overflow-hidden mt-3">
                                    @forelse($searchResultsArtists as $a)
                                        <div class="list-group-item bg-main text-light border-secondary d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="text-first fw-bold">{{ $a->name }}</span>
                                                <small class="text-secondary ms-2 italic" style="font-size: 0.7rem;">({{ $a->type }})</small>
                                            </div>
                                            <div class="d-flex gap-3">
                                                <a href="{{ route('admin.artists.show', $a) }}" class="text-secondary hover-first"><i class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route('admin.artists.edit', $a) }}" class="text-secondary hover-first"><i class="fa-solid fa-pencil"></i></a>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="list-group-item bg-main text-secondary small italic">Nessun artista trovato.</div>
                                    @endforelse
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4">
                <div class="bg-main p-4 h-100 border border-secondary rounded">
                    <h5 class="text-uppercase fw-bold text-secondary mb-4 border-bottom border-secondary pb-2">
                        <i class="fa-solid fa-bolt me-2"></i>Azioni Rapide
                    </h5>
                    <div class="d-grid gap-3">
                        <a href="{{ route('admin.songs.create') }}" class="text-decoration-none border-0 text-secondary text-uppercase fw-bold py-3">
                            <i class="fa-solid fa-plus me-2 text-first"></i> Nuova Canzone
                        </a>
                        <a href="{{ route('admin.artists.create') }}" class="text-decoration-none border-0 text-secondary text-uppercase fw-bold py-3">
                            <i class="fa-solid fa-user-plus me-2 text-first"></i> Nuovo Artista
                        </a>
                        <a href="{{ route('admin.awards.create') }}" class="text-decoration-none border-0 text-secondary text-uppercase fw-bold py-3">
                            <i class="fa-solid fa-trophy me-2 text-first"></i> Nuovo Premio
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="bg-main p-4 h-100 border border-secondary rounded">
                    <h5 class="text-uppercase fw-bold text-secondary mb-4 border-bottom border-secondary pb-2">
                        <i class="fa-solid fa-clock-rotate-left me-2"></i>Ultime Canzoni
                    </h5>
                    <div class="table-responsive">
                        <table class="table bg-main align-middle mb-0">
                            <thead>
                                <tr class="small text-secondary text-uppercase border-bottom border-secondary">
                                    <th class="py-3 bg-main text-secondary">Titolo</th>
                                    <th class="py-3 bg-main text-secondary">Edizione</th>
                                    <th class="py-3 bg-main text-end text-secondary">Azioni</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($latestSongs as $song)
                                    <tr class="border-bottom border-secondary-subtle">
                                        <td class="py-3 bg-main fw-bold text-first italic">{{ $song->title }}</td>
                                        <td class="py-3 bg-main text-secondary small text-uppercase">Sanremo {{ $song->edition->year }}</td>
                                        <td class="py-3 bg-main text-end">
                                            <a href="{{ route('admin.songs.show', $song) }}" class="text-secondary hover-first">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection