@extends('admin.layouts.dashboardLayout')

@section('content')
<div class="container-fluid py-5 px-lg-5 bg-main min-vh-100 text-light">

    <div class="d-flex justify-content-between align-items-center mb-4 border-bottom border-secondary pb-4">
        <h1 class="display-6 fw-bold text-first text-uppercase m-0">Modifica Premio</h1>
        <a href="{{ route('admin.awards.index') }}" class="btn btn-outline-secondary btn-sm text-uppercase">
            Torna alla lista
        </a>
    </div>

    <div class="row">
        <div class="col-12 col-lg-8">
            <form action="{{ route('admin.awards.update', $award) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="form-label small text-secondary text-uppercase fw-bold">Nome del Riconoscimento</label>
                    <input type="text" name="name" id="name" class="form-control bg-dark text-light border-secondary shadow-none p-2 fs-6 italic" value="{{ old('name', $award->name) }}" required>
                </div>

                <div class="d-flex justify-content-start gap-3 pt-2">
                    <button type="submit" class="btn btn-secondary px-5 text-uppercase fw-bold shadow-sm">
                        Aggiorna Premio
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection