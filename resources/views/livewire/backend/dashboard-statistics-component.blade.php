<div class="row">
    <!-- Earnings (Monthly) Card Example -->
    @if(Auth::user()->hasRole('admin'))
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <a href="{{route('admin.users.index')}}">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Clients & Consultants
                            </div>
                        </a>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$totalSystemUsers}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @if(Auth::user()->hasRole('admin'))
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a href="{{route('admin.users.clients')}}">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Clients
                        </div>
                    </a>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$totalUsers}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @if(Auth::user()->hasRole('admin'))
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a href="{{route('admin.consultants.index')}}">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Total Consultants
                        </div>
                    </a>   
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$totalConsultantUsers}}</div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @if(Auth::user()->hasRole('admin'))
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                          Total Applications
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$employersform + $employersform}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- Daraft Requests Card Example -->
    @if(Auth::user()->hasRole('admin'))
    <!-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Draft Applications
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clock fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    @endif
    @if(Auth::user()->hasRole('admin'))
      <!-- Published Requests Card Example -->
      <!-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        SUBMITTED APPLICATIONS
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-check fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    @endif
    @if(Auth::user()->hasRole('consultant'))
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <a href="{{route('admin.users.index')}}">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            My Clients
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$myUsers}}</div>
                    </a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-check fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @if(Auth::user()->hasRole('user'))
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            My Applications 
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$forms360 + $employersform}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-check fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
