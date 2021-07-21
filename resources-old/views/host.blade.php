@include('layout.header')

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Host</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fa fa-home"></i>
                    </a>
                </li>

                <li><span>Host</span></li>
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

            <h2 class="panel-title">Host List</h2>
        </header>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <form name="myform" action="/host-register" method="Post" id="form2" class="form-horizontal form-bordered">

                        <section class="panel">
                            <header class="panel-heading">
                                {{--                                <div class="panel-actions">--}}
                                {{--                                    <a href="#" class="fa fa-caret-down"></a>--}}
                                {{--                                </div>--}}
                                <h2 class="panel-title">Add New Host</h2>
                            </header>
                            <div class="panel-body">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Country:</label>
                                    <div class="col-sm-10">
                                        <select id="countrySelect" size="1" onchange="makeSubmenu(this.value)" class="form-control" name="country" >
                                            <option option value="" disabled selected>Select Country</option>
                                            <option>UK</option>
                                            <option>Turkey</option>
                                            <option>Australia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">City:</label>
                                    <div class="col-sm-10">
                                        <select id="citySelect" size="1" class="form-control" name="city">
                                            <option value="" disabled selected>Select City</option>
                                            <option></option>
                                            {{--                          @foreach($city as $city_data)--}}
                                            {{--                              --}}{{--                               @if($city_data->country_id== 1)--}}
                                            {{--                              <option value="{{$city_data->id}}">{{$city_data->name}}</option>--}}
                                            {{--                              --}}{{--                               @endif--}}
                                            {{--                          @endforeach--}}
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Name:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <input type="hidden" value="2" name="user_type" class="form-control">

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Email:</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Contact:</label>
                                    <div class="col-sm-10">
                                        <input type= "number" name="contact" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Password:</label>
                                    <div class="col-sm-10">
                                        <input style="margin-bottom: 5px;" type= "text" name="row_password" size="40" class="form-control">
                                        <input type="button" class="button" value="Generate" onClick="randomPassword(10);" tabindex="2">

                                    </div>
                                </div>
                            </div>
                            <footer class="panel-footer">
                                <button type="submit" class="btn btn-primary">Add</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </footer>
                        </section>
                    </form>
                </div>
            </div>
            <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                <thead>
                <tr>
                    <th>Host Name</th>
                    <th>Email</th>
                    <th>City</th>
{{--                    <th>Status</th>--}}
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user_data)

                <tr class="gradeX">
                    <td onchange="changeName(this,{{$user_data->id}})">{{$user_data->name}}</td>
                    <td>{{$user_data->email}}</td>
                    <td>{{$user_data->city_id}}</td>
{{--                     @if($host_data->request_status=="Pending")--}}
{{--                        <td style="background-color: red;color:white">{{$host_data->request_status}}</td>--}}
{{--                     @elseif($host_data->request_status=="Approved")--}}
{{--                        <td style="background-color: green;color:white">{{$host_data->request_status}}</td>--}}
{{--                     @endif--}}
                        <td class="actions row">

                        <form method="post" action="host/edit/{{$user_data->id}}">
                            {{ csrf_field()}}
                            <input type="hidden" id="edited_name{{$user_data->id}}" name="name" value="{{$user_data->name}}"/>
                            <input type="hidden" name="id" value="{{$user_data->id}}"/>
                            <button type="submit" class="hidden on-editing save-row btn btn-primary"><i class="fa fa-save"></i></button>
                            <a style="display: inline-block;" class="hidden on-editing cancel-row btn btn-danger"><i style="color: white" class="fa fa-times"></i></a>
                        </form>

                        <a class="on-default edit-row btn btn-primary"><i style="color: white" class="fa fa-pencil"></i></a>
                        <form style="display: inline-block;" method="post" action="host/delete/{{ $user_data->id }}">
                            {{ csrf_field()}}
                            <input type="hidden" name="id" value="{{$user_data->id}}"/>
                            <button type="submit" class="on-default edit-row btn btn-danger"><i class="fa fa-trash-o"></i></button>
                        </form>
                            @if($user_data->request_status=="Pending")
                                <form style="display: inline-block;" method="post" action="host/delete/{{ $user_data->id }}">
                                    {{ csrf_field()}}
                                    <input type="hidden" name="id" value="{{$user_data->id}}"/>
                                    <button type="submit" class="on-default edit-row btn btn-success"><i class="fa fa-check"></i></button>
                                </form>
                            @endif
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
    var citiesByState = {
        UK: ["London"],
        Turkey: ["Istanbul"],
        Australia: ["Sydney"]
    }
    function makeSubmenu(value) {
        if(value.length==0) document.getElementById("citySelect").innerHTML = "<option></option>";
        else {
            var citiesOptions = "";
            for(cityId in citiesByState[value]) {
                citiesOptions+="<option>"+citiesByState[value][cityId]+"</option>";
            }
            document.getElementById("citySelect").innerHTML = citiesOptions;
        }
    }
    function displaySelected() { var country = document.getElementById("countrySelect").value;
        var city = document.getElementById("citySelect").value;
        alert(country+"\n"+city);
    }
    function resetSelection() {
        document.getElementById("countrySelect").selectedIndex = 0;
        document.getElementById("citySelect").selectedIndex = 0;
    }
    function randomPassword(length) {
        var chars = "abcdefghijklmnopqrstuvwxyz!@#$%^&*()-+<>ABCDEFGHIJKLMNOP1234567890";
        var pass = "";
        for (var x = 0; x < length; x++) {
            var i = Math.floor(Math.random() * chars.length);
            pass += chars.charAt(i);
        }
        myform.row_password.value = pass;
    }
</script>
@include('layout.footer')
