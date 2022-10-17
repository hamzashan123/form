@extends('layouts.admin')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex">
        <h6 class="m-0 font-weight-bold text-primary">
            Edit user: ({{ $user->full_name }})
        </h6>
        <div class="ml-auto">
            <a href="{{ route('admin.users.index') }}" class="btn btn-primary">
                <span class="icon text-white-50">
                    <i class="fa fa-home"></i>
                </span>
                <span class="text">Back to users</span>
            </a>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.users.update', $user) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input class="form-control" id="first_name" type="text" name="first_name" value="{{ old('first_name', $user->first_name) }}">
                        @error('first_name')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-6">
                        <div class="form-group">
                            <label for="surname" class="">{{ __('Sur Name') }}</label>
                            <input id="surname" type="text" class="form-control" name="surname"
                            value="{{ old('surname', $user->surname) }}" placeholder="surname">
                            @error('surname')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control" id="username" type="text" name="username" value="{{ old('username', $user->username) }}">
                        @error('username')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" id="email" type="email" name="email" value="{{ old('email', $user->email) }}">
                        @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="status">Matter</label>
                        <select name="matter" id="matter" class="form-control">
                            <option value="" disabled>-- Choose Visa Type --</option>
                            @if(!empty(isset($user->matter)))
                            <option value="{{$user->matter}}" selected>{{$user->matter}}</option>
                            @endif

                            <option value="" disabled>-- Choose Visa Type --</option>
                                    
                                    <option value="Aus citizenship">Aus citizenship</option>
                                    <option value="Sponsorship">186 Nom DE
                                    </option>
                                    <option value="186 Visa DE">186 Visa DE
                                    </option>
                                    <option value="186 Nom TRT">186 Nom TRT
                                    </option>
                                    <option value="186 Visa TRT">186 Visa TRT
                                    </option>
                                    <option value="188 Visa">188 Visa
                                    </option>
                                    <option value="189 Visa ">189 Visa
                                    </option>
                                    <option value="190 Visa">190 Visa
                                    </option>
                                    <option value="400 Visa">400 Visa
                                    </option>
                                    <option value="482 SBS">482 SBS
                                    </option>
                                    <option value="482 NOM">482 NOM
                                    </option>
                                    <option value="482 VISA">482 VISA
                                    </option>
                                    <option value="491 Visa">491 Visa
                                    </option>
                                    <option value="494 Visa ">494 Visa
                                    </option>
                                    <option value="500 Visa">500 Visa</option>
                                    <option value="600 Visa">600 Visa</option>
                                    <option value="651 Visa">651 Visa </option>
                                    <option value="820/801 Partner visa"> 820/801 Partner visa </option>
                                    <option value="309/100 Partner visa">309/100 Partner visa</option>
                                    <option value="Parent Visa">Parent Visa</option>
                                    <option value="Internal study">Internal study </option>
                                    <option value="AITISL">AITISL  </option>
                                    <option value="ACS ">ACS   </option>
                                    <option value="EA">EA  </option>
                                    <option value="TRA">TRA  </option>
                                    <option value="VETASSESS">VETASSESS  </option>
                                    <option value="VETASSESS TRA ANGLISS">VETASSESS TRA ANGLISS  </option>
                                    <option value="Other">other</option>
                            



                            <option value="Other">other</option>
                        </select>
                        @error('matter')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="status">Application Status</label>
                        <select name="application_status" id="application_status" class="form-control">
                            <option value="" disabled>-- Choose Visa Type --</option>
                            @if(!empty(isset($user->application_status)))
                            <option value="{{$user->application_status}}" selected>{{$user->application_status}}</option>
                            @endif
                            <option value="To start">To start</option>
                            <option value="In progress">In progress </option>
                            <option value="In progress">In progress </option>
                            <option value="Lodged">Lodged </option>
                            <option value="Outcome positive">Outcome positive </option>
                            <option value="Outcome negative">Outcome negative </option>
                            <option value="AAT">AATe </option>
                            <option value="Other">other</option>
                        </select>
                        @error('application_status')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>

                </div>
                <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="location">Location</label>
                        <select name="location" id="location" class="form-control">
                            <option value="" disabled>-- Choose location --</option>
                            @if(!empty(isset($user->location)))
                            <option value="{{$user->location}}" selected>{{$user->location}}</option>
                            @endif
                            <option value="Onshore">Onshore</option>
                            <option value="Offshore">Offshore</option>
                        </select>
                        @error('status')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="col-6">
                                <div class="form-group">
                                    <label for="account_status">Account Status</label>
                                    <select name="account_status" id="account_status" class="form-control">
                                        <option value="" disabled>-- Choose account status --</option>
                                        @if(!empty(isset($user->account_status)))
                                        <option value="{{$user->account_status}}" selected>{{$user->account_status}}</option>
                                        @endif
                                        <option value="Has paid 1st instalment ">Has paid 1st instalment </option>
                                        <option value="Has paid 2nd instalment Ok to lodge ">Has paid 2nd instalment Ok to lodge </option>
                                        <option value="Pays in 1 payment only">Pays in 1 payment only</option>
                                         
                                    </select>
                                    @error('account_status')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div> 
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="payment_status">Payment Status</label>
                                    <select name="payment_status" id="payment_status" class="form-control">
                                        <option value="" disabled>-- Choose payment status --</option>
                                        @if(!empty(isset($user->payment_status)))
                                        <option value="{{$user->payment_status}}" selected>{{$user->payment_status}}</option>
                                        @endif
                                        <option value="Pending">Pending</option>
                                        <option value="Paid">Paid</option>
                                         
                                    </select>
                                    @error('payment_status')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>  
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="client_paid">Client has Paid </label>
                                    <select name="client_paid" id="client_paid" class="form-control">
                                        <option value="" disabled>-- Client Paid --</option>
                                        @if(!empty(isset($user->client_paid)))
                                        <option value="{{$user->client_paid}}" selected>{{$user->client_paid}}</option>
                                        @endif
                                        <option value="$">$</option>
                                        <option value="€"> €</option>
                                         
                                    </select>
                                    @error('payment_status')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>  
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="client_paid">Client Amount </label>
                                    <input id="client_amount" type="text" class="form-control form-control"
                                    value="{{ old('client_amount', $user->client_amount) }}" name="client_amount"
                                   >
                                    @error('payment_status')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                </div>
            
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input class="form-control" id="phone" type="text" name="phone" value="{{ old('phone', $user->phone) }}">
                        @error('phone')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1" {{ old('status', $user->status) == "Active" ? 'selected' : null }}>Active</option>
                            <option value="0" {{ old('status', $user->status) == "Inactive" ? 'selected' : null }}>Inactive</option>
                        </select>
                        @error('status')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- <div class="col-6">
                    <label for="receive-email">Receive Email</label>
                    <select name="receive_email" id="receive-email" class="form-control">
                        <option value="">---</option>
                        <option value="1" {{ old('receive_email', $user->receive_email) == 1 ? 'selected' : null }}>Yes</option>
                        <option value="0" {{ old('receive_email', $user->receive_email) == 0 ? 'selected' : null }}>No</option>
                    </select>
                    @error('receive_email')<span class="text-danger">{{ $message }}</span>@enderror
                </div> -->

                <div class="col-6">
                    <div class="form-group">
                        <label for="password" class="text-danger">Change password</label>
                        <input class="form-control" id="password" type="password" name="password" value="{{ old('password') }}">
                        @error('password')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="admin_comments" class="text-small text-uppercase">{{ __('Admin Comments') }}</label>
                            <textarea name="admin_comments" class="form-control"> @if(!empty($user->admin_comments)) {{$user->admin_comments}} @endif</textarea>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-12">
                    @if($user->user_image)
                    <img src="{{ asset('storage/images/users/' . $user->user_image) }}" alt="{{ $user->full_name }}" width="60" height="60">
                    @else
                    <img src="{{ asset('img/avatar.png') }}" alt="{{ $user->full_name }}" width="60" height="60">
                    @endif
                    <br>
                    <input type="file" name="user_image">
                </div>
            </div>

            <div class="form-group pt-4">
                <button class="btn btn-primary" type="submit" name="submit">Update</button>
            </div>
        </form>
    </div>
</div>
<script>
    //remove selected duplicate value from all select tags
    $("select option").each(function() {
        $(this).siblings('[value="' + this.value + '"]').remove();
    });
</script>
@endsection