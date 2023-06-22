@extends('layouts.app')

@section('template_title')
    {{ $articulo->name ?? "{{ __('Show') Articulo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Articulo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('articulos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $articulo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $articulo->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $articulo->cantidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection