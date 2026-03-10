@extends('admin.layouts.dashboardLayout')

@section('content')
<div class="container-fluid py-5 px-lg-5 bg-main min-vh-100 text-light">

    <div class="d-flex justify-content-between align-items-center mb-4 border-bottom border-secondary pb-4">
        <h1 class="display-6 fw-bold text-first text-uppercase m-0">Modifica Artista</h1>
        <a href="{{ route('admin.artists.index') }}" class="btn btn-outline-secondary btn-sm text-uppercase">
            Torna alla lista
        </a>
    </div>

    <div class="row">
        <div class="col-12 col-lg-10">
            <form action="{{ route('admin.artists.update', $artist) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row g-2 mb-2">
                    <div class="col-md-8">
                        <label for="name" class="form-label small text-secondary text-uppercase fw-bold">Nome Artista / Band</label>
                        <input type="text" name="name" id="name" class="form-control bg-dark text-light border-secondary shadow-none p-2 fs-6" value="{{ old('name', $artist->name) }}" required>
                    </div>

                    <div class="col-md-4">
                        <label for="type" class="form-label small text-secondary text-uppercase fw-bold">Tipo</label>
                        <select name="type" id="type" class="form-select bg-dark text-light border-secondary shadow-none p-2 fs-6">
                            <option value="solista" {{ old('type', $artist->type) == 'solista' ? 'selected' : '' }}>Solista</option>
                            <option value="band" {{ old('type', $artist->type) == 'band' ? 'selected' : '' }}>Band</option>
                            <option value="duetto" {{ old('type', $artist->type) == 'duetto' ? 'selected' : '' }}>Duetto</option>
                        </select>
                    </div>
                </div>

                <div class="mb-2">
                    <label for="bio" class="form-label small text-secondary text-uppercase fw-bold">Biografia</label>
                    <textarea name="bio" id="bio" rows="5" class="form-control bg-dark text-light border-secondary shadow-none p-2 fs-6">{{ old('bio', $artist->bio) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="img_url" class="form-label small text-secondary text-uppercase fw-bold d-block">Foto Artista</label>
                    
                    @if($artist->img_url)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $artist->img_url) }}" alt="Anteprima" class="rounded border border-secondary" style="height: 100px; width: 100px; object-fit: cover;">
                        </div>
                    @endif

                    <input type="file" name="img_url" id="img_url" class="form-control bg-dark text-light border-secondary shadow-none">
                </div>

                <div class="d-flex justify-content-start gap-3 pt-2">
                    <button type="submit" class="btn btn-secondary px-5 text-uppercase fw-bold shadow-sm">
                        Aggiorna Artista
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection