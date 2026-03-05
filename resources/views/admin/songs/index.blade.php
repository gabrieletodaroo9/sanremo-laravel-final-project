@extends('admin.layouts.dashboardLayout')

@section('content')
<div class="container-fluid py-5 px-lg-5 bg-main min-vh-100 text-light">
    
    <div class="d-flex justify-content-between align-items-center mb-5 border-bottom border-secondary pb-4">
        <h1 class="h4 text-first text-uppercase display-6 fw-bold m-0">Gestione Canzoni</h1>
        <a href="{{ route('admin.songs.create') }}" class="btn btn-secondary shadow-sm">
            <i class="fas fa-plus"></i>
        </a>
    </div>

    <div class="accordion accordion-flush" id="accordionSongs">
        @foreach($artists as $artist)
            <div class="accordion-item bg-transparent border-bottom border-secondary">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-transparent text-light px-0 py-4 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $artist->id }}">
                        <div class="d-flex align-items-center">
                            @if($artist->img_url)
                                <img src="{{ asset('storage/' . $artist->img_url) }}" class="rounded-circle me-3 border border-secondary" style="width: 45px; height: 45px; object-fit: cover;">
                            @endif
                            <div>
                                <span class="fw-bold text-first text-uppercase">{{ $artist->name }}</span>
                                <small class="d-block text-secondary text-lowercase">{{ $artist->songs->count() }} brani in archivio</small>
                            </div>
                        </div>
                    </button>
                </h2>
                <div id="collapse{{ $artist->id }}" class="accordion-collapse collapse" data-bs-parent="#accordionSongs">
                    <div class="accordion-body px-0 py-3">
                        <div class="table-responsive">
                            <table class="table bg-transparent table-borderless align-middle mb-0">
                                <thead>
                                    <tr class="small text-secondary text-uppercase border-top border-secondary-subtle ">
                                        <th class="py-3 bg-transparent">Titolo</th>
                                        <th class="py-3 bg-transparent text-center">Anno</th>
                                        <th class="py-3 bg-transparent text-end">Azioni</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($artist->songs as $song)
                                        <tr class="border-bottom border-secondary-subtle">
                                            <td class="py-3 bg-transparent fw-semibold text-first">{{ $song->title }}</td>
                                            <td class="py-3 bg-transparent text-center">
                                                <span class=" bg-transparent text-secondary fw-bold">
                                                    {{ $song->edition->year }}
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