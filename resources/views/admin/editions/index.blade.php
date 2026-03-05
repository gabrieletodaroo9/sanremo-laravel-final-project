@extends('admin.layouts.dashboardLayout')

@section('content')
<div class="container-fluid py-5 px-lg-5 bg-main min-vh-100">
    
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h1 class="h4 text-first text-uppercase display-6 fw-semibold m-0">Gestione Edizioni</h1>
        <a href="{{ route('admin.editions.create') }}" class="btn btn-secondary shadow-sm">
            <i class="fas fa-plus"></i>
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-borderless align-middle">
            <thead class="text-first text-uppercase small border-bottom border-secondary">
                <tr>
                    <th class="py-3">Anno</th>
                    <th class="py-3">Conduttore</th>
                    <th class="py-3">Sede</th>
                    <th class="py-3 pe-3 text-end">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach($editions as $edition)
                    <tr class="border-bottom border-secondary-subtle">
                        <td class="py-3 fw-bold">
                            <p class="text-first text-decoration-none m-0">
                                {{ $edition->year }}
                            </p>
                        </td>
                        <td class="py-3 text-secondary">{{ $edition->host }}</td>
                        <td class="py-3 text-secondary">{{ $edition->location }}</td>
                        <td class="py-3 text-end">
                            <div class="btn-group gap-2">
                                <a href="{{ route('admin.editions.show', $edition) }}" class="text-secondary me-2">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.editions.edit', $edition) }}" class="text-secondary me-2">
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