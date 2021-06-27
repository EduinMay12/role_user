@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Bievenido') . ' '. auth()->user()->name,
    ])
<br><br>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="./uploads/avatars/{{ auth()->user()->avatar }}" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-default mr-4">{{ __('En Linea') }} <i class="fa fa-circle text-success"></i></a>
                        </div>
                    </div>
                    <br>
                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5 btn btn-sm btn-warning">
                                    <form enctype="multipart/form-data" action="./profile" method="POST">
                                        <input type="file" name="avatar">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="pull-right btn btn-sm btn-success">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="text-center">
                            <h3>
                                {{ auth()->user()->name }}<span class="font-weight-light"> - {{ auth()->user()->year }}</span>
                            </h3>
                            <div class="h5 font-weight-300">
                                <i class="pin-3 mr-2"></i>{{ auth()->user()->city }}
                            </div>
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>{{ auth()->user()->job }}
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>{{ auth()->user()->univercity }}
                            </div>
                            <hr class="my-4" />
                            <h3>Descripción del Usuario.</h3>
                            <br>
                            <p>{{ auth()->user()->description }}</p>

                            <hr class="my-4" />
                            <h3>Tema Aplicado en el Sistema.</h3>
                            <br>
                            <p>{{ auth()->user()->theme }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">{{ __('Editar Perfil de Usuario') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('profile.update') }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Informacion de Usuario') }}</h6>

                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Nombre:') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Correo Electronico:') }}</label>
                                    <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('Year') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-year">{{ __('Edad:') }}</label>
                                    <input type="number" name="year" value="23" id="input-year" class="form-control form-control-alternative{{ $errors->has('year') ? ' is-invalid' : '' }}" placeholder="{{ __('Edad') }}" value="{{ old('year', auth()->user()->year) }}" required>

                                    @if ($errors->has('year'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('year') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('city') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-city">{{ __('Ciudad:') }}</label>
                                    <input name="city" id="input-city" value="Maxcanú" class="form-control form-control-alternative{{ $errors->has('city') ? ' is-invalid' : '' }}" placeholder="{{ __('Ciudad') }}" value="{{ old('city', auth()->user()->city) }}" required>

                                    @if ($errors->has('city'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('Job') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-job">{{ __('Ocupacion:') }}</label>
                                    <select name="job" id="input-job" class="form-control form-control-alternative{{ $errors->has('job') ? ' is-invalid' : '' }}" placeholder="{{ __('Job') }}" value="{{ old('job', auth()->user()->job) }}" required>
                                        <option>Maestro.</option>
                                        <option>Estudiante.</option>
                                        <option>Docente.</option>
                                        <option>Administrador.</option>
                                        <option>Otro.</option>
                                    </select>
                                    @if ($errors->has('job'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('job') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('Univercity') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-univercity">{{ __('Univercidad:') }}</label>
                                    <select type="univercity" name="univercity" id="input-univercity" class="form-control form-control-alternative{{ $errors->has('univercity') ? ' is-invalid' : '' }}" placeholder="{{ __('Univercity') }}" value="{{ old('univercity', auth()->user()->univercity) }}" required>
                                        <option> UTP - Universidad Tecnológica del Poniente. </option>
                                    </select>
                                    @if ($errors->has('univercity'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('univercity') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('Description') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-description">{{ __('Descripcion:') }}</label>
                                    <input type="description" name="description" id="input-description" class="form-control form-control-alternative{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="{{ __('Description') }}" value="{{ old('description', auth()->user()->description) }}" required>

                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <textarea>{{ $errors->first('description') }}</textarea>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('Tema') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-theme">{{ __('Tema:') }}</label>
                                    <input type="color" name="theme" id="input-theme" class="form-control {{ $errors->has('theme') ? ' is-invalid' : '' }}" placeholder="{{ __('Tema') }}" value="{{ old('theme', auth()->user()->theme) }}" required>

                                    @if ($errors->has('theme'))
                                        <span class="invalid-feedback" role="alert">
                                            <textarea>{{ $errors->first('theme') }}</textarea>
                                        </span>
                                    @endif
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Guardar') }}</button>
                                </div>
                            </div>
                        </form>
                        <hr class="my-4" />
                        <form method="post" action="{{ route('profile.password') }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Contraseña') }}</h6>

                            @if (session('password_status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('password_status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-current-password">{{ __('Antigua Contraseña:') }}</label>
                                    <input type="password" name="old_password" id="input-current-password" class="form-control form-control-alternative{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('*****') }}" value="" required>

                                    @if ($errors->has('old_password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('old_password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-password">{{ __('Nueva Contraseña:') }}</label>
                                    <input type="password" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('*****') }}" value="" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation">{{ __('Confirmar Nueva Contraseña:') }}</label>
                                    <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('*****') }}" value="" required>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Cambiar Contraseña') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection
