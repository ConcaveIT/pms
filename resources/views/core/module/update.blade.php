@extends('layouts.app')
@section('content')

<style>
    .section_database_data,.type_database{
        display: none;
    }
    .delete_item {
        font-size: 21px;
        margin-top: 8px;
        cursor: pointer;
    }

</style>

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
                                <th>Format Type</th>
                                <th>Format Value <span 
                                        type="button" 
                                        data-bs-toggle="popover" 
                                        title="Function Formats" 
                                        data-bs-html="true" 
                                        data-bs-content="
                                            Date Time - <code>d M, h:ia</code> <br>
                                            Image - <code>/uploads/images</code> <br>
                                            File - <code>/uploads/file</code> <br>
                                            Link - <code>https://example.com</code>
                                        ">
                                        <i class="fa fa-info-circle text-info"></i>
                                    </span>
                                </th>
                                <th>Options</th>
                            </tr>
                        </thead>

                                                    
                        @php 
                            $configuration = $moduleData->configuration;
                            $table_configuration = isset(json_decode($configuration)->table_configuration) ? json_decode($configuration)->table_configuration : [];
                            $form_configuration = isset(json_decode($configuration)->form_configuration) ? json_decode($configuration)->form_configuration : [];
                        @endphp


                        <tbody>
                            @foreach($columns as $item)
                            <?php 
                                $fieldName = isset($table_configuration->{$item}->field_name)  ? $table_configuration->{$item}->field_name : '';
                                $listView = isset($table_configuration->{$item}->listview) ? true : false;
                                $format = isset($table_configuration->{$item}->format) ? $table_configuration->{$item}->format : '';
                                $format_value = isset($table_configuration->{$item}->format_value) ? $table_configuration->{$item}->format_value : '';

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

                                    <th>
                                        <div class="form-group">
                                            <input type="text" name="table_configuration[{{$item}}][format_value]" class="form-control" value="{{ $format_value }}">
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

                            @php 
                                $formFieldName = isset($form_configuration->{$item}->field_name)  ? $form_configuration->{$item}->field_name : Helper::sanitizeField($item);
                                $formFieldType = isset($form_configuration->{$item}->type)  ? $form_configuration->{$item}->type : '';
                                $formFieldValidation = isset($form_configuration->{$item}->validation)  ? $form_configuration->{$item}->validation : '';
                                $formFieldSearchable = isset($form_configuration->{$item}->searchable)  ? 'checked' : '';
                                $formFieldFilterable = isset($form_configuration->{$item}->filterable)  ? 'checked' : '';
                            @endphp


                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    {{$item}}
                                    <input type="hidden" name="form_configuration[{{$item}}][field_key]" class="form-control" value="{{ $item }}">
                                </td>
                                
                                <td>
                                    <div class="form-group">
                                        <input type="text" name="form_configuration[{{$item}}][field_name]" class="form-control" value="{{ $formFieldName }}">
                                    </div>
                                </td>

                                <td>
                                    @php 
                                        $types = [
                                            'text'  => 'Text',
                                            'textarea' => 'Textarea',
                                            'textareawitheditor' => 'Textarea With Editor',
                                            'number'    => 'Number',
                                            'select' => 'Select Option',
                                            'file' => 'File',
                                            'multiplefiles' => 'Multiple Files',
                                            'image' => 'Image',
                                            'multipleimages' => 'Multiple Images',
                                            'radio' => 'Radio',
                                            'checkbox' => 'Checkbox',
                                            'date' => 'Date',
                                            'datetime' => 'Date Time',
                                            'hidden' => 'Hidden',
                                        ];

                                    @endphp

                                    <select name="form_configuration[{{$item}}][type]" data-modal-id="{{'optionModal_'.$item}}" class="form-control trigger_option">
                                        @foreach($types as $key=>$val)
                                            <option value="{{$key}}"  @if($formFieldType == $key) selected @endif>{{$val}}</option>
                                        @endforeach
                                    </select>

                                    <!-- Modal -->
                                    <div class="modal fade" id="{{'optionModal_'.$item}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Choose Options</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="dynamicHtml">

                                                        <div class="form-group row  mb-1">
                                                            <label class="col-sm-4 col-form-label">Data Type<span class="text-danger">*</span> </label>
                                                            <div class="col-sm-4 col-form-label">
                                                                <label class="fancy-radio">
                                                                    <input type="radio" name="data_type" value="custom" class="trigger_data_type" checked>
                                                                    <span><i></i>Custom</span>
                                                                </label>
                                                            </div>
                                                            <div class="col-sm-4 col-form-label type_database">
                                                                <label class="fancy-radio">
                                                                    <input type="radio" name="data_type" value="database" class="trigger_data_type">
                                                                    <span><i></i>Database</span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="section_custom_data form-group row  mb-1">
                                                            <div class="col-sm-10">
                                                                <div class="row parent_clone_section">
                                                                    <label class="col-sm-3 col-form-label">Options</label>
                                                                    <div class="col-sm-9 col-form-label">
                                                                        <label class="fancy-radio" style="width:48%;float: left;margin-right: 3px;">
                                                                            <input type="text" name="customData[data_type][]" placeholder="Name" class="form-control">
                                                                        </label>
                                                                        <label class="fancy-radio" style="width:48%;float: left;">
                                                                            <input type="text" name="customData[data_value][]" placeholder="Value" class="form-control">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                
                                                            <div class="col-sm-2 col-form-label">
                                                                <a href="javascript:void(0)" data-modal-id="{{'optionModal_'.$item}}"  class="btn btn-primary btn-sm clone_button"> <i class="fa fa-plus"></i></a>
                                                            </div>
                                                        </div>

                                                        <div class="section_database_data">
                                                        
                                                            <div class="form-group row mb-1">
                                                                <div class="col-sm-3 col-form-label">Database</div>
                                                                <div class="col-sm-9 col-form-label">
                                                                    <select name="" class="form-control database_table_trigger">
                                                                        <option value="-1" disabled selected>--Select Table --</option>
                                                                        @foreach($tables as $table)
                                                                            @foreach ($table as $key => $value)
                                                                                <option value="{{$value}}">{{$value}}</option>
                                                                            @endforeach
                                                                        @endforeach
                                                                    </select>
                                                                    
                                                                </div>
                                                            </div> 


                                                            <div class="form-group row mb-1">
                                                                <div class="col-sm-3 col-form-label">Relation Key</div>
                                                                <div class="col-sm-9 col-form-label">
                                                                    <select name="" class="form-control relationKey"></select>
                                                                </div>
                                                            </div> 

                                                            <div class="form-group row mb-1">
                                                                <div class="col-sm-3 col-form-label">Display 1</div>
                                                                <div class="col-sm-9 col-form-label">
                                                                    <select name="" class="form-control relationKey"></select>
                                                                </div>
                                                            </div> 

                                                            <div class="form-group row mb-1">
                                                                <div class="col-sm-3 col-form-label">Display 2</div>
                                                                <div class="col-sm-9 col-form-label">
                                                                    <select name="" class="form-control relationKey"></select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row mb-1">
                                                                <div class="col-sm-3 col-form-label">Display 3</div>
                                                                <div class="col-sm-9 col-form-label">
                                                                    <select name="" class="form-control relationKey"></select>
                                                                </div>
                                                            </div>

                                                        </div>


                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <a href="javascript:void(0)" class="btn btn-primary" data-bs-dismiss="modal">Save changes</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>

                                <td>
                                    <div class="form-group">
                                        <input type="text" name="form_configuration[{{$item}}][validation]" value="{{$formFieldValidation}}"  class="form-control" placeholder="required | unique:posts">
                                    </div>
                                </td>

                                <td>
                                    <div class="form-group">
                                        <label class="fancy-radio">
                                            <input type="checkbox" name="form_configuration[{{$item}}][searchable]" {{$formFieldSearchable}} >
                                            <span><i></i>Searchable</span>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label class="fancy-radio">
                                            <input type="checkbox"name="form_configuration[{{$item}}][filterable]" {{$formFieldFilterable}} >
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
                        <a  class="btn btn-danger text-white" onclick="event.preventDefault(); document.getElementById('build-form').submit();"><i class="fa fa-cogs"></i> Build All Codes</a>
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

