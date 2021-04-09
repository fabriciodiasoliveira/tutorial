@extends('layouts.app')

@section('content')
<div class="container">
@if(session()->get('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}  
</div><br />
@endif
@if(session()->get('error'))
<div class="alert alert-danger">
    {{ session()->get('error') }}  
</div><br />
@endif
@if(session()->get('info'))
<div class="alert alert-info">
    {{ session()->get('info') }}  
</div><br />
@endif
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Nomes</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-1">
                            <a href="{{ route ("nomes.create") }}">Inserir</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            @component('components.nomes.list', compact ('nomes'))@endcomponent
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
