@extends('layouts.acess')

@section('title')
    Registre-se
@endsection

@section('content')
    <h4 class="card-header"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Registar Nova Conta</span></span></h4>

    <div class="card-body">
        <form data-toggle="validator" role="form" method="post" action="{{ route('register') }}">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">{{ __('Seu nome completo') }}</span></span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                            </div>
                            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" id="inputName" required autofocus title="Nome">

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
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
                        <label><span style="vertical-align: inherit;"><span
                                    style="vertical-align: inherit;">{{ __('E-mail') }}</span></span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></span>
                            </div>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required title="Email">

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
                <div class="col-md-6">
                    <div class="form-group">
                        <label><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">{{ __('Senha') }}</span></span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
                            </div>
                            <input type="password" id="inputPassword" data-minlength="6" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" data-error="Password to short" title="Senha" required="">

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="help-block with-errors text-danger"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">{{ __('Confirmar Senha') }}</span></span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
                            </div>
                            <input type="password" id="inputPasswordConfirm" name="password_confirmation" class="form-control" data-match="#inputPassword" data-match-error="Password must be the same in both fields" required="" title="Senha">
                        </div>
                        <div class="help-block with-errors text-danger"></div>
                    </div>
                </div>
            </div>

            <div class="mb-3"></div>

            <div class="row">
                <div class="col-md-12">
                    <span style="vertical-align: inherit;">
                        <span style="vertical-align: inherit;">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="{{ __('Registrar') }}" name="submit">
                        </span>
                    </span>
                </div>
            </div>
        </form>

        <div class="clear"></div>

        <i class="fa fa-undo fa-fw"></i><span style="vertical-align: inherit;">
            <span style="vertical-align: inherit;">Já registrado? </span>
        </span>
        <a href="{{ route('login') }}">
            <span style="vertical-align: inherit;">
                <span style="vertical-align: inherit;">Login da conta</span>
            </span>
        </a>
    </div>
@endsection
