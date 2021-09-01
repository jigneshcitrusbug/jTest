@extends('layouts.admin.index')

@section('body_class',' pace-done')

@section('title',trans('survey.label.survey'))

@section('content')
 
<div class="main-content">

    <div class="content-wrapper">

        <div class="row">
            <div class="col-sm-12">
                <div class="content-header"> @lang('generator.title') </div>
                
            </div> 
        </div>

        <section id="configuration">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        
                        <div class="card-body collapse show">

                            <div class="card-block card-dashboard">


                                <form class="icons-tab-steps wizard-circle" method="POST" action="{{ route('admin.generator.build') }}" >

                                    @csrf

                                    <!-- Step 1 -->
                                    <h4 class="card-title mb-0">Database Table</h4>
                                     
                                    <fieldset>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label for="firstName2">Select Table</label>
                                            <select class="form-control" id="table" name="table">
                                                <option value="">Please Select</option>
                                                @foreach($tables as $table)
                                                    <option value="{{$table}}">{{$table}}</option>
                                                @endforeach
                                            </select>    
                                          </div>
                                        </div>
                                         
                                      </div>
                                       
                                    </fieldset>
                                    <hr>
                                    <!-- Step 2 -->
                                    <h4 class="card-title mb-0">Fields</h4>
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <label class="col-lg-1">Field Name</label>
                                                        <div class="col-lg-11">
                                                            <div class="row">
                                                                <div class="col-1">
                                                                    Fillable    
                                                                </div>
                                                                <div class="col-1">
                                                                  List 
                                                                </div>
                                                                <div class="col-1">
                                                                    Label
                                                                </div>
                                                                <div class="col-1">
                                                                   Form 
                                                                </div>
                                                                <div class="col-1">
                                                                    Label
                                                                </div>
                                                                <div class="col-1">
                                                                    Type
                                                                </div>
                                                                <div class="col-2">
                                                                    Values
                                                                </div>
                                                                <div class="col-2">
                                                                    Validation
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                      <div id="sample_field_row" style="display:none" >
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <label class="col-lg-1">{FIELDS_NAME}</label>
                                                        <div class="col-lg-11">
                                                            <div class="row">
                                                                <div class="col-1">
                                                                    <div class="custom-checkbox custom-control-inline ml-3">
                                                                        <input type="checkbox" class="custom-control-input"  id="fields_{i}" value="{FIELDS_NAME}" name="fields[]">
                                                                        <label class="custom-control-label" for="fields_{i}"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-1">
                                                                    <div class="custom-checkbox custom-control-inline ml-3">
                                                                        <input type="checkbox" class="custom-control-input"  id="listFields_{i}" value="{FIELDS_NAME}" name="listFields[]">
                                                                        <label class="custom-control-label" for="listFields_{i}"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-1">
                                                                    <input type="text" class="form-control"  id="listFieldsLabel_{i}" value="{FIELDS_NAME}" name="listFieldsLabel[{FIELDS_NAME}]">
                                                                </div>
                                                                <div class="col-1">
                                                                    <div class="custom-checkbox custom-control-inline ml-3">
                                                                        <input type="checkbox" class="custom-control-input"  id="formFields_{i}" value="{FIELDS_NAME}" name="formFields[{FIELDS_NAME}]">
                                                                        <label class="custom-control-label" for="formFields_{i}"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-1">
                                                                    <input type="text" class="form-control"  id="formFieldsLabel_{i}" value="{FIELDS_NAME}" name="formFieldsLabel[]">
                                                                </div>
                                                                <div class="col-1">
                                                                    <select class="form-control"  id="formFieldsType_{i}"   name="formFieldsType[{FIELDS_NAME}]">
                                                                            <option value="cbText">Text</option> 
                                                                            <option value="cbTextarea">Textarea</option> 
                                                                            <option value="cbEditor">Editor</option> 
                                                                            <option value="cbPassword">Password</option> 
                                                                            <option value="cbEmail">Email</option> 
                                                                            <option value="cbNumber">Number</option> 
                                                                            <option value="cbDate">Date</option> 
                                                                            <option value="cbSelect">Select</option> 
                                                                            <option value="cbSelectRange">Select-Range</option> 
                                                                            <option value="cbSelectMonth">Select-Month</option> 
                                                                            <option value="cbCheckbox">Checkbox</option> 
                                                                            <option value="cbCheckboxMultiple">Checkbox Multiple</option> 
                                                                            <option value="cbRadioList">Radio List</option> 
                                                                            <option value="cbMediaImage">Media</option> 
                                                                    </select>
                                                                </div>
                                                                <div class="col-2">
                                                                    <textarea  class="form-control"  id="formFieldsValue_{i}" name="formFieldsValue[{FIELDS_NAME}]"></textarea>
                                                                </div>
                                                                <div class="col-2">
                                                                    <textarea  class="form-control"  id="formFieldsValidation_{i}" name="formFieldsValidation[{FIELDS_NAME}]"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                      </div>  
                                      <div id="field_row">

                                      </div>
                                    </fieldset>
                                    <hr>
                                    <!-- Step 3 -->
                                    <h4 class="card-title mb-0">Relations</h4>
                                    <fieldset>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label for="relation">Relation Name</label>
                                            <div class="input-group">
                                                <select class="form-control" id="relation" name="relation">
                                                    <option value="">Please Select</option>
                                                    <option value="hasone">Has One</option>
                                                    <option value="belongsToMany">Belongs To Many</option>
                                                </select>
                                                <div class="input-group-append">
                                                  <button type="button" id="addRelation"  type="button" class="btn btn-raised btn-primary"   >Add</button>
                                                </div>
                                              </div>

                                          </div>
                                        </div>
                                         
                                        
                                      </div>
                                      <div class="" id="relaton_hasone_list_sample" style="display:none">
                                        <div class="row" id="relation_row_{i}">
                                            <div class="col-md-4" >
                                                <label for="eventName2">Modal Name</label>
                                                <select class="form-control" id="relaton_hasone_modal_{i}" name="relation[hasone][modal][]">
                                                    <option value="">Please Select</option>
                                                    @foreach($tables as $table)
                                                        <option value="{{$table}}">{{$table}}</option>
                                                    @endforeach
                                                </select>    
                                            </div>
                                           
                                            <div class="col-md-4">
                                                <label for="eventName2">Primary Key</label>
                                                <input type="text" class="form-control"   id="relaton_hasone_local_{i}" value="id" name="relation[hasone][local][]">

                                            </div>
                                            <div class="col-md-4">
                                                <label for="eventName2">Foreign Key</label>
                                                

                                                <div class="input-group">
                                                    <input type="text" class="form-control"   id="relaton_hasone_foreign_{i}" value=""  name="relation[hasone][foreign][]">
                                                    <div class="input-group-append">
                                                      <button type="button" id="deleteRelation_{i}" type="button" class="btn btn-raised btn-danger deleteRelation" data-id="{i}"  value="DELETE">DELETE</button>
                                                    </div>
                                                  </div>

                                            </div>
                                            
                                        </div>
                                      </div>
                                      <div class="" id="relaton_hasone_list">
                                        <h5 class="card-title mb-0">Has One</h5>
                                      </div>
                                      <div class="" id="relaton_belongsToMany_list_sample" style="display:none">
                                        <div class="row" id="relation_row_{i}">
                                            <div class="col-md-3" >
                                                <label for="relaton_belongsToMany_modal_{i}">Modal Name</label>
                                                <select class="form-control" id="relaton_belongsToMany_modal_{i}" name="relation[belongsToMany][modal][]">
                                                    <option value="">Please Select</option>
                                                    @foreach($tables as $table)
                                                        <option value="{{$table}}">{{$table}}</option>
                                                    @endforeach
                                                </select>    
                                            </div>
                                            <div class="col-md-3" >
                                                <label for="relaton_belongsToMany_pivot_table_{i}">Pivot Table Name</label>
                                                <input type="text" class="form-control"   id="relaton_belongsToMany_pivot_table_{i}" value="" name="relation[belongsToMany][pivot_table][]">
                                            </div>

                                            <div class="col-md-3">
                                                <label for="relaton_belongsToMany_local_{i}">Primary Key</label>
                                                <input type="text" class="form-control"   id="relaton_belongsToMany_local_{i}" value="id"  name="relation[belongsToMany][local][]">
                                                 

                                            </div>

                                            <div class="col-md-3">
                                                <label for="relaton_belongsToMany_foreign_{i}">Foreign Key</label>
                                               
                                                <div class="input-group">
                                                    <input type="text" class="form-control"   id="relaton_belongsToMany_foreign_{i}"  name="relation[belongsToMany][foreign][]">
                                                    <div class="input-group-append">
                                                      <button type="button" id="deleteRelation_{i}" type="button" class="btn btn-raised btn-danger deleteRelation" data-id="{i}"  value="DELETE">DELETE</button>
                                                    </div>
                                                  </div>
                                            </div>
                                            
                                             
                                        </div>
                                      </div>
                                      <div class="" id="relaton_belongsToMany_list">
                                        <h5 class="card-title mb-0">Belongs To Many</h5>
                                      </div>
                                    </fieldset>
                                    <hr>
                                    <!-- Step 4 -->
                                    <h4 class="card-title mb-0">Images</h4>
                                    <fieldset>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <label for="image">Image Type</label>
                                             

                                              <div class="input-group">
                                                <select class="form-control" id="image" name="image">
                                                    <option value="">Please Select</option>
                                                    <option value="single">Single Image</option>
                                                    <option value="multiple">Multiple Image</option>
                                                </select>
                                                <div class="input-group-append">
                                                  <button type="button" id="addImage"  type="button" class="btn btn-raised btn-primary"   >Add</button>
                                                </div>
                                              </div>


                                            </div>
                                          </div>
                                           
                                          
                                        </div>
                                        <div class="" id="image_single_list_sample" style="display:none">
                                          <div class="row" id="image_row_{i}">
                                              <div class="col-md-6" >
                                                  <div class="input-group">
                                                    <input type="text" class="form-control"   id="image_single_label_{i}" value="" name="image[single][label][]">
                                                    <div class="input-group-append">
                                                      <button type="button" id="deleteImage_{i}" type="button" class="btn btn-raised btn-danger deleteImage" data-id="{i}"  value="DELETE">DELETE</button>
                                                    </div>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                        <div class="" id="image_single_list">
                                            <h5 class="card-title mb-0">Single Image Label</h5>
                                        </div>
                                        <div class="" id="image_multiple_list_sample" style="display:none">
                                          <div class="row" id="image_row_{i}">
                                            <div class="col-md-6" >
                                                <div class="input-group">
                                                    <input type="text" class="form-control"   id="image_multiple_label_{i}" value="" name="image[multiple][label][]">
                                                    <div class="input-group-append">
                                                        <button type="button" id="deleteImage_{i}" type="button" class="btn btn-raised btn-danger deleteImage" data-id="{i}"  value="DELETE">DELETE</button>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="" id="image_multiple_list">
                                            <h5 class="card-title mb-0">Multiple Image Label</h5>
                                        </div>
                                      </fieldset>
                                     
                                 
                                      <div class="form-actions">
                                       
                                        <button type="submit" class="btn btn-raised btn-raised btn-primary">
                                          <i class="fa fa-check-square-o"></i> Build
                                        </button>
                                      </div>
                                 
                                 
                                    </form>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection



