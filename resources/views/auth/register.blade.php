@extends("layouts.default")
@section('title', 'Register')
@section('content')
<main class="mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h2 class="text-center">Register Form</h2>
                        <form action="{{route('register.post')}}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="fullname">Full Name:</label>
                                <input type="text" class="form-control @error('fullname') is-invalid @enderror" id="name" name="fullname" required/>
                                @if ($errors->has('fullname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('fullname') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required autofocus />
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password"required />
                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            </div>
                            @endif
                            <div class="d-grid mx-auto mt-3">
                                <button type="submit" class="btn btn-dark btn-block">Signin</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
