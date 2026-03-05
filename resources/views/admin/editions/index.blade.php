@extends('admin.layouts.dashboardLayout')

@section('content')
<div class="container-fluid py-5 px-lg-5 bg-main min-vh-100 text-light">
    
    <div class="d-flex justify-content-between align-items-center mb-5 border-bottom border-secondary pb-4">
        <h1 class="h4 text-first text-uppercase display-6 fw-bold m-0">Gestione Edizioni</h1>
        <a href="{{ route('admin.editions.create') }}" class="btn btn-secondary shadow-sm">
            <i class="fas fa-plus"></i>
        </a>
    </div>

    <div class="table-responsive">
        <table class="table align-middle mb-0">
            <thead class="text-first text-uppercase small border-bottom border-secondary">
                <tr>
                    <th class="py-3 bg-transparent">Anno</th>
                    <th class="py-3 bg-transparent">Conduttore</th>
                    <th class="py-3 bg-transparent">Sede</th>
                    <th class="py-3 pe-3 text-end bg-transparent">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach($editions as $edition)
                    <tr class="border-bottom border-secondary-subtle">
                        <td class="py-3 fw-bold bg-transparent">
                            <p class="text-first text-decoration-none m-0">
                                {{ $edition->year }}
                            </p>
                        </td>
                        <td class="py-3 text-secondary bg-transparent">{{ $edition->host }}</td>
                        <td class="py-3 text-secondary bg-transparent">{{ $edition->location }}</td>
                        <td class="py-3 text-end bg-transparent">
                            <div class="btn-group gap-3">
                                <a href="{{ route('admin.editions.show', $edition) }}" class="text-secondary hover-first">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.editions.edit', $edition) }}" class="text-secondary hover-first">
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