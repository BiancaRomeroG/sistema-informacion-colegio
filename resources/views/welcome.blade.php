@extends('master')

@section('title', 'Test')

@section('content')

    <div class="d-flex justify-content-center m-5">
        <div class="btn btn-primary" id="toastBtn">Toast Bootstrap</div>
    </div>

    <!-- Toast -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">

        <div id="toastNotice" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Bootstrap</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
    </div>

    <script>
        document.querySelector("#toastBtn").onclick = function() {
            new bootstrap.Toast(document.querySelector('#toastNotice')).show();
        }
    </script>

@endsection