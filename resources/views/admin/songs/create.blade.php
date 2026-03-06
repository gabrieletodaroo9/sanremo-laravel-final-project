@extends('admin.layouts.dashboardLayout')

@section('content')
<div class="container-fluid py-5 px-lg-5 bg-main min-vh-100 text-light">
    
    <div class="d-flex justify-content-between align-items-center mb-5 border-bottom border-secondary pb-4">
        <h1 class="display-6 fw-bold text-first text-uppercase m-0">Nuova Canzone</h1>
        <a href="{{ route('admin.songs.index') }}" class="btn btn-outline-secondary btn-sm text-uppercase">
            Torna alla lista
        </a>
    </div>

    <form action="{{ route('admin.songs.store') }}" method="POST">
        @csrf

        <div class="row g-4 mb-4">
            <div class="col-md-6">
                <label for="title" class="form-label small text-secondary text-uppercase fw-bold">Titolo Canzone</label>
                <input type="text" name="title" id="title" class="form-control bg-dark text-light border-secondary" placeholder="Es: Brividi" required>
            </div>

            <div class="col-md-2">
                <label for="position" class="form-label small text-secondary text-uppercase fw-bold">Posizione</label>
                <input type="number" name="position" id="position" class="form-control bg-dark text-light border-secondary" min="1" placeholder="Es: 1">
            </div>

            <div class="col-md-4">
                <label for="edition_id" class="form-label small text-secondary text-uppercase fw-bold">Edizione / Anno</label>
                <select name="edition_id" id="edition_id" class="form-select bg-dark text-light border-secondary" required>
                    <option value="" selected disabled>Scegli l'anno</option>
                    @foreach($editions as $edition)
                        <option value="{{ $edition->id }}">Sanremo {{ $edition->year }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row g-4 mb-5">

            <div class="col-lg-4">
                <label for="artists" class="form-label small text-secondary text-uppercase fw-bold">Artisti</label>
                <select name="artists[]" id="artists" class="form-select bg-dark text-light border-secondary" multiple style="height: 380px;">
                    @foreach($artists as $artist)
                        <option value="{{ $artist->id }}">{{ $artist->name }} ({{ $artist->type }})</option>
                    @endforeach
                </select>
                <div class="form-text text-secondary mt-2 small">
                    <i class="fa-solid fa-circle-info me-1"></i> Premi <strong>Ctrl</strong> per selezioni multiple.
                </div>
            </div>

            <div class="col-lg-8">
                <label for="lyrics" class="form-label small text-secondary text-uppercase fw-bold">Testo della Canzone</label>
                <textarea name="lyrics" id="lyrics" class="form-control bg-dark text-light border-secondary" 
                          style="height: 380px; resize: none;" placeholder="Inserisci qui il testo del brano..."></textarea>
            </div>
        </div>

        <div class="d-flex justify-content-end gap-3 pt-4 border-top border-secondary">
            <button type="submit" class="btn btn-secondary px-5 text-uppercase fw-bold shadow-sm">Salva Canzone</button>
        </div>
    </form>
</div>
@endsection