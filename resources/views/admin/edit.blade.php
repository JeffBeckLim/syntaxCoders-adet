@extends('layout')

@section('content')
      
@include('components.flash-message')
        <div class="row d-flex justify-content-center mt-5">
            <div class="card p-4 w-25 border border-2 border-dark">

              <div class="row mb-5 text-center">     
            
                <h4>Update User</h4>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            
              </div>


              <form method="POST" action="{{ route('update', $user->id) }}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" value="{{$user->name}}">
                </div>
                @error('name')
                  <p class="text-danger">{{$message}}</p>
                @enderror
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" value="{{$user->email}}">
                  </div>
                @error('email')
                  <p class="text-danger">{{$message}}</p>
                @enderror
                
                <label class="form-label">User Type | 1 is admin</label>
                <select name="user_type" class="form-select mb-3" aria-label="Default select example">
                    <option selected value="{{$user->user_type}}">{{$user->user_type}}</option>
                    <option value="1">Admin</option>
                    <option value="0">User</option>
    
                  </select>
              

                  <button type="submit" class="btn btn-dark w-100 btn-lg">Update</button>
              </form>
            </div>
      
        </div>
      
@endsection