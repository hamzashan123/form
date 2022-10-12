@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">
                Create Clients
            </h6>
            <div class="ml-auto">
                <a href="{{ route('admin.users.index') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-home"></i>
                    </span>
                    <span class="text">Back to clients</span>
                </a>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.users.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="first_name" class="text-small text-uppercase">{{ __('Name') }}</label>
                            <input id="first_name" type="text" class="form-control form-control-lg" name="first_name"
                                   value="{{ old('first_name') }}" placeholder="First Name">
                            @error('first_name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="surname" class="text-small text-uppercase">{{ __('Sur Name') }}</label>
                            <input id="surname" type="text" class="form-control form-control-lg" name="surname"
                                   value="{{ old('surname') }}" placeholder="surname">
                            @error('surname')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="username" class="text-small text-uppercase">{{ __('User Name') }}</label>
                            <input id="username" type="text" class="form-control form-control-lg" name="username"
                                   value="{{ old('username') }}" placeholder="Username">
                            @error('username')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-6">
                        <div class="form-group">
                            <label for="email" class="text-small text-uppercase">{{ __('E-Mail') }}</label>
                            <input id="email" type="email" class="form-control form-control-lg" name="email"
                                   placeholder="Enter your Email">
                            @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="phone" class="text-small text-uppercase">{{ __('Phone') }}</label>
                            <input id="phone" type="text" class="form-control form-control-lg" name="phone"
                                   placeholder="Enter your Phone Number">
                            @error('phone')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="whatsapp" class="text-small text-uppercase">{{ __('Whatsapp') }}</label>
                            <input id="whatsapp" type="number" class="form-control form-control-lg" name="whatsapp"
                                   placeholder="Enter your whatsapp Phone">
                            @error('whatsapp')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="">-- Choose Status User --</option>
                                <option value="1" {{ old('status') == "1" ? 'selected' : null }}>Active</option>
                                <option value="0" {{ old('status') == "0" ? 'selected' : null }}>Inactive</option>
                            </select>
                            @error('status')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                            <div class="form-group">
                                <label for="status">Matter</label>
                                <select name="matter" id="matter" class="form-control">
                                    <option value="" disabled>-- Choose Visa Type --</option>
                                    <option value="Skilled points visa">Skilled points visa</option>
                            <option value="Sponsorship visa">Sponsorship visa</option>
                            <option value="400 visa">400 visa</option>
                            <option value="Skills Assessment">Skills Assessment </option>
                            <option value="Student visa">Student visa</option>
                            <option value="408 COVID visa">408 COVID visa</option>
                            <option value="Aus citizenship">Aus citizenship</option>
                            <option value="Business visa">Business visa</option>
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
                                </select>
                                @error('status')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="status">Application Status</label>
                                <select name="application_status" id="application_status" class="form-control">
                                    <option value="" disabled>-- Choose Visa Type --</option>
                                    <option value="To start" >To start</option>
                                    <option value="In progress" >In progress </option>
                                    <option value="In progress" >In progress </option>
                                    <option value="Lodged" >Lodged </option>
                                    <option value="Outcome positive" >Outcome positive </option>
                                    <option value="Outcome negative" >Outcome negative </option>
                                    <option value="AAT" >AATe </option>
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
                                        <option value="onShore">onShore</option>
                                        <option value="offShore">offShore</option>
                                    </select>
                                    @error('status')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="account_status">Account Status</label>
                                    <select name="account_status" id="account_status" class="form-control">
                                        <option value="" disabled>-- Choose account status --</option>
                                        <option value="Has paid 1st instalment ">Has paid 1st instalment </option>
                                        <option value="Has paid 2nd instalment Ok to lodge ">Has paid 2nd instalment Ok to lodge </option>
                                        <option value="Pays in 1 payment only">Pays in 1 payment only</option>
                                         
                                    </select>
                                    @error('account_status')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>      
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="visa_expiry" class="text-small text-uppercase">{{ __('Visa Expiry Date') }}</label>
                            <input id="visa_expiry" type="date" class="form-control form-control-lg"
                                   name="visa_expiry"
                                   >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="admin_comments" class="text-small text-uppercase">{{ __('Admin Comments') }}</label>
                            <textarea name="admin_comments" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="password" class="text-small text-uppercase">{{ __('New Password') }}</label>
                            <input id="password" type="password" class="form-control form-control-lg"
                                   name="password"
                                   placeholder="Enter your password">
                            @error('password')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="password-confirm"
                                   class="text-small text-uppercase">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control form-control-lg"
                                   name="password_confirmation" placeholder="Confirm Password">
                            @error('password-confirm')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="user_image">User image</label>
                        <br>
                        <div class="form-group">
                            <input type="file" name="user_image">
                        </div>
                        @error('user_image')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
