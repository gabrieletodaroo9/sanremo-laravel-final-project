@extends('admin.layouts.dashboardLayout')

@section('content')
<div class="container-fluid py-5 px-lg-5 bg-main min-vh-100">
    
    <div class="d-flex justify-content-between align-items-center mb-5 border-bottom border-secondary pb-4">
        <h1 class="h4 text-first text-uppercase display-6 fw-bold m-0">Gestione Artisti</h1>
        <a href="{{ route('admin.artists.create') }}" class="btn btn-secondary shadow-sm">
            <i class="fas fa-plus"></i>
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-borderless align-middle">
            <thead class="text-first text-uppercase small border-bottom border-secondary">
                <tr>
                    <th class="py-3" style="width: 100px;">Foto</th>
                    <th class="py-3">Nome</th>
                    <th class="py-3">Tipo</th>
                    <th class="py-3 pe-3 text-end">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach($artists as $artist)
                    <tr class="border-bottom border-secondary-subtle">
                        <td class="py-3">
                            @if($artist->img_url)
                                <img src="{{ asset('storage/' . $artist->img_url) }}" 
                                     alt="{{ $artist->name }}" 
                                     class="rounded-circle shadow-sm" 
                                     style="width: 60px; height: 60px; object-fit: cover; border: 1px solid #dee2e6;">
                            @else
                                <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center shadow-sm" 
                                     style="width: 45px; height: 45px; border: 1px solid #dee2e6;">
                                    <i class="fa-solid fa-user text-white small"></i>
                                </div>
                            @endif
                        </td>
                        <td class="py-3 fw-bold">
                            <p class="text-first text-decoration-none m-0">
                                {{ $artist->name }}
                            </p>
                        </td>
                        <td class="py-3 text-secondary text-capitalize">{{ $artist->type }}</td>
                        <td class="py-3 text-end">
                            <div class="btn-group gap-2">
                                <a href="{{ route('admin.artists.show', $artist) }}" class="text-secondary me-2">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.artists.edit', $artist) }}" class="text-secondary me-2">
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
@endsection