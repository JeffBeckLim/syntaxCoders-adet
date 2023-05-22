@extends('layout')

@section('content')
      

        <div class="row d-flex justify-content-center mt-5">
            <div class="card p-4 w-25 border border-2 border-dark">

              <div class="row mb-5 text-center">     
            
                <h4>Register</h4>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            
              </div>


              <form method="POST" action="/register_user"  >
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name">
                </div>
                @error('name')
                  <p class="text-danger">{{$message}}</p>
                @enderror
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email">
                  </div>
                @error('email')
                  <p class="text-danger">{{$message}}</p>
                @enderror
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label" >Password</label>
                    <input type="password" class="form-control"  name="password">
                  </div>
                @error('password')
                  <p class="text-danger">{{$message}}</p>
                @enderror

                  <button type="submit" class="btn btn-dark w-100 btn-lg">Submit</button>
              </form>
            </div>
      
        </div>
      
@endsection