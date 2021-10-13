@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @if (Request::is('*/edit'))
                    <form action="{{ url('users/add') }}" method="POST">
                    @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Digite o nome:</label>
                          <input type="text" name="name" class="form-control" placeholder="Seu Nome" value="{{$usuarios->name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Digite o email:</label>
                            <input type="email" name="email" value="{{$usuarios->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                          </div>

                        <button type="submit" class="btn btn-primary">Finalizar Cadastro</button>
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
