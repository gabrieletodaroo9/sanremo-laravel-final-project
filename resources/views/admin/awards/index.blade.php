@extends('admin.layouts.dashboardLayout')

@section('content')
<div class="container-fluid py-5 px-lg-5 bg-main min-vh-100 text-light">
    
    <div class="d-flex justify-content-between align-items-center mb-5 border-bottom border-secondary pb-4">
        <h1 class="h4 text-first text-uppercase display-6 fw-bold m-0">Gestione Premi</h1>
        <a href="{{ route('admin.awards.create') }}" class="btn btn-secondary shadow-sm">
            <i class="fas fa-plus"></i>
        </a>
    </div>

    <div class="table-responsive">
        <table class="table bg-transparent table-borderless align-middle mb-0">
            <thead class="text-first text-uppercase small border-bottom border-secondary">
                <tr>
                    <th class="py-3 bg-transparent">Nome Premio</th>
                    <th class="py-3 pe-3 text-end bg-transparent">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach($awards as $award)
                    <tr class="border-bottom border-secondary-subtle">
                        <td class="py-3 fw-bold bg-transparent">
                            <p class="text-first text-decoration-none m-0 text-uppercase italic">
                                {{ $award->name }}
                            </p>
                        </td>
                        <td class="py-3 text-end bg-transparent">
                            <div class="btn-group gap-3">
                                <a href="{{ route('admin.awards.edit', $award) }}" class="text-secondary hover-first">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>
                                <button type="button" class="bg-transparent border-0 text-secondary hover-first p-0" 
                                    data-bs-toggle="modal" data-bs-target="#deleteModal{{ $award->id }}">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <div class="modal fade" id="deleteModal{{ $award->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content bg-light text-dark border-0">
                                <div class="modal-body p-5 text-center">
                                    <i class="fa-solid fa-circle-exclamation fa-3x text-danger mb-4"></i>
                                    <h4 class="mb-3 text-dark">Eliminare il premio?</h4>
                                    <p class="text-secondary">Sei sicuro di voler rimuovere <strong>{{ $award->name }}</strong>?<br>
                                    <div class="d-flex justify-content-center gap-2 mt-4">
                                        <button type="button" class="btn btn-outline-secondary px-4 text-uppercase fw-bold small"
                                            data-bs-dismiss="modal">Annulla</button>
                                        <form action="{{ route('admin.awards.destroy', $award) }}" method="POST">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-danger px-4 text-uppercase fw-bold small">Elimina</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection