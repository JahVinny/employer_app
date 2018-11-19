@extends('app')

@section('title', 'Home')

@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="system-info">
                    <div class="row">
                        <div class="col-md-6 column" style="position: relative;top:100px;">
                            <img src="{{asset('images/brooke-cagle-609875-unsplash.jpg')}}" alt="">
                        </div>
                        <div class="col-md-6 column">
                            <div class="system-info">
                                <span>Welcome</span>
                                <h3>Hello! Welcome to our
                                    <i>Employee App</i>
                                </h3>
                                <p>
                                    The new app allows the user to save personal information, contact details, address,
                                    <br>
                                    social network links of an employee. You can then be able to view this information
                                    <br>
                                    later on. You can also edit the existing employee information or delete an employee
                                    <br>
                                    who no longer works for the company. To start click on Employee navigation tab to
                                    <br>
                                    view existing employees. You can therefore add, edit or delete an employee.
                                </p>

                                <ul>
                                    <li>
                                        <i class="fas fa-address-book"></i>New Employee
                                    </li>
                                    <li>
                                        <i class="fas fa-users"></i> View Employees
                                    </li>
                                    <li>
                                        <i class="fas fa-pencil-alt"></i> Edit Employee
                                    </li>
                                    <li>
                                        <i class="fas fa-trash"></i> Delete Employee
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

