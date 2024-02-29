@extends('layouts.main')

@section('container')
<body class="bg-light">

<main class="form-signin">
  <form method="POST" action="{{ route('register') }}">
    @csrf <!-- CSRF token for security -->

    <h1 class="h3 mb-3 fw-normal text-center">Create an Account</h1>

    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingName" name="name" placeholder="Full Name">
      <label for="floatingName">Full Name</label>
    </div>
    <div class="form-floating mb-3">
      <input type="email" class="form-control" id="floatingEmail" name="email" placeholder="name@example.com">
      <label for="floatingEmail">Email address</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" class="form-control" id="floatingConfirmPassword" name="password_confirmation" placeholder="Confirm Password">
      <label for="floatingConfirmPassword">Confirm Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
    <p class="mt-3 mb-3 text-muted text-center">Already have an account? <a href="/login">Sign in</a></p>
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2024 Your Company</p>
  </form>
</main>

<div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
  <button class="btn btn-bd-primary py-2 dropdown-toggle" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
    Toggle theme
  </button>
  <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme">
    <li>
      <button type="button" class="dropdown-item" data-bs-theme-value="light" aria-pressed="false">
        Light
      </button>
    </li>
    <li>
      <button type="button" class="dropdown-item" data-bs-theme-value="dark" aria-pressed="false">
        Dark
      </button>
    </li>
    <li>
      <button type="button" class="dropdown-item active" data-bs-theme-value="auto" aria-pressed="true">
        Auto
      </button>
    </li>
  </ul>
</div>

</body>
@endsection
