@extends('layouts.app')
@section('content')

<div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">

        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Update {{$moduleData->module_title}}</h3>
                    <div class="col-auto d-flex w-sm-100">
                        <a class="btn btn-dark btn-set-task w-sm-100" target="_blank" href="{{route( strtolower($moduleData->controller_name).'.index')}}"> <i class="fa fa-eye"></i> View Module</a>
                    </div>
                </div>
            </div>
        </div>

<form method="post" action="{{route('module.update',$moduleData->id)}}">
    @csrf
    @method('put')
    <div class="card mb-3">
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
                                <th>SL</th>
                                <th>Field</th>
                                <th>Title / Caption</th>
                                <th>Format Function</th>
                                <th>Options</th>
                            </tr>
                        </thead>

                                                    
                        @php 
                            $configuration = $moduleData->configuration;
                            $table_configuration = json_decode($configuration)->table_configuration;
                        @endphp


                        <tbody>
                            @foreach($columns as $item)
                            <?php 
                                $fieldName = $table_configuration->{$item}->field_name;
                                $listView = isset($table_configuration->{$item}->listview) ? true : false;
                                $format = $table_configuration->{$item}->format;

                                if(!$fieldName){
                                    $fieldName = ucwords(str_replace('_',' ',$item));
                                }
                             ?>
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item}} <a href="javascript:void(0)"><i class="fa fa-link float-end" aria-hidden="true"></i></a></td>
                                    <th>
                                        <div class="form-group">
                                            <input type="text" name="table_configuration[{{$item}}][field_name]" class="form-control" value="{{ $fieldName }}">
                                        </div>
                                    </th>
                                    <th>
                                        <div class="form-group">

                                            @php
                                                $format_options = [
                                                    'default' => 'Default',
                                                    'image' => 'Image',
                                                    'link' => 'Link',
                                                    'file'  => 'File',
                                                    'datetime' => 'Date Time'
                                                ];
                                            @endphp

                                            <select name="table_configuration[{{$item}}][format]" id="format_option" class="form-control">
                                                @foreach($format_options as $key => $val)
                                                    <option value="{{ $key}}" @if($format == $key) selected  @endif>{{$val}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </th>
                                    <td>
                                        <div class="form-group">
                                            <label class="fancy-radio">
                                                <input type="checkbox" name="table_configuration[{{$item}}][listview]"  @if($listView) checked @endif  >
                                                <span><i></i>Listview</span>
                                            </label>
                                        </div>
                                    </td>

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
                                        <input type="text" name="form_configuration[{{$item}}][field_name]" class="form-control" value="{{ Helper::sanitizeField($item )}}">
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

                                    <select name="form_configuration[{{$item}}][type]" class="form-control">
                                        <option value="-1" disabled selected>-- Select Type --</option>
                                        @foreach($types as $key=>$val)
                                            <option value="{{$key}}">{{$val}}</option>
                                        @endforeach
                                    </select>

                                </td>

                                <td>
                                    <div class="form-group">
                                        <input type="text" name="form_configuration[{{$item}}][validation]"  class="form-control" placeholder="required | unique:posts">
                                    </div>
                                </td>

                                <td>
                                    <div class="form-group">
                                        <label class="fancy-radio">
                                            <input type="checkbox" name="form_configuration[{{$item}}][searchable]" checked >
                                            <span><i></i>Searchable</span>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label class="fancy-radio">
                                            <input type="checkbox"name="form_configuration[{{$item}}][filterable]" checked >
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
                    <p class="text-center p-5">
                        <a  class="btn btn-danger text-white" href="#"  onclick="event.preventDefault(); document.getElementById('build-form').submit();"><i class="fa fa-cogs"></i> Build All Codes</a>
                    </p>
                </div>

            </div>


        </div>


    </div>

    <div class="form-group mb-4 text-right">
       <p class="text-end"><button type="submit" class="btn btn-primary">Update Module</button></p>
    </div>
</form>

<form id="build-form" action="{{route('module.build',$moduleData->id)}}" method="POST" class="d-none">
    @csrf
</form>

    </div>
</div>

@endsection