@extends('layouts.app')
@section('content')

<form action="{{route('module.update',$moduleData->id)}}">
    @csrf
    @method('put')
    <div class="card mb-3">
        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
            <h6 class="mb-0 fw-bold ">Update {{$moduleData->module_title}}</h6> 
        </div>


        <div class="card-body">



            <ul class="nav nav-pills mb-3" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-details" role="tab">Details</a></li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-table" role="tab">Table</a></li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-form" role="tab">Form</a></li>
            </ul>
            
            <div class="tab-content">
                <div class="tab-pane fade show active" id="nav-details" role="tabpanel">
                    
                    <div class="row g-3 align-items-center">
                        <div class="col-md-6">
                            <p><b>Module Title : </b> {{$moduleData->module_title}} </p>
                            <p><b>Controller Name : </b> {{$moduleData->controller_name}} </p>
                            <p><b>Database Table Name : </b> {{$moduleData->database_table_name}} </p>
                            <p><b>Grid / Table Type : </b> {{$moduleData->grid_table_type}} </p>
                            <p><b>Status : </b> {{  ($moduleData->status == 1) ? 'Enabled' : 'Disabled' }} </p>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label"><b>Module Description</b></label>
                                <textarea name="module_description" class="form-control @error('module_description') is-invalid @enderror" rows="5" cols="30" required>{{$moduleData->module_description}}</textarea>
                                @error('module_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="nav-table" role="tabpanel">
                    <table class="table table-hover align-middle mb-0" style="width:100%">
                        <thead>
                            <tr>
                                <th>Field</th>
                                <th>Type</th>
                                <th>List View</th>
                                <th>Relation</th>
                                <th>Searchable</th>
                                <th>validation</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($columns as $item)
                            <tr>
                                <td>{{$item}}</td>
                                <td>{{$item}}</td>
                                <td>{{$item}}</td>
                                <td>{{$item}}</td>
                                <td>{{$item}}</td>
                                <td>{{$item}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="tab-pane fade" id="nav-form" role="tabpanel">
                    <table class="table table-hover align-middle mb-0" style="width:100%">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Field</th>
                                <th>Field Name</th>
                                <th>Type</th>
                                <th>Validation</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($columns as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item}}</td>
                                
                                <td>
                                    <div class="form-group">
                                        <input type="text" name="module_title" class="form-control" value="{{ Helper::sanitizeField($item )}}">
                                    </div>
                                </td>

                                <td>
                                    @php 
                                        $types = [
                                            'select' => 'Select Option',
                                            'file' => 'File',
                                            'image' => 'Image',
                                            'radio' => 'Radio',
                                            'checkbox' => 'Checkbox',
                                            'radio' => 'Radio',
                                            'textarea' => 'Textarea',
                                            'textareawitheditor' => 'Textarea With Editor',
                                            'datetime' => 'Date Time',
                                        ];

                                    @endphp

                                    <select name="database_table_name" class="form-control">
                                        <option value="-1" disabled selected>-- Select Type --</option>
                                        @foreach($types as $key=>$val)
                                            <option value="{{$key}}">{{$val}}</option>
                                        @endforeach
                                    </select>

                                </td>

                                <td>
                                    <div class="form-group">
                                        <input type="text" name="validation" class="form-control" placeholder="required | unique:posts">
                                    </div>
                                </td>

                                <td>
                                    <div class="form-group">
                                        <label class="fancy-radio">
                                            <input type="radio" name="status" value="1" checked >
                                            <span><i></i>YES</span>
                                        </label>
                                        <label class="fancy-radio">
                                            <input type="radio" name="status" value="0">
                                            <span><i></i>NO</span>
                                        </label>
                                        <p id="error-radio"></p>
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

    <div class="form-group mb-4 text-right">
       <p class="text-end"><button type="submit" class="btn btn-primary">Update Module</button></p>
    </div>
</form>

@endsection