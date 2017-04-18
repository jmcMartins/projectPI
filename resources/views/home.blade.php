@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;">Bem vindo <b>{{Auth::user()->name}}</b></div>

                @if(Auth::user()->id == 1)
                    <div class="panel-body">
                        {{Auth::user()->name}}
                        <br>
                        {{Auth::user()->email}}
                    </div>
                @else
                    <div class="panel-body">
                        {{Auth::user()->created_at}}
                        <br>
                        {{Auth::user()->updated_at}}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