@section('js')
@parent 




<script src="{{ getasset('/app-assets/vendors/js/jquery.steps.min.js') }}" type="text/javascript"></script>
 
@endsection


@section('css')
@parent
 
@endsection
 

@push('scripts')
 
<script>

$(document).ready( function(){

    var fields;
    $("#table").on('change',function(){
        $.ajax({
            type: "POST",
            url: "{{ route('admin.generator.getfields') }}",
            data: {
                table:$(this).val()
            },
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            success: function (data) {
                fields = data.data;
                drawFields(fields);
            },
            error: function (xhr, status, error) {
                var erro = ajaxError(xhr, status, error);
            }
        });
    });

    $("#addImage").on('click',function(){
        var relation = $('#image').val();
        var random = Math.floor((Math.random() * 100) + 1);
        if(relation == "single"){
            var html = $("#image_single_list_sample").html();
            var ghtml = html.replace(/{i}/g, random);
            $("#image_single_list").append(ghtml);
        }else if(relation == 'multiple'){
            var html = $("#image_multiple_list_sample").html();
            var ghtml = html.replace(/{i}/g, random);
            $("#image_multiple_list").append(ghtml);
        }
        return false;
    });

    $('#image_single_list').on('click', '.deleteImage', function () {
        var id = $(this).attr('data-id');
        $("#image_row_"+id).remove();
        return false;
    });

    $('#image_multiple_list').on('click', '.deleteImage', function () {
        var id = $(this).attr('data-id');
        $("#image_row_"+id).remove();
        return false;
    });

    $("#addRelation").on('click',function(){
        var relation = $('#relation').val();
        var random = Math.floor((Math.random() * 100) + 1);
        if(relation == "hasone"){
            var html = $("#relaton_hasone_list_sample").html();
            var ghtml = html.replace(/{i}/g, random);
            $("#relaton_hasone_list").append(ghtml);
        }else if(relation == 'belongsToMany'){
            var html = $("#relaton_belongsToMany_list_sample").html();
            var ghtml = html.replace(/{i}/g, random);
            $("#relaton_belongsToMany_list").append(ghtml);
        }
        return false;
    });

    $('#relaton_hasone_list').on('click', '.deleteRelation', function () {
        var id = $(this).attr('data-id');
        $("#relation_row_"+id).remove();
        return false;
    });

    $('#relaton_belongsToMany_list').on('click', '.deleteRelation', function () {
        var id = $(this).attr('data-id');
        $("#relation_row_"+id).remove();
        return false;
    });

    function drawFields(data){
        var html = $("#sample_field_row").html();
        var ghtml = '';
        $.each(data, function( index, value ) {
            var thtml = html.replace(/{FIELDS_NAME}/g, value);
            thtml = thtml.replace(/{i}/g, index);
            ghtml += thtml;
        });
        $("#field_row").html(ghtml);
    }
 
 });
</script>
@endpush