@push('script')
<script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
</script>

<script>
    jQuery(document).on('change','.trigger_option',function(){
        jQuery('.type_database').hide();
        var selected = jQuery(this).find('option:selected').val();
        var modalId = jQuery(this).attr('data-modal-id');
        if(selected == 'radio' || selected == 'checkbox' || selected == 'select'){
            if(selected == 'select') jQuery('.type_database').show();
            var myModal = new bootstrap.Modal(document.getElementById(modalId), {keyboard: false})
            myModal.show();
        }
    });

    jQuery(document).on('click','.trigger_data_type',function(){
        if(jQuery(this).val() == 'database'){
            jQuery('.section_database_data').show();
            jQuery('.section_custom_data ').hide();
        }else{
            jQuery('.section_database_data').hide();
            jQuery('.section_custom_data ').show();
        }

    });

    jQuery(document).on('click','.clone_button',function(){
        var html = '<div class="row cloned_item"><div class="col-sm-3 col-form-label"><p class="text-end"><i class=" delete_item text-danger fa fa-trash"></i></p></div><div class="col-sm-9 col-form-label">'+
            '<label class="fancy-radio" style="width:48%;float: left;margin-right: 3px;">'+
                '<input type="text" name="customData[data_type][]" placeholder="Name" class="form-control">'+
            '</label>'+
            '<label class="fancy-radio" style="width:48%;float: left;">'+
                '<input type="text" name="customData[data_value][]" placeholder="Value" class="form-control">'+
            '</label>'+
        '</div> </div>';
        var modalId = jQuery(this).attr('data-modal-id');
        jQuery('#'+modalId+' .parent_clone_section').after(html);
    })

    jQuery(document).on('click','.delete_item',function(){
        jQuery(this).closest('.cloned_item').remove();
    });

    jQuery(document).on('change','.database_table_trigger',function(){
        jQuery.ajax({
            url: "/core/database-columns/"+jQuery(this).find('option:selected').val(),
            cache: false,
            success: function(response){
                $(".relationKey").html(response);
            }
        });
    });


</script>
@endpush