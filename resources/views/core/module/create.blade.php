@extends('layouts.app')
@section('content')

<div class="card mb-3">
    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
        <h6 class="mb-0 fw-bold ">New Module</h6> 
    </div>
    <div class="card-body">
        <form  method="post" novalidate action="{{route('module.store')}}">
            @csrf
            <div class="row g-3 align-items-center">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Module Title</label>
                        <input type="text" name="module_title" class="form-control @error('module_title') is-invalid @enderror" required>
                       
                        @error('module_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Module Description</label>
                        <textarea name="module_description" class="form-control @error('module_description') is-invalid @enderror " rows="5" cols="30" required></textarea>
                        
                        @error('module_description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Controller Name</label>
                        <input type="text" name="controller_name" class="form-control @error('controller_name') is-invalid @enderror " required>
                        @error('controller_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Grid/Table Type</label>
                        <select name="grid_table_type" class="form-control @error('grid_table_type') is-invalid @enderror">
                            <option value="native">Laravel Native</option>
                            <option value="datatable">Datatable</option>
                        </select>

                        @error('grid_table_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Database Table</label>
                        <select name="database_table_name" class="form-control @error('database_table_name') is-invalid @enderror">
                            @foreach($tables as $table)
                                @foreach ($table as $key => $value)
                                <option value="{{$value}}">{{$value}}</option>
                                @endforeach
                            @endforeach
                        </select>

                        @error('database_table_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <br />
                        <label class="fancy-radio">
                            <input type="radio" name="status" value="1" checked data-parsley-errors-container="#error-radio">
                            <span><i></i>Enable</span>
                        </label>
                        <label class="fancy-radio">
                            <input type="radio" name="status" value="0">
                            <span><i></i>Disable</span>
                        </label>
                        <p id="error-radio"></p>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>


@endsection
