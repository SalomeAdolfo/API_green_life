@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
           <div class="alert alert-warning alert-dismissible fade show" role="alert">
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             <strong>Bienvenido</strong> 
           </div>
           
           <script>
             var alertList = document.querySelectorAll('.alert');
             alertList.forEach(function (alert) {
               new bootstrap.Alert(alert)
             })
           </script>
           
            
            </div>
            
        </div>
    </div>
</div>
@endsection
