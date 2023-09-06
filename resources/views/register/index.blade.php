@extends('layout.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/register" method="post">
                @csrf
                <div class="form-floating">
                    <input type="text" name="name"  class="form-control rounded-top @error('name')
                    is-invalid
                    @enderror" id="name" placeholder="name" value="{{ old('name') }}">
                    <label for="name">Name</label>
                    @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>

                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username')
                    is-invalid
                    @enderror" id="username" placeholder="username" value="{{ old('username') }}">
                    <label for="username">UserName</label>
                    @error('username')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
              <div class="form-floating">
                <input type="email" name="email"  class="form-control @error('email')
                is-invalid
                @enderror" id="floatingInput" placeholder="name@example.com" value="{{ old('username') }}">
                <label for="floatingInput">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password"  class="form-control rounded-bottom @error('password')
                is-invalid
                @enderror" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
              </div>

              <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already Registed? <a href="/login">Login</a></small>
          </main>
    </div>
</div>

@endsection
