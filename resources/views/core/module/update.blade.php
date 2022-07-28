@extends('layouts.app')
@section('content')

<form method="post" action="{{route('module.update',$moduleData->id)}}">
    @csrf
    @method('put')
    <div class="card mb-3">
        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
            <h6 class="mb-0 fw-bold ">Update {{$moduleData->module_title}}</h6> 
        </div>


        <div class="card-body">



            <ul class="nav nav-pills mb-3" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-details" role="tab">Module Information</a></li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-table" role="tab">Table Settings</a></li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-form" role="tab">Form Settings</a></li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-builder" role="tab">Build Codes</a></li>
            </ul>
            
            <div class="tab-content">
                <div class="tab-pane fade show active" id="nav-details" role="tabpanel">
                    
                    <div class="row g-3 align-items-center">
                        <div class="col-md-6">

                        <div class="form-group row  mb-1">
                            <label for="ModuleTitle" class="col-sm-3 col-form-label">Module Title <span class="text-danger">*</span> </label>
                            <div class="col-sm-9">
                                <input type="text" name="module_title" class="form-control" value="{{$moduleData->module_title}}">
                            </div>
                        </div>

                        <div class="form-group row  mb-1">
                            <label for="ModuleTitle" class="col-sm-3 col-form-label">Controller</label>
                            <div class="col-sm-9">
                                <input type="text"  class="form-control" value="{{$moduleData->controller_name}}" disabled>
                            </div>
                        </div>


                        <div class="form-group row  mb-1">
                            <label for="ModuleTitle" class="col-sm-3 col-form-label">Database Table</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{$moduleData->database_table_name}}" disabled>
                            </div>
                        </div>


                        <div class="form-group row  mb-1">
                            <label for="ModuleTitle" class="col-sm-3 col-form-label">Grid / Table Type</label>
                            <div class="col-sm-9">
                                <input type="text"  class="form-control" value="{{$moduleData->grid_table_type}}" disabled>
                            </div>
                        </div>

                        </div>
                        <div class="col-md-6">
                          
                            <div class="form-group row mb-1">
                                <label for="ModuleTitle" class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                <textarea name="module_description" class="form-control @error('module_description') is-invalid @enderror" rows="5" cols="30" required>{{$moduleData->module_description}}</textarea>
                                    @error('module_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row  mb-1">
                                <label for="ModuleTitle" class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" {{ $moduleData->status == 1 ? 'checked' : '' }}>
                                    </div>
                                </div>
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
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item}} <a href="javascript:void(0)"><i class="fa fa-link float-end" aria-hidden="true"></i></a></td>
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
                                        <input type="text" name="configuration[{{$item}}][field_name]" class="form-control" value="{{ Helper::sanitizeField($item )}}">
                                    </div>
                                </td>

                                <td>
                                    @php 
                                        $types = [
                                            'hidden' => 'Hidden',
                                            'select' => 'Select Option',
                                            'file' => 'File',
                                            'image' => 'Image',
                                            'radio' => 'Radio',
                                            'checkbox' => 'Checkbox',
                                            'radio' => 'Radio',
                                            'text'  => 'Text',
                                            'textarea' => 'Textarea',
                                            'textareawitheditor' => 'Textarea With Editor',
                                            'datetime' => 'Date Time',
                                        ];

                                    @endphp

                                    <select name="configuration[{{$item}}][type]" class="form-control">
                                        <option value="-1" disabled selected>-- Select Type --</option>
                                        @foreach($types as $key=>$val)
                                            <option value="{{$key}}">{{$val}}</option>
                                        @endforeach
                                    </select>

                                </td>

                                <td>
                                    <div class="form-group">
                                        <input type="text" name="configuration[{{$item}}][validation]"  class="form-control" placeholder="required | unique:posts">
                                    </div>
                                </td>

                                <td>
                                    <div class="form-group">
                                        <label class="fancy-radio">
                                            <input type="checkbox" name="configuration[{{$item}}][searchable]" checked >
                                            <span><i></i>Searchable</span>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label class="fancy-radio">
                                            <input type="checkbox"name="configuration[{{$item}}][filterable]" checked >
                                            <span><i></i>Filterable</span>
                                        </label>
                                    </div>

                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


                <div class="tab-pane fade" id="nav-builder" role="tabpanel">
                    <p class="text-left"><a href="javascript:void(0)" class="btn btn-danger text-white"> <i class="fa fa-cogs"></i> Build All Codes</a></p>
                </div>



            </div>


        </div>


    </div>

    <div class="form-group mb-4 text-right">
       <p class="text-end"><button type="submit" class="btn btn-primary">Update Module</button></p>
    </div>
</form>

@endsection