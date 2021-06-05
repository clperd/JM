@extends('pages.layout')

@section('content')
    <section>
        <h1>@lang('auth.login')</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">
                    <span>@lang('auth.fields.email')</span>
                    <input id="email" type="email" name="email" value="{{ env('DEMO_USER_EMAIL') }}" required autocomplete="email" autofocus>
                </label>
            </div>

            <div class="form-group">
                <label for="password">
                    <span>@lang('auth.fields.password')</span>
                    <input id="password" type="password" name="password" value="{{ env('DEMO_USER_PASSWORD') }}" required autocomplete="current-password">
                </label>
            </div>

            <button type="submit" class="btn">@lang('auth.login')</button>
        </form>
    </section>
@endsection
