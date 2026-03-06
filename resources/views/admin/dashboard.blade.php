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

        <div class="row g-4">

            <div class="col-lg-4">
                <div class="bg-main p-4 h-100">
                    <h5 class="text-uppercase fw-bold text-secondary mb-4 border-bottom border-secondary pb-2">
                        <i class="fa-solid fa-bolt me-2"></i>Azioni Rapide
                    </h5>
                    <div class="d-grid gap-3">
                        <a href="{{ route('admin.songs.create') }}"
                            class="text-decoration-none border-0 text-secondary text-uppercase fw-bold py-3">
                            <i class="fa-solid fa-plus me-2 text-first"></i> Nuova Canzone
                        </a>
                        <a href="{{ route('admin.artists.create') }}"
                            class="text-decoration-none border-0 text-secondary text-uppercase fw-bold py-3">
                            <i class="fa-solid fa-user-plus me-2 text-first"></i> Nuovo Artista
                        </a>
                        <a href="{{ route('admin.awards.create') }}"
                            class="text-decoration-none border-0 text-secondary text-uppercase fw-bold py-3">
                            <i class="fa-solid fa-trophy me-2 text-first"></i> Nuovo Premio
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="bg-main p-4 h-100">
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
                                        <td class="py-3 bg-main text-secondary small text-uppercase">Sanremo
                                            {{ $song->edition->year }}</td>
                                        <td class="py-3 bg-main text-end">
                                            <a href="{{ route('admin.songs.show', $song) }}"
                                                class="text-secondary hover-first">
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
