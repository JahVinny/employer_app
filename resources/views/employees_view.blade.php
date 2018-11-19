<div class="container-fluid" style="padding-left: 50px;padding-right: 50px;">
    <div class="row">
        <br>
        <section class="content-header">
            <h1>Employees</h1>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        Existing Employees
                    </h3>
                    <div class="box-tools pull-right">
                        <div class="btn btn-group btn-group-sm" role="group">
                            <button class="btn btn-info btn-sm" type="button" onclick="add_new_employee()">New Record
                            </button>
                        </div>
                    </div>

                </div>
                <div class="box-body">
                    <table class="table table-condensed">
                        <thead>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Date Of Birth</th>
                        <th>Home Address</th>
                        <th>Cell Number</th>
                        <th>Email Address</th>
                        <th>Telephone Number</th>
                        <th>LinkedIn</th>
                        <th>Facebook</th>
                        <th>Job Title</th>
                        <th class="text-center">Action</th>
                        </thead>
                        <tbody>
                        @foreach($employees as $employee)
                            <tr>
                                <td>{{$employee->id}}</td>
                                <td>{{$employee->first_name}}</td>
                                <td>{{$employee->last_name}}</td>
                                <td>{{$employee->date_of_birth}}</td>
                                <td>{{$employee->home_address}}</td>
                                <td>{{$employee->cell_number}}</td>
                                <td>{{$employee->email_address}}</td>
                                <td>{{$employee->tel_number}}</td>
                                <td>{{$employee->linkedin_link}}</td>
                                <td>{{$employee->facebook_link}}</td>
                                <td>{{$employee->job_title}}</td>
                                <td class="text-center">
                                    <a class="btn btn-info btn-xs" href="javascript:void(0)"
                                       onclick="edit_employee({{$employee->id}})">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a class="btn btn-danger btn-xs" href="javascript:void(0)"
                                       onclick="delete_employee({{$employee->id}})">
                                        <i class="fas fa-trash-alt"></i> Del
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>

            </div>

        </section>

    </div>
</div>
