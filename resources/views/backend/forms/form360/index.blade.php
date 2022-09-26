@extends('layouts.admin')
<link rel="stylesheet" href="{{asset('formstyles.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="box-shadow padding-20 col-11 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-center   mt-3 mb-2">
            <div class=" px-0 pt-4 pb-0 mt-3 mb-3">

                <img src="/logo.png" class="logo" />
                <h2 id="heading">Form 360 </h2>
                @if(session()->has('success')) 
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @endif
                <form id="form360" action="{{route('admin.form360.save')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="matrix"><strong>Matrix</strong></li>
                        <li id="personal"><strong>Personal</strong></li>
                        <li id="first_education"><strong>First Education INFO</strong></li>
                        <li id="higher_education"><strong> Higher Education </strong></li>
                        <li id="aprenticeship"><strong>Aprenticeship</strong></li>
                        <li id="workexperience"><strong>Work Experience</strong></li>
                        <li id="workexperienceintracompany"><strong>Work Experience Intra Company </strong></li>
                        <li id="visahistory"><strong>Visa History</strong></li>
                        <li id="travelhistory"><strong>Travel History</strong></li>
                        <li id="countriesofresidence"><strong>Countries of Residence</strong></li>
                        <li id="healthdeclaration"><strong>Health Declaration</strong></li>
                        <li id="healthquestion"><strong>Health Question</strong></li>
                        <li id="character"><strong>Character</strong></li>
                        <li id="familymembers"><strong>Family Members</strong></li>
                        <li id="confirm"><strong>Finish</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->

                    @include('backend.forms.form360.matrix')
                    @include('backend.forms.form360.personal')
                    @include('backend.forms.form360.firsteducation')
                    @include('backend.forms.form360.highleveleducation')
                    @include('backend.forms.form360.aprenticeship')
                    @include('backend.forms.form360.workexperience')
                    @include('backend.forms.form360.workexperienceIntraCompany')
                    @include('backend.forms.form360.visahistory')
                    @include('backend.forms.form360.travelhistory')
                    @include('backend.forms.form360.countriesofresidence')
                    @include('backend.forms.form360.healthdeclaration')
                    @include('backend.forms.form360.healthquestion')
                    @include('backend.forms.form360.character')
                    @include('backend.forms.form360.familymembers')


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