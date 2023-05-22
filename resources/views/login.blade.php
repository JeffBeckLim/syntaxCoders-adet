@extends('layout')
@section('content')
      <div class="m-0 p-5">

        <div class="row d-flex justify-content-center">
            <div class="card p-4 w-25 border border-2 border-dark">

              <div class="row mb-5 text-center">     
            
                <h4>Log in</h4>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            
              </div>


              <form action="/authenticate" method="POST">
              @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"  >Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                  </div>

                  <button type="submit" class="btn btn-dark w-100 btn-lg">Submit</button>

              </form>
            </div>
            
        </div>

      </div>
@endsection