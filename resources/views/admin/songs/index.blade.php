@extends('admin.layouts.dashboardLayout')

@section('content')
<div class="container-fluid py-5 px-lg-5 bg-main min-vh-100 text-light">

    <div class="d-flex justify-content-between align-items-center mb-4 border-bottom border-secondary pb-4">
        <h1 class="text-first text-uppercase display-6 fw-bold m-0">Archivio Canzoni</h1>
        <a href="{{ route('admin.songs.create') }}" class="btn btn-secondary shadow-sm">
            <i class="fas fa-plus"></i>
        </a>
    </div>

    <div class="accordion accordion-flush" id="accordionEditions">
        @foreach ($editions as $edition)
            <div class="accordion-item bg-transparent border-bottom border-secondary-subtle">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-transparent text-light px-0 py-2 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEdition{{ $edition->id }}">
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle bg-dark border border-secondary me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <span class="fw-bold text-first">{{ substr($edition->year, -2) }}</span>
                            </div>
                            <div>
                                <span class="fw-bold text-first text-uppercase fs-4">Sanremo {{ $edition->year }}</span>
                                <small class="d-block text-secondary text-lowercase">{{ $edition->songs->count() }} brani registrati</small>
                            </div>
                        </div>
                    </button>
                </h2>

                <div id="collapseEdition{{ $edition->id }}" class="accordion-collapse collapse" data-bs-parent="#accordionEditions">
                    <div class="accordion-body px-0 py-3">
                        <div class="table-responsive">
                            <table class="table bg-transparent table-borderless align-middle mb-0">
                                <thead>
                                    <tr class="small text-secondary text-uppercase border-top border-secondary-subtle">
                                        <th class="py-3 bg-transparent" style="width: 80px;">Pos.</th>
                                        <th class="py-3 bg-transparent" style="width: 40%;">Canzone</th>
                                        <th class="py-3 bg-transparent d-none d-lg-table-cell">Compositori</th>
                                        <th class="py-3 bg-transparent text-end">Azioni</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($edition->songs->sortBy('position') as $song)
                                        <tr class="border-bottom border-secondary-subtle">
                                            <td class="py-1 bg-transparent">
                                                <span class="fw-bold {{ $song->position <= 3 && $song->position > 0 ? 'text-warning' : 'text-secondary' }}">
                                                    {{ $song->position ? $song->position . '°' : '-' }}
                                                </span>
                                            </td>
                                            <td class="py-3 bg-transparent">
                                                <div class="fw-semibold text-first fs-6 fs-md-5">{{ $song->title }}</div>
                                                <div class="small text-secondary">
                                                    @foreach ($song->artists as $artist)
                                                        {{ $artist->name }}{{ !$loop->last ? ' &' : '' }}
                                                    @endforeach
                                                </div>
                                            </td>
                                            <td class="py-3 bg-transparent d-none d-lg-table-cell">
                                                <span class="small text-secondary opacity-75">
                                                    {{ $song->collaborators ?? '-' }}
                                                </span>
                                            </td>
                                            <td class="py-3 bg-transparent text-end">
                                                <div class="btn-group gap-3">
                                                    <a href="{{ route('admin.songs.show', $song) }}" class="text-secondary hover-first">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('admin.songs.edit', $song) }}" class="text-secondary hover-first">
                                                        <i class="fa-solid fa-pencil"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection