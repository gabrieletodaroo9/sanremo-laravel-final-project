@extends('admin.layouts.dashboardLayout')

@section('content')
<div class="container-fluid py-5 px-lg-5 bg-main min-vh-100 text-light">
    
    <div class="d-flex justify-content-between align-items-center mb-5 border-bottom border-secondary pb-4">
        <h1 class="text-first text-uppercase display-6 fw-bold m-0">Gestione Edizioni</h1>
        <a href="{{ route('admin.editions.create') }}" class="btn btn-secondary shadow-sm">
            <i class="fas fa-plus"></i>
        </a>
    </div>

    <div class="table-responsive">
        <table class="table bg-transparent table-borderless align-middle mb-0">
            <thead>
                <tr class="small text-secondary text-uppercase border-bottom border-secondary">
                    <th class="py-3 bg-transparent" style="width: 150px;">Anno</th>
                    <th class="py-3 bg-transparent">Conduttore</th>
                    <th class="py-3 bg-transparent">Sede</th>
                    <th class="py-3 bg-transparent text-end">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach($editions as $edition)
                    <tr class="border-bottom border-secondary-subtle">
                        <td class="py-3 bg-transparent">
                            <span class="fw-bold text-first fs-5">{{ $edition->year }}</span>
                        </td>
                       <td class="py-3 bg-transparent">
                        <div class="text-first fw-semibold">{{ $edition->host }}</div>
                         @if($edition->co_hosts)
                         <small class="text-secondary d-none d-lg-block italic">{{ $edition->co_hosts }}</small>
                         @endif
                       </td>
                        <td class="py-3 bg-transparent">
                            <span class="text-secondary small text-uppercase italic">
                                <i class="fa-solid fa-location-dot me-1 opacity-50"></i>{{ $edition->location }}
                            </span>
                        </td>
                        <td class="py-3 bg-transparent text-end">
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