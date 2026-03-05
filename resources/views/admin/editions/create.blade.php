@extends('admin.layouts.dashboardLayout')

@section('content')
<div class="container-fluid py-5 px-lg-5 bg-main min-vh-100 text-light">
    
    <div class="d-flex justify-content-between align-items-center mb-5 border-bottom border-secondary pb-4">
        <h1 class="display-6 fw-bold text-first text-uppercase m-0">Nuova Edizione</h1>
        <a href="{{ route('admin.editions.index') }}" class="btn btn-outline-secondary btn-sm text-uppercase">
            Torna alla lista
        </a>
    </div>

    <div class="col-12">
        <form action="{{ route('admin.editions.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row g-4 mb-4">
                <div class="col-md-4">
                    <label for="year" class="form-label small text-secondary text-uppercase fw-bold">Anno</label>
                    <input type="number" name="year" id="year" class="form-control bg-dark text-light border-secondary" placeholder="2026">
                </div>

                <div class="col-md-8">
                    <label for="host" class="form-label small text-secondary text-uppercase fw-bold">Conduttore Principale</label>
                    <input type="text" name="host" id="host" class="form-control bg-dark text-light border-secondary" placeholder="Nome del conduttore">
                </div>
            </div>

            <div class="mb-4">
                <label for="co_hosts" class="form-label small text-secondary text-uppercase fw-bold">Co-conduttori</label>
                <input type="text" name="co_hosts" id="co_hosts" class="form-control bg-dark text-light border-secondary" placeholder="Nomi separati da virgola">
            </div>

            <div class="mb-4">
                <label for="location" class="form-label small text-secondary text-uppercase fw-bold">Sede</label>
                <input type="text" name="location" id="location" class="form-control bg-dark text-light border-secondary" value="Teatro Ariston">
            </div>

            <div class="mb-5">
                <label for="logo_url" class="form-label small text-secondary text-uppercase fw-bold">Logo Edizione</label>
                <input type="file" name="logo_url" id="logo_url" class="form-control bg-dark text-light border-secondary">
            </div>

            <div class="d-flex justify-content-end gap-3 pt-4 border-top border-secondary">
                <button type="submit" class="btn btn-secondary px-5 text-uppercase fw-bold">Salva</button>
            </div>
        </form>
    </div>
</div>
@endsection