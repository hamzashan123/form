@extends('layouts.admin')
@section('styles')
    <link rel="stylesheet" href="{{ asset('backend/vendor/select2/css/select2.min.css') }}">
@endsection
@section('content')

    <div class="row">
      
        <div class="col-12">
                        <div class="form-group" style="text-align:right">
                        <a href="{{route('admin.consultant.index')}}" class="btn btn-secondary" style="align-item:right;" >Back</a>
                        </div>
            
            <div class="card">
                <div class="card-header"><b>Form List</b></div>
                <div class="card-body">
            
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
                        
                    @foreach($userforms as $form)
                            
                            <tr>
                                <td>{{ ucfirst($form->id) }}</td>
                                <td>{{ $form->name }}</td>
                                <td>
                                    <div class="btn-group btn-group-toggle">
                                        <a href="{{route('admin.userform.delete', ['userid' => 110 ,'form_id' => $form->id])}}" title="Show" class="btn-danger btn btn-sm"><i class="fa fa-trash"> Delete Users</i></a>
                                    </div>
                                </td>
                            </tr>
                        
                            
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
                            </div>
                        </div>
                       
              
                </div>
                
            </div>
        </div>
    </div>

@endsection


