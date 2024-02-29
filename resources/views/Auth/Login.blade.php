@extends('layouts.main')

@section('container')
<body class="bg-light">

<main class="form-signin">
  <form action="{{ route('login') }}" method="post">
    @csrf
    <h1 class="h3 mb-3 fw-normal text-center">Sign In</h1>

    <div class="form-floating mb-3">
      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
      <label for="email">Email address</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      <label for="password">Password</label>
    </div>

    <div class="form-check mb-3">
      <input class="form-check-input" type="checkbox" value="" id="rememberMe">
      <label class="form-check-label" for="rememberMe">
        Remember me
      </label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-3 mb-3 text-muted text-center">Don't have an account? <a href="{{ route('register') }}">Sign up</a></p>
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
