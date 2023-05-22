@if(session()->has('message'))
    <div class="alert alert-success" role="alert">
        <div class="row">
            <div class="col ">
                {{session('message')}}
            </div>
          
            <div class="col-1 d-flex justify-content-end">
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </div>
            
          </div>
    </div>

    <script>
    setTimeout(function() {
      $('.alert').alert('close');
    }, 5000);
    </script>

@endif  
