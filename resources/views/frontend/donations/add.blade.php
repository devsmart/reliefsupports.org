@extends('layouts.master')

@section('content')
    <div class="container main-container">
        <div class="row">
        @if (session('errors'))
            <div class="alert alert-danger">
                <ul>
                    @foreach (session('errors') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="col-md-12">
                <h4>{{ __('home.collect_donations') }}</h4>
                <form class="form-horizontal" role="form" method="POST" action="{{ url("/donations/add") }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="col-lg-2 control-label">{{ __('home.your_name') }}</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="telephone" class="col-lg-2 control-label">{{ __('home.contactable_numbers') }}</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="telephone" name="telephone" value="{{ old('telephone') }}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-lg-2 control-label">{{ __('home.your_address') }}</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="4" id="address" name="address" required>{{ old('address') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="city" class="col-lg-2 control-label">{{ __('home.closest_city') }}</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="donation" class="col-lg-2 control-label">{{ __('home.aid_desc') }}</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="4" id="donation" name="donation" required>{{ old('donation') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="information" class="col-lg-2 control-label">{{ __('home.extra_info_if_any')}}</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="4" id="information" name="information" placeholder="">{{ old('information') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-md-offset-2">
                            {!! app('captcha')->render(); !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-primary">{{ __('layout.search-placeholder.save_form') }} </button>
                        </div>
                    </div>
                </form>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->

    </div><!-- /.container -->
@endsection
