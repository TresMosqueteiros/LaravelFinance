@extends('layouts.acess')

@section('title')
    Entrar
@endsection

@section('content')
    <h4 class="card-header"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Entrar</span></span></h4>
    <div class="card-body">
        <form data-toggle="validator" role="form" method="post" action="{{ route('login') }}">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>
                            <span style="vertical-align: inherit;">
                                <span style="vertical-align: inherit;">{{ __('E-mail') }}</span>
                            </span>
                        </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" autocomplete="on" name="email" value="{{ old('email') }}" required autofocus title="Email" data-error="Input valid email">

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
                    <div class="form-group">
                        <label>
                            <span style="vertical-align: inherit;">
                                <span style="vertical-align: inherit;">{{ __('Senha') }}</span>
                            </span>
                        </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fa fa-unlock" aria-hidden="true"></i>
                                </span>
                            </div>
                            <input type="password" id="inputPassword" data-minlength="6" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" data-error="Password to short" required="" title="Password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="help-block with-errors text-danger"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="checkbox checkbox-primary">
                        <input type="checkbox" name="remember" id="checkbox_remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="checkbox_remember">
                            <span style="vertical-align: inherit;">
                                <span style="vertical-align: inherit;">{{ __('Lembre de mim') }}</span>
                            </span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <input type="hidden" name="redirect" value="">
                    <span style="vertical-align: inherit;">
                        <span style="vertical-align: inherit;">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="{{ __('Entrar') }}" name="submit">
                        </span>
                    </span>
                </div>
            </div>
        </form>

        <div class="clear"></div>
        <i class="fa fa-user fa-fw"></i>
        <span style="vertical-align: inherit;">
            <span style="vertical-align: inherit;">Ainda não tem conta? </span>
        </span>
        <a href="{{ route('register') }}">
            <span style="vertical-align: inherit;">
                <span style="vertical-align: inherit;">Registar Nova Conta</span>
            </span>
        </a>
        <br>
        <i class="fa fa-undo fa-fw"></i><span style="vertical-align: inherit;">
            <span style="vertical-align: inherit;">Esqueceu a senha? </span>
        </span>
        <a href="{{ route('password.request') }}">
            <span style="vertical-align: inherit;">
                <span style="vertical-align: inherit;">Redefinir senha</span>
            </span>
        </a>
    </div>
@endsection
