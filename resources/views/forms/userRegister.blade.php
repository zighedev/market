<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="row mb-3">
        <label for="full_name" class="col-md-4 col-form-label text-md-end">Full Name <b
                class="text-danger">*</b></label>

        <div class="col-md-6">
            <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror"
                name="full_name" value="{{ old('full_name') }}" required autocomplete="full_name" autofocus>

            @error('full_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address')
            }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone')
            }}</label>

        <div class="col-md-6">
            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                value="{{ old('phone') }}" autocomplete="phone">

            @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address')
            }}</label>

        <div class="col-md-6">
            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address"
                value="{{ old('address') }}" autocomplete="address">

            @error('address')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="username" class="col-md-4 col-form-label text-md-end">Username <b
                class="text-danger">*</b></label>

        <div class="col-md-6">
            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                name="username" value="{{ old('username') }}" required autocomplete="username">

            @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password')
            }} <b class="text-danger">*</b></label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm
            Password') }} <b class="text-danger">*</b></label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                autocomplete="new-password">
        </div>
    </div>

    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
        </div>
    </div>
</form>