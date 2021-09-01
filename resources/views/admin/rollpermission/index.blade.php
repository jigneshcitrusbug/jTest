@extends('layouts.admin.index')

@section('body_class',' pace-done')

@section('title',trans('survey.label.survey'))

@section('content')

<!-- <div class="row">
    <div class="col-sm-12">
        <div class="content-header"> @lang('survey.label.survey') </div>
        
    </div>
</div> -->
<div class="main-content">

    <div class="content-wrapper">

        <div class="row">
            <div class="col-sm-12">
                <div class="content-header"> @lang($context.'.title') {{ $module }} </div>
                
            </div> 
        </div>

        <section id="configuration">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                            <div class="row">

                                <div class="col-6">
                                    <div class="actions pull-left">
                                         
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="card-body collapse show">

                            <div class="card-block card-dashboard">


                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped datatable responsive">
                                        <thead>
                                            <tr>
                                                <th>  </th>
                                                @foreach($permissions as $permission)
                                                <th> {{ $permission->title }} </th>
                                                @endforeach 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($rolls as $roll)
                                            <tr>
                                                    <td>
                                                        {{ $roll->title}}
                                                    </td>    
                                                    @foreach($permissions as $permission)
                                                    <td>   
                                                         
                                                        <input type="checkbox" class="changepermission" data-roll="{{$roll->id}}" data-permission="{{$permission->id}}" data-module="{{$module}}" {{ checkpermission($roll->id,$permission->id,$module) ? 'checked="checked"':'' }}  />

                                                    </td>
                                                    @endforeach 
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
        </section>
    </div>
</div>

@endsection



@section('js')
@parent


<script src="{{ getasset('/app-assets/vendors/js/datatable/datatables.min.js') }}" type="text/javascript"></script>

@endsection


@section('css')
@parent
<link rel="stylesheet" type="text/css" href="{{ getasset('/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">

@endsection



@push('scripts')
<script>
jQuery(document).ready(function () {
    $('.changepermission').on("click",function(){

        var roll = $(this).attr('data-roll');
        var permission = $(this).attr('data-permission');
        var module = $(this).attr('data-module');
        var check = $(this).is(':checked');

        console.log(check);

        $.ajax({
            method: "POST",
            url: "{{route('admin.rollpermissions.update')}}",
            data : {
            'roll' : roll,
            'permission' : permission,
            'module' : module,
            'check' : check,
            '_token' : '{{ csrf_token() }}'
            } 
        })
        .done(function( html ) {
            $( "#results" ).append( html );
        });

    });
});

</script>


@endpush
