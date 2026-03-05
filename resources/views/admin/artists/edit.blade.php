@extends('admin.layouts.dashboardLayout')

@section('content')
<div class="container-fluid py-5 px-lg-5 bg-main min-vh-100 text-light">
    
    <div class="d-flex justify-content-between align-items-center mb-5 border-bottom border-secondary pb-4">
        <h1 class="display-6 fw-bold text-first text-uppercase m-0">Modifica Artista</h1>
        <a href="{{ route('admin.artists.index') }}" class="btn btn-outline-secondary btn-sm text-uppercase">
            Torna alla lista
        </a>
    </div>

    <div class="col-12">
        <form action="{{ route('admin.artists.update', $artist) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row g-4 mb-4">
                <div class="col-md-8">
                    <label for="name" class="form-label small text-secondary text-uppercase fw-bold">Nome Artista / Band</label>
                    <input type="text" name="name" id="name" class="form-control bg-dark text-light border-secondary" value="{{ old('name', $artist->name) }}" required>
                </div>

                <div class="col-md-4">
                    <label for="type" class="form-label small text-secondary text-uppercase fw-bold">Tipo</label>
                    <select name="type" id="type" class="form-select bg-dark text-light border-secondary">
                        <option value="solista" {{ $artist->type == 'solista' ? 'selected' : '' }}>Solista</option>
                        <option value="band" {{ $artist->type == 'band' ? 'selected' : '' }}>Band</option>
                        <option value="duetto" {{ $artist->type == 'duetto' ? 'selected' : '' }}>Duetto</option>
                    </select>
                </div>
            </div>

            <div class="mb-4">
                <label for="bio" class="form-label small text-secondary text-uppercase fw-bold">Biografia</label>
                <textarea name="bio" id="bio" rows="5" class="form-control bg-dark text-light border-secondary">{{ old('bio', $artist->bio) }}</textarea>
            </div>

            <div class="mb-5">
                <label for="img_url" class="form-label small text-secondary text-uppercase fw-bold d-block">Foto Artista</label>
                
                @if($artist->img_url)
                    <div class="mb-3">
                        <img src="{{ asset('storage/' . $artist->img_url) }}" alt="Anteprima" class="mb-2 rounded border border-secondary" style="height: 120px; object-fit: cover;">
                    </div>
                @endif

                <input type="file" name="img_url" id="img_url" class="form-control bg-dark text-light border-secondary">
            </div>

            <div class="d-flex justify-content-end gap-3 pt-4 border-top border-secondary">
                <button type="submit" class="btn btn-secondary px-5 text-uppercase fw-bold">Aggiorna</button>
            </div>
        </form>
    </div>
</div>
@endsection