@extends('layouts.admin')

@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">
            @if(str_contains(url()->current(), '/admin/get-clients'))
                All Clients
            @elseif(Auth::user()->hasRole('consultant'))
                    My Clients
            @else
                     Clients And Consultants
            @endif
               
            </h6>
            <div class="ml-auto">
                @can('create_user')
                @if(str_contains(url()->current(), '/admin/get-clients'))
                    <a href="{{ route('admin.users.create') }}" class="btn btn-primary">
                   
                    <span class="icon text-white-50">
                        <i class="fa fa-plus"></i>
                    </span>
                    
                        
                        <span class="text">Add Client</span>
                   
                       
                    </a>
                    @endif
                @endcan
            </div>
        </div>
       

        <div class="table-responsive">
            <table id="clientconsultant" class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Username</th>
                    <th>Matter</th>
                    @if(Auth::user()->hasRole('admin'))<th>Status</th> @endif
                    <th>Role</th>
                   <th>Application Status</th> 
                    
                    <th>Deadline</th>
                    @if(Auth::user()->hasRole('admin'))   <th>Consultant</th> @endif
                    
                    <th> Assign Forms</th>
                    <th class="text-center" style="width: 30px;">Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>
                            {{ $user->first_name }}
                        </td>
                        
                        <td>{{ $user->surname }}
                        </td>
                        <td>{{ $user->username }}
                        </td>
                        <td>@if($user->roles[0]->name == 'user') {{$user->matter}} @else  <strong > -- </strong>  @endif</td>
                        @if(Auth::user()->hasRole('admin')) <td>{{ $user->status }}</td> @endif
                        <td>@if($user->roles[0]->name == 'user')  <strong> Client </strong> @else <strong>{{$user->roles[0]->name}} </strong> @endif <br> 
                         <td>{{ $user->application_status }}</td> 
                         <td>{{ $user->deadline }}</td> 
                         @if(Auth::user()->hasRole('admin'))  
                         <td> ABC Consultant</td> 
                         @endif
                        
                        <td>
                        <a href="{{ route('admin.user.formslist', $user->id) }}" class="btn btn-sm btn-primary">
                        <i class="fa fa-eye"> View Forms</i>
                         </a>
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm">
                               
                                <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-primary">
                                    <i class="fa fa-edit"></i>
                                </a>
                                @if(Auth::user()->hasRole('admin'))
                                <a href="javascript:void(0);"
                                   onclick="if (confirm('Are you sure to delete this record?'))
                                       {document.getElementById('delete-tag-{{ $user->id }}').submit();} else {return false;}"
                                   class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                                @endif
                            </div>
                            <form action="{{ route('admin.users.destroy', $user) }}"
                                  method="POST"
                                  id="delete-tag-{{ $user->id }}" class="d-none">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center" colspan="6">No users found.</td>
                    </tr>
                @endforelse
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="6">
                        <div class="float-right">
                            {!! $users->appends(request()->all())->links() !!}
                        </div>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
<script> 
 $(document).ready(function () {
    // Setup - add a text input to each footer cell
    $('#clientconsultant thead tr')
        .clone(true)
        .addClass('filters')
        .appendTo('#clientconsultant thead');
 
    var table = $('#clientconsultant').DataTable({
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "bAutoWidth": false ,
        "searching": false,
        orderCellsTop: true,
        fixedHeader: true,
        columnDefs: [
            { width: 200, targets: 0 }
        ],
        initComplete: function () {
            var api = this.api();
 
            // For each column
            api
                .columns()
                .eq(0)
                .each(function (colIdx) {
                    // Set the header cell to contain the input element
                    var cell = $('.filters th').eq(
                        $(api.column(colIdx).header()).index()
                    );
                    var title = $(cell).text();
                    $(cell).html('<input type="text" placeholder="' + title + '" />');
 
                    // On every keypress in this input
                    $(
                        'input',
                        $('.filters th').eq($(api.column(colIdx).header()).index())
                    )
                        .off('keyup change')
                        .on('change', function (e) {
                            // Get the search value
                            $(this).attr('title', $(this).val());
                            var regexr = '({search})'; //$(this).parents('th').find('select').val();
 
                            var cursorPosition = this.selectionStart;
                            // Search the column for that value
                            api
                                .column(colIdx)
                                .search(
                                    this.value != ''
                                        ? regexr.replace('{search}', '(((' + this.value + ')))')
                                        : '',
                                    this.value != '',
                                    this.value == ''
                                )
                                .draw();
                        })
                        .on('keyup', function (e) {
                            e.stopPropagation();
 
                            $(this).trigger('change');
                            $(this)
                                .focus()[0]
                                .setSelectionRange(cursorPosition, cursorPosition);
                        });
                });
        },
    });
 });
</script>
@endsection

