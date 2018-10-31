@extends('layouts.acess')

@section('title')
    Recuperar Senha
@endsection

@section('content')
    <h4 class="card-header"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">{{ __('Recuperar Senha') }}</span></span></h4>
    <div class="card-body">
        <form data-toggle="validator" role="form" method="post" action="{{ route('password.email') }}">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">{{ __('Seu e-mail') }}</span></span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></span>
                            </div>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" title="Email" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="help-block with-errors text-danger"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <p class="text-danger">
                        <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Atenção! </span>
                            <span style="vertical-align: inherit;">Você receberá um e-mail para redefinição de senha, verifie sua caixa de entrada/spam!</span></span>
                    </p>
                    <input type="hidden" name="redirect" value="">
                    <span style="vertical-align: inherit;"><span style="vertical-align: inherit;">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Redefinir senha" name="submit">
                        </span>
                    </span>
                </div>
            </div>
        </form>

        <div class="clear"></div>

        <i class="fa fa-user-o fa-fw"></i>
        <span style="vertical-align: inherit;">
            <span style="vertical-align: inherit;">Ainda não tem conta? </span>
        </span>
        <a href="{{ route('register') }}">
            <span style="vertical-align: inherit;">
                <span style="vertical-align: inherit;">Registar Nova Conta</span>
            </span>
        </a><br>
        <i class="fa fa-undo fa-fw"></i>
        <span style="vertical-align: inherit;">
            <span style="vertical-align: inherit;">Já tem uma conta? </span>
        </span>
        <a href="{{ route('login') }}">
            <span style="vertical-align: inherit;">
                <span style="vertical-align: inherit;">Login da conta</span>
            </span>
        </a>
    </div>
@endsection
