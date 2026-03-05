@extends('admin.layouts.dashboardLayout')

@section('content')
    <div class="container-fluid py-5 px-lg-5 bg-main min-vh-100 text-light">

        <div class="d-flex justify-content-between align-items-center mb-5 border-bottom border-secondary pb-4">
            <h1 class="display-6 fw-bold text-first text-uppercase m-0">Modifica Edizione {{ $edition->year }}</h1>
            <a href="{{ route('admin.editions.index') }}" class="btn btn-outline-secondary btn-sm text-uppercase">
                Annulla
            </a>
        </div>

        <div class="col-12">
            <form action="{{ route('admin.editions.update', $edition) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row g-4 mb-4">
                    <div class="col-md-4">
                        <label for="year" class="form-label small text-secondary text-uppercase fw-bold">Anno</label>
                        <input type="number" name="year" id="year"
                            class="form-control bg-dark text-light border-secondary" value="{{ $edition->year }}">
                    </div>

                    <div class="col-md-8">
                        <label for="host" class="form-label small text-secondary text-uppercase fw-bold">Conduttore
                            Principale</label>
                        <input type="text" name="host" id="host"
                            class="form-control bg-dark text-light border-secondary" value="{{ $edition->host }}">
                    </div>
                </div>

                <div class="mb-4">
                    <label for="co_hosts"
                        class="form-label small text-secondary text-uppercase fw-bold">Co-conduttori</label>
                    <input type="text" name="co_hosts" id="co_hosts"
                        class="form-control bg-dark text-light border-secondary" value="{{ $edition->co_hosts }}">
                </div>

                <div class="mb-4">
                    <label for="location" class="form-label small text-secondary text-uppercase fw-bold">Sede</label>
                    <input type="text" name="location" id="location"
                        class="form-control bg-dark text-light border-secondary" value="{{ $edition->location }}">
                </div>

                <div class="mt-4">
                    <label for="logo_url" class="form-label small text-secondary text-uppercase fw-bold">Logo
                        Edizione</label>
                        <input type="file" name="logo_url" id="logo_url" class="form-control my-2 bg-dark text-light border-secondary">

                    @if ($edition->logo_url)
                        <div class="d-flex align-items-center gap-3 mb-3 py-3 rounded ">
                            <img src="{{ asset('storage/' . $edition->logo_url) }}" alt="Logo attuale" style="height: 50px;"
                                class="opacity-75">
                        </div>
                    @endif
                </div>

                <div class="d-flex justify-content-end gap-3 pt-4 border-top border-secondary">
                    <button type="submit" class="btn btn-secondary px-5 text-uppercase fw-bold">Aggiorna</button>
                </div>
            </form>
        </div>
    </div>
@endsection
