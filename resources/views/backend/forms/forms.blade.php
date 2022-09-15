@extends('layouts.admin')
@section('styles')
    <link rel="stylesheet" href="{{ asset('backend/vendor/select2/css/select2.min.css') }}">
@endsection
@section('content')

    <div class="row">
      
        <div class="col-12">
                        @if(Auth::user()->hasRole('admin'))
                        <div class="form-group" style="text-align:right">
                        <a href="{{route('admin.forms.index')}}" class="btn btn-secondary" style="align-item:right;" >Back</a>
                        </div>
                        @endif
                        @if(Auth::user()->hasRole('consultant'))
                        <div class="form-group" style="text-align:right">
                        <a href="{{route('admin.users.index')}}" class="btn btn-secondary" style="align-item:right;" >Back</a>
                        </div>
                        @endif
            
            <div class="card">
                <div class="card-header"><b>Form List</b></div>
                <div class="card-body">
                @if(count($userassignforms) > 0)
                        <div class="row">
                            <div class="col-12">
                            <div class="table-responsive">
                <table class="table table-content table-hover">
                    <thead>
                        <tr>
                            <th>Form-id</th>
                            <th>Form-title</th>
                            
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($userassignforms as $form)
                            
                            <tr>
                                <td>{{ ucfirst($form->id) }}</td>
                                <td>{{ $form->name }}</td>
                                <td>
                                    <div class="btn-group btn-group-toggle">
                                        <a href="{{route('admin.userform.delete', ['userid' => $id ,'form_id' => $form->id])}}" title="Show" class="btn-danger btn btn-sm"><i class="fa fa-trash"> Delete Form</i></a>
                                    </div>
                                </td>
                            </tr>
                        
                            
                        @endforeach
                        
                    </tbody>
                    
                </table>
            </div>
                            </div>
                        </div>
                       
                        @else
                            <p>No forms assigned to this user yet!</p>
                        @endif
                </div>
                
            </div>
        </div>
    </div>

@endsection


