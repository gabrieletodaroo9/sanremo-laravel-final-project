@extends('admin.layouts.dashboardLayout')

@section('content')
<div class="container-fluid py-5 px-lg-5 bg-main min-vh-100 text-light">
    
    <div class="d-flex justify-content-between align-items-center mb-5 border-bottom border-secondary pb-4">
        <h1 class="display-6 fw-bold text-first text-uppercase m-0">Nuovo Premio</h1>
        <a href="{{ route('admin.awards.index') }}" class="btn btn-outline-secondary btn-sm text-uppercase">
            Torna alla lista
        </a>
    </div>

    <div class="col-12">
        <form action="{{ route('admin.awards.store') }}" method="POST">
            @csrf

            <div class="row g-4 mb-5">
                <div class="col-md-12">
                    <label for="name" class="form-label small text-secondary text-uppercase fw-bold">Nome</label>
                    <input type="text" name="name" id="name" class="form-control bg-dark text-light border-secondary p-2 fs-6" 
                           placeholder="Es: Premio della Critica 'Mia Martini'" required>
                </div>
            </div>

            <div class="d-flex justify-content-end gap-3 pt-4 border-top border-secondary">
                <button type="submit" class="btn btn-secondary px-5 text-uppercase fw-bold shadow-sm">Salva Premio</button>
            </div>
        </form>
    </div>
</div>
@endsection