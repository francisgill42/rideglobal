@include('layout.header')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Country</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fa fa-home"></i>
                    </a>
                </li>

                <li><span>Country</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <!-- start: page -->
    <section class="panel">
        <header class="panel-heading">
            <!-- <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div> -->

            <h2 class="panel-title">Country List</h2>
        </header>

        <div class="panel-body">
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <form action="store-country" method="Post" id="form2" class="form-horizontal form-bordered">--}}
{{--                        <section class="panel">--}}
{{--                            <header class="panel-heading">--}}
{{--                                <div class="panel-actions">--}}
{{--                                    <a href="#" class="fa fa-caret-down"></a>--}}
{{--                                </div>--}}

{{--                                <h2 class="panel-title">Add New Country</h2>--}}
{{--                            </header>--}}
{{--                            <div class="panel-body">--}}
{{--                                    {{ csrf_field() }}--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label class="col-sm-2 control-label">Name:</label>--}}
{{--                                        <div class="col-sm-10">--}}
{{--                                            <input type="text" name="name" class="form-control">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                            </div>--}}
{{--                            <footer class="panel-footer">--}}
{{--                                <button type="submit" class="btn btn-primary">Add</button>--}}
{{--                                <button type="reset" class="btn btn-default">Reset</button>--}}
{{--                            </footer>--}}
{{--                        </section>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--                <div class="col-sm-6">--}}
{{--                    <div class="mb-md">--}}
{{--                        <button  class="btn btn-primary">Add <i class="fa fa-plus"></i></button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>No Of Cities</th>
                    <th>Rides</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($country_data as $country_data)
                    <tr class="gradeX">
                        <td onchange="changeName(this,{{$country_data->id}})">{{ $country_data->name }}</td>
                        <td>0</td>
                        <td>0</td>
                        <td class="actions row">

                            <form method="post" action="edit-country/{{$country_data->id}}">
                                {{ csrf_field()}}
                                <input type="hidden" id="edited_name{{$country_data->id}}" name="name" value="{{$country_data->name}}"/>
                                <input type="hidden" name="id" value="{{$country_data->id}}"/>
                                <button type="submit" class="hidden on-editing save-row btn btn-primary"><i class="fa fa-save"></i></button>
                                <a style="display: inline-block;" class="hidden on-editing cancel-row btn btn-danger"><i style="color: white" class="fa fa-times"></i></a>
                            </form>

                            <a class="on-default edit-row btn btn-primary"><i style="color: white" class="fa fa-pencil"></i></a>
                            <form style="display: inline-block;" method="post" action="delete-country/{{ $country_data->id }}">
                                {{ csrf_field()}}
                                <input type="hidden" name="id" value="{{$country_data->id}}"/>
                                <button type="submit" class="on-default edit-row btn btn-danger"><i class="fa fa-trash-o"></i></button>
                            </form>
                        </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </section>
    <!-- end: page -->
</section>
</div>
@include('layout.rightbar')

</section>
<div id="dialog" class="modal-block mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Are you sure?</h2>
        </header>
        <div class="panel-body">
            <div class="modal-wrapper">
                <div class="modal-text">
                    <p>Are you sure that you want to delete this row?</p>
                </div>
            </div>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <button id="dialogConfirm" class="btn btn-primary">Confirm</button>
                    <button id="dialogCancel" class="btn btn-default">Cancel</button>
                </div>
            </div>
        </footer>
    </section>
</div>

<script src="admin/assets/vendor/jquery/jquery.js"></script>
<script src="admin/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
<script src="admin/assets/vendor/bootstrap/js/bootstrap.js"></script>
<script src="admin/assets/vendor/nanoscroller/nanoscroller.js"></script>
<script src="admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
{{--<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>--}}
{{--<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>--}}

<!-- Specific Page Vendor -->
{{--<script src="assets/vendor/select2/select2.js"></script>--}}
<script src="admin/assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
<script src="admin/assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="admin/assets/javascripts/theme.js"></script>

<!-- Theme Custom -->
<script src="admin/assets/javascripts/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="admin/assets/javascripts/theme.init.js"></script>


<!-- Examples -->
<script src="admin/assets/javascripts/tables/examples.datatables.editable.js"></script>


<script>
    function changeName(obj,id)
    {
        var country_name=this.document.querySelector("#datatable-editable > tbody > tr > td.sorting_1 > input").value;
        document.getElementById("edited_name"+id).value = country_name;
    }
</script>
@include('layout.footer')