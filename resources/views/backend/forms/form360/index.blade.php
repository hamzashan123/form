@extends('layouts.admin')
<link rel="stylesheet" href="{{asset('formstyles.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="box-shadow padding-20 col-11 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-center   mt-3 mb-2">
            <div class=" px-0 pt-4 pb-0 mt-3 mb-3">

                <img src="/logo.png" class="logo" />
                <h2 id="heading">Form 360 </h2>
                @if(session()->has('success')) 
                <div class="alert alert-success ">
                    {{ session()->get('success') }}
                </div>
                @endif
                @if(session()->has('error')) 
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
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
                    @if(Auth::user()->hasRole('consultant'))
                    <a id="correctemail" class="btn btn-primary" style="text-align:center;color:white; margin-bottom:20px; display:none;">Send Correction Email</a>
                    @endif
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
                    @include('backend.forms.form360.final')


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
        //window.location = '/login';
    })
</script>
@endif
<script src="{{asset('form360.js')}}"></script>
<script>
    //alert('adsd');
        jQuery(document).ready(function(){
            if ( jQuery('body').hasClass('admin') || jQuery('body').hasClass('consultant')) {
                jQuery('#form360 input').prop('disabled', true);
                jQuery('#form360 input').css('opacity', 0.5);
                jQuery('#form360 select').prop('disabled', true);
                jQuery('#form360 select').css('opacity', 0.5);
                jQuery('#form360 input.next').prop('disabled', false);
                jQuery('#form360 input.next').css('opacity', 1);
                jQuery('#form360 input.previous').prop('disabled', false);
                jQuery('#form360 input.previous').css('opacity', 1);
            }
        })
        
        //remove selected duplicate value from all select tags
        $("select option").each(function() {
            $(this).siblings('[value="'+ this.value +'"]').remove();
        });
</script>
<script>


  var fieldsname = [];
  var fieldsvalue = [];
  var fieldscomments = [];

<?php if(auth()->user()->hasRole('consultant')) {  ?>  
jQuery('.form-card td:nth-child(2)').click(function (e) {
        
        if($(this).hasClass('addBorder')){
          $(this).removeClass('addBorder');
          //jQuery(this).parent('tr').find('input.commentfield').remove();

          //fieldsname.remove(jQuery(this).parent('tr').find('input.commentfield').val()); // for remove index name
          console.log('remove' ,jQuery(this).parent('tr').children('input.commentfield'));

          jQuery(this).parent('tr').children('input.commentfield').remove();
        //  fieldsname.remove(jQuery(this).closest('tr').find('td').text().trim());
        //   fieldsvalue.remove(jQuery(this).closest('tr').find('input').val());
        //   fieldscomments.remove(jQuery(this).val());
    

            if($('.commentfield').length < 1 ){
             $('#correctemail').hide();
             }
        }else{
            console.log('add' ,jQuery(this).closest('tr').find('td').text().trim());
            $(this).addClass('addBorder');
            $(this).after('<input type="text" name="test" class="commentfield" placeholder="Enter Comments"/>');
            
            if($('.commentfield').length > 0 ){
                 $('#correctemail').show();
            }
          
            var title = jQuery(this).closest('tr').find('th').text();
            var value = jQuery(this).closest('tr').find('td').text();
            
        }
  });
  <?php } ?>

  jQuery('#correctemail').click(function (e) {
                
                e.preventDefault();
                $("#correctemail").html("Please wait...");
                //console.log('fields to fieldscomments' , $('.commentfield'));
                $('.commentfield').each(function(i, obj) {
                    // console.log(jQuery(this).closest('tr').find('td:nth-child(2)'));
                    // console.log(jQuery(this).closest('tr').find('td:nth-child(2)').children());
                    // console.log(jQuery(this).closest('tr').find('td:nth-child(2)').children().get(0).tagName);
                    fieldsname.push(jQuery(this).closest('tr').find('td:nth-child(1)').text().trim());
                    if(jQuery(this).closest('tr').find('td:nth-child(2)').children().get(0).tagName == 'INPUT'){
                        fieldsvalue.push(jQuery(this).closest('tr').find('input').val());
                    }else if (jQuery(this).closest('tr').find('td:nth-child(2)').children().get(0).tagName == 'SELECT'){
                        fieldsvalue.push(jQuery(this).closest('tr').find('select').val());
                    }
                    fieldscomments.push(jQuery(this).val());
                    
                });
                var userid = "<?php echo (!empty($_GET['userid'])) ? $_GET['userid'] : '';  ?>";
                
                
               
                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });
                 $.ajax({
                  type:'POST',
                  url:"{{route('admin.correctionemail')}}",
                  data:{ userid: userid , formName: 'Form 360', fieldsname : fieldsname , fieldsvalue : fieldsvalue , fieldscomments : fieldscomments},
                  success:function(data){
                      $("#correctemail").html("Send Correction email");
                      if(data.success === "true"){
                          Swal.fire({
                              icon: 'success',
                              title: 'Successfully sent',
                              text: 'Correction Email has been sent!',
                          }).then(function() {
                                window.location.href = '/admin';
                         });
                      }else if(data.success === 'false'){
                          $("#correctemail").html("Send Correction email");
                         
                             
                      }
                  }
                });
                console.log('feildsname' ,fieldsname);
                console.log('fieldsvalue' ,fieldsvalue);
                console.log('fieldscomments' ,fieldscomments);
               
                
      });

</script>

@endsection()