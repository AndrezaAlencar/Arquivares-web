@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Unidades') }}</div>

                <div class="card-body">
                    
                    @foreach($models as $model)
                        <div class="alert alert-success" role="alert">
                            {{ $model->name }}<br>
                           {{$model->active}}
                        </div>
                    @endforeach

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
