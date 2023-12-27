@include('master.navbar')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<div class="col-5 mt-5 mx-auto">
      <main class="form-signin">
        <form action="/register" method="post">
          @csrf
        <img class="mb-4 " src="{{ asset('images/R.png') }}" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Register</h1>
      <div class="form-floating">
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{old('name')}}">
        <label for="name">Name</label>
        @error('name')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{old('email')}}">
        <label for="email">Email address</label>
        @error('email')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required value="{{old('password')}}">
        <label for="password">Password</label>
        @error('password')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>
  
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
      <small class="d-block text-center mb-2">Already registered? <a href="/login">Login Now</a></small>
    </form>
  </main>
  
</div>