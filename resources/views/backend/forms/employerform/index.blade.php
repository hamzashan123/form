@extends('layouts.admin')
<link rel="stylesheet" href="{{asset('formstyles.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="box-shadow padding-20 col-11 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-center   mt-3 mb-2">
                <div class=" px-0 pt-4 pb-0 mt-3 mb-3">

                    <img src="/logo.png" class="logo" />
                    <h2 id="heading">Employer Form </h2>

                    <form id="form360" action="#" method="post" enctype="multipart/form-data" >
                        @csrf
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>PERSONAL INFO</strong></li>
                            <li id="personal"><strong>EDUCATION INFO</strong></li>
                            <li id="payment"><strong>WORK EXPERIENCE INFO</strong></li>
                            <li id="confirm"><strong>Finish</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div> <br> <!-- fieldsets -->
                       
                        @include('backend.forms.employerform.first')
                        @include('backend.forms.employerform.second')
                        @include('backend.forms.employerform.third')
                        @include('backend.forms.employerform.fourth')
                         
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    @if(Session::has('submitted'))
    <script>
      Swal.fire({
              icon: 'success',
              title: 'Successfully Submitted!',
              text: 'Thank you, your application has been successfully submitted. Login details have been sent to your glistereded email to either login again and change or details or to change what has been submitted.',
        
            }).then((result) => {
              window.location = '/login';
            })
    </script>
    @endif    
    <script src="{{asset('form360.js')}}"></script>    
@endsection()