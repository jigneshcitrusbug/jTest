@extends('layouts.admin.index')


@section('content')

<div class="main-content">

    <div class="content-wrapper">
        <!--Statistics cards Starts-->
        <div class="row  ">
            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                <div class="card ">
                    <div class="card-content">
                        <div class="card-body pt-2 pb-0">

                            <div class="panel panel-default">
                                <div class="panel-heading clearfix">
                                    <h5 class="pull-left">@lang('Menu.headding')</h5>
                                    <div class="pull-right">
                                        <!-- <button id="btnReload" type="button" class="btn btn-default">
                                            <i class="glyphicon glyphicon-triangle-right"></i> Load Data</button> -->
                                    </div>
                                </div>
                                <div class="panel-body" id="cont">
                                    <ul id="myEditor" class="sortableLists list-group">
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group">
                                <button id="btnOut" type="button" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> @lang('common.save') </button>
                            </div>
                            <div class="form-group"><textarea id="out" class="form-control" cols="50" style="display:none" rows="10"></textarea>
                            </div>

                            <!-- <div class="media">
                                <div class="media-body white text-left">
                                    <h3 class="font-large-1 mb-0">$2156</h3>
                                    <span>Total Tax</span>
                                </div>
                                <div class="media-right white text-right">
                                    <i class="icon-pie-chart font-large-1"></i>
                                </div>
                            </div> -->
                        </div>
                        <!-- <div id="Widget-line-chart" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                <div class="card ">
                    <div class="card-content">
                        <div class="card-body pt-2 pb-0">
                            <div class="panel panel-primary">
                                <div class="panel-heading">@lang('common.edit_item')</div>
                                <div class="panel-body">
                                    <form id="frmEdit" class="form-horizontal">

                                        
                                     

                                        <div class="form-group">
                                            <label for="text" class="col-sm-2 control-label">@lang('common.text')</label>
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                    <input type="text" class="form-control item-menu" name="text" id="text" placeholder="Text">
                                                    <div class="input-group-btn">
                                                        <button type="button" id="myEditor_icon" class="btn btn-default" data-iconset="fontawesome"></button>
                                                    </div>
                                                    <input type="hidden" name="icon" class="item-menu">
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label for="href" class="col-sm-2 control-label">@lang('common.url')</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control item-menu" id="href" name="href" placeholder="URL">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="target" class="col-sm-2 control-label">@lang('common.target')</label>
                                            <div class="col-sm-10">
                                                <select name="target" id="target" class="form-control item-menu">
                                                    <option value="_self">Self</option>
                                                    <option value="_blank">Blank</option>
                                                    <option value="_top">Top</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="title" class="col-sm-2 control-label">@lang('common.tooltiptext')</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="title" class="form-control item-menu" id="title" placeholder="Tooltip">
                                            </div>
                                        </div>  


                                     
                                        <div class="form-group">
                                            <label for="target" class="col-sm-2 control-label">@lang('common.selectrolls')</label>
                                            <div class="col-sm-10">
                                                <select name="rolls" multiple id="target" class="form-control item-menu">
                                                    @foreach($rolls as $roll)
                                                    <option value="{{ $roll->id}}">{{ $roll->title}}</option>           
                                                    @endforeach
                                                     
                                                </select>
                                            </div>
                                        </div>   


                                    </form>
                                </div>
                                <div class="panel-footer">
                                    <button type="button" id="btnUpdate" class="btn btn-primary" disabled><i class="fa fa-refresh"></i>@lang('common.update')</button>
                                    <button type="button" id="btnAdd" class="btn btn-success"><i class="fa fa-plus"></i> @lang('common.add')</button>
                                </div>
                            </div>
                            <!-- <div class="media">
                                <div class="media-body white text-left">
                                    <h3 class="font-large-1 mb-0">$2156</h3>
                                    <span>Total Tax</span>
                                </div>
                                <div class="media-right white text-right">
                                    <i class="icon-pie-chart font-large-1"></i>
                                </div>
                            </div> -->
                        </div>
                        <!-- <div id="Widget-line-chart" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!--Statistics cards Ends-->




    </div>
</div>
<!-- END : End Main Content-->

@endsection


@section('js')
@parent
 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"   ></script>
<script src='{{ getasset('/bs-iconpicker/js/iconset/iconset-fontawesome-4.7.0.min.js')}}'></script>
<script src='{{ getasset('/bs-iconpicker/js/bootstrap-iconpicker.js')}}'></script>
<script src='{{ getasset('/js/jquery-menu-editor.js')}}'></script>
@endsection


@section('css')
@parent
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="{{ getasset('/bs-iconpicker/css/bootstrap-iconpicker.min.css')}}" rel="stylesheet">
@endsection


@push('scripts')
<script>
            jQuery(document).ready(function () {
                // menu items
                var strjson = {!!   getSession('admin-menu-json')  !!};
                //icon picker options
                var iconPickerOptions = {searchText: 'Search...', labelHeader: '{0} de {1} Pags.'};
                //sortable list options
                var sortableListOptions = {
                    placeholderCss: {'background-color': 'cyan'}
                };

                var editor = new MenuEditor('myEditor', {listOptions: sortableListOptions, iconPicker: iconPickerOptions, labelEdit: 'Edit'});
                editor.setForm($('#frmEdit'));
                editor.setUpdateButton($('#btnUpdate'));

                editor.setData(strjson);
                
                // $('#btnReload').on('click', function () {
                //     editor.setData(strjson);
                // });

                $('#btnOut').on('click', function () {
                    var str = editor.getString();

                    updateSetting('admin-menu-json', str);
                    $("#out").text(str);
                });

                $("#btnUpdate").click(function(){
                    editor.update();
                });

                $('#btnAdd').click(function(){
                    editor.add();
                });
            });
</script>
@endpush