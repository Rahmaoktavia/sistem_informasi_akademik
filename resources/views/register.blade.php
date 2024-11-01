@extends('layouts.main')

@section('content')

<div class="row justify-content-center">
    <div class="col-4">
        <main class="form-signin w-100 m-auto">
            <form method="POST" action="/register">
              @csrf
              <h1 class="h3 mt-5 mb-3 fw-normal text-center">Register Here!</h1>
              <div class="form-floating mb-2">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingName" name="name" placeholder="John Doe" value="{{ old('name') }}">
                <label for="floatingName">Full Name</label>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating mb-2">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingEmail" name="email" placeholder="name@example.com" value="{{ old('email') }}">
                <label for="floatingEmail">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating mb-2">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating mb-2">
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="floatingPasswordConfirm" name="password_confirmation" placeholder="Confirm Password">
                <label for="floatingPasswordConfirm">Confirm Password</label>
                @error('password_confirmation')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <img src="{{ captcha_src() }}" alt="captcha">
              <div class="mt-2"></div>
              <input
                  type="text" name="captcha" class="form-control @error('captcha') is-invalid @enderror" placeholder="Please Insert Captch"
                  >
               @error('captcha')
               <div class="invalid-feedback">{{ $message }}</div> @enderror

              <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
              <div class="text-center mt-3">Already have an account? <a href="/login">Sign in here!</a></div>
              <p class="mt-5 mb-3 text-body-secondary text-center">&copy; 2024</p>
            </form>
          </main>
    </div>
</div>

@endsection
