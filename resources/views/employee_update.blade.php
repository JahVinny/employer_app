<form class="form-horizontal" id="employee_details" method="POST">
    <div class="container-fluid" style="padding-left: 50px;padding-right: 50px;">
        <div class="row">
            <br>
            <section class="content-header">
                <h1>Employee Information</h1>
            </section>
            <section class="content">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Update Employee</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="form-group input_border" id="input_format" >
                                <div class="col-md-3" style="position: relative;top:5px;">
                                    <label for="first_name" class="col-md-offset-1 control-label">
                                        First Name:
                                    </label>
                                </div>

                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="first_name" mandatory=1
                                           value="{{$employee->first_name}}">
                                </div>

                                <div class="col-md-3" style="position: relative;top:5px;">
                                    <label for="last_name" class="col-md-offset-1 control-label">
                                        Last Name:
                                    </label>
                                </div>

                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="last_name" mandatory=1
                                           value="{{$employee->last_name}}">
                                </div>
                            </div>

                            <div class="form-group" id="input_format" >
                                <div class="col-md-3" style="position: relative;top:5px;">
                                    <label for="date_of_birth" class="col-md-offset-1 control-label">
                                        Date of birth:
                                    </label>
                                </div>

                                <div class="col-md-3">
                                    <div class="input-group date datetimepicker1">
                                        <input type="text" class="form-control" placeholder="Date Format: yyyy-mm-dd"
                                               name="date_of_birth"  value="{{$employee->date_of_birth}}"/>
                                        <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                    </div>
                                </div>

                                <div class="col-md-3" style="position: relative;top:5px;">
                                    <label for="cell_number" class="col-md-offset-1 control-label">
                                        Cell number:
                                    </label>
                                </div>

                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="cell_number" mandatory=1
                                           value="{{$employee->cell_number}}" placeholder="Cell e.g 0714524135">
                                </div>
                            </div>

                            <div class="form-group" id="input_format">
                                <div class="col-md-3" style="position: relative;top:5px;">
                                    <label for="tel_number" class="col-md-offset-1 control-label">
                                        Telephone Number:
                                    </label>
                                </div>

                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="tel_number"
                                           value="{{$employee->tel_number}}" placeholder="Tel e.g 0588633097">
                                </div>

                                <div class="col-md-3" style="position: relative;top:5px;">
                                    <label for="email_address" class="col-md-offset-1 control-label">
                                        Email Address:
                                    </label>
                                </div>

                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="email_address" mandatory=1
                                           placeholder="Email e.g test@gmail.com" value="{{$employee->email_address}}">
                                </div>
                            </div>

                            <div class="form-group" id="input_format">
                                <div class="col-md-3" style="position: relative;top:5px;">
                                    <label for="linkedin_link" class="col-md-offset-1 control-label">
                                        LinkedIn Account Link:
                                    </label>
                                </div>

                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="linkedin_link"
                                           value="{{$employee->linkedin_link}}">
                                </div>

                                <div class="col-md-3" style="position: relative;top:5px;">
                                    <label for="facebook_link" class="col-md-offset-1 control-label">
                                        Facebook Account Link:
                                    </label>
                                </div>

                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="facebook_link"
                                           value="{{$employee->facebook_link}}"">
                                </div>
                            </div>

                            <div class="form-group" id="input_format">
                                <div class="col-md-3" style="position: relative;top:5px;">
                                    <label for="home_address" class="col-md-offset-1 control-label">
                                        Home Address:
                                    </label>
                                </div>

                                <div class="col-md-3">
                                        <input type="text" class="form-control" name="home_address" mandatory=1
                                               value="{{$employee->home_address}}"  >

                                </div>

                                <div class="col-md-3" style="position: relative;top:5px;">
                                    <label for="job_title" class="col-md-offset-1 control-label">
                                        Job Title:
                                    </label>
                                </div>

                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="job_title"  mandatory=1
                                           placeholder="Title e.g. Senior Analyst" value="{{$employee->job_title}}">
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="row" align="center">
                                <button class="btn btn-info btn-sm" type="button" onclick="update_employee({{$employee->id}});"> <i class="fas fa-spinner"></i> Update
                                </button>
                                <button class="btn btn-info btn-sm" onclick="view_existing_employees();" type="button"> <i class="fas fa-ban"></i>
                                    Cancel
                                </button>
                            </div>
                        </div>

                    </div>


                </div>

            </section>
        </div>
    </div>
</form>


