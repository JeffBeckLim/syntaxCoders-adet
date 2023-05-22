@extends('layout')

@section('content')

      @include('components.flash-message')
      @auth
      <div class="container">        
        <div class="row p-5 border">
          <div class="col-sm-6 mb-3 mb-sm-0 h-100">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">XOR Cypher</h5>
                <p class="card-text">
                  The XOR cipher is a simple encryption algorithm that applies the XOR (exclusive OR) operation between the plaintext and a secret key to produce the ciphertext. It is a symmetric encryption method often used for basic encryption purposes.</p>
                <a href="{{ route('download', ['file' => 'App_Dev_Act_3_XOR.py']) }}" class="btn btn-warning">Download</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card h-100">
              <div class="card-body">
                <h5 class="card-title">HASHING</h5>
                <p class="card-text">A simple hash function</p>
                <a href="{{ route('download', ['file' => 'hashing1.py']) }}" class="btn btn-warning">Download</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @else
      <div class="d-flex justify-content-center align-items-center vh-100 overflow-hidden">



        {{-- <a href="{{ route('download', ['file' => 'App_Dev_Act_3_XOR.py']) }}" class="btn btn-primary">Download File</a>
         --}}
        
        <h1 class="fw-bolder text-secondary">WELCOME TO SYNTAX CODERS</h1>

        

      </div>
      @endauth
@endsection