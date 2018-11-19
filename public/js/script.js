jQuery.extend({
    doAJAX: function (url, data, type, callback)
    {

        if (type.toLowerCase() != "get")
        {
            data["_token"] = _token;
        }

        if (!type)
        {
            type = "GET";
        }

        return $.ajax({
            type: type,
            url: url,
            data: data,
            dataType: "json",
            error: function (XMLHttpRequest, textStatus, errorThrown)
            {
                swal("Error!", "Error Code: " + XMLHttpRequest.status + " : " + XMLHttpRequest.statusText, "error");
            },
            success: function (data)
            {
                callback(data);
            }
        });
    }
});

$(document).ready(function(){
    $(function(){
        $(".datetimepicker1").datetimepicker();
    });

});

function view_existing_employees()
{

   $('#nav li a').removeClass('active'); //remove class active from previous a tag
   $('#menu-emp').addClass('active'); //add class active to employees navigation a tag


    $.doAJAX(base_url + '/ajax_view_employees',{ },'GET',function(response){
        if(response.status = true){
                $("#content-sector").empty().append(response.content);
        }
    });
}

function contact_company()
{

    $('#nav li a').removeClass('active'); //remove class active from previous a tag
    $('#menu-contact').addClass('active'); //add class active to employees navigation a tag


    $.doAJAX(base_url + '/ajax_contact_us',{ },'GET',function(response){
        if(response.status = true){
            $("#content-sector").empty().append(response.content);
        }
    });
}

function team_info()
{

    $('#nav li a').removeClass('active'); //remove class active from previous a tag
    $('#menu-team').addClass('active'); //add class active to employees navigation a tag


    $.doAJAX(base_url + '/ajax_team',{ },'GET',function(response){
        if(response.status = true){
            $("#content-sector").empty().append(response.content);
        }
    });
}


function add_new_employee()
{

    $.doAJAX(base_url + '/ajax_new_employee',{},'GET',function(response)
    {
       if(response.status = true)
       {
           $("#content-sector").empty().append(response.content);
       }
    });
}

function store_employee()
{
    //validate input data
    let num_errors = 0;
    var data = {};
    var birth_date = $('input[name=date_of_birth]');
    let address = $('#text_address').val();


    $('form#employee_details .form-control').each(function(){
       $(this).closest('.col-md-3').removeClass('has-error');

       if(!this.value){
           if($(this).attr('mandatory')==='1')
           {
               $(this).closest('.col-md-3').addClass('has-error');
               num_errors++;
           }
       }

       data[this.name] = this.value;

    });

    if(!birth_date.val())
    {
        birth_date.closest('.input-group').addClass('has-error');
        num_errors++;
    }else
    {
        birth_date.closest('.input-group').removeClass('has-error');
    }

    if(address.trim().length < 1)
    {
        $('#text_address').closest('.col-md-3').addClass('has-error');
        num_errors++;
    }else
    {
        $('#text_address').closest('.col-md-3').removeClass('has-error');
    }

    if(num_errors > 0)
    {
        swal("","Please provide a value for the highlighted field(s).","warning");
        return false;
    }

    $.doAJAX(base_url + '/ajax_store_employee',{'data':data},'POST',function(response){
        if(response.status = true){
            swal("","The record has been successfully saved!",'success');
            $("#content-sector").empty().append(response.content);
        }else
        {
            swal("Error!",response.error_description,"error");
        }
    })
}

function delete_employee(id)
{
    var employee = id;


    swal({
            title: "Are you sure?",
            text: "The record will be deleted and this cannot be undone! ",
            type: "warning",
            showCancelButton:true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, Delete!",
            closeOnConfirm: true

        },
        function()
        {
            $.doAJAX(base_url + '/ajax_delete_record',{'employee_id':employee},'DELETE',function(response){
                if (response.status == true)
                {
                    swal("","The record is deleted successfully saved!",'success');
                    $("#content-sector").empty().append(response.content);
                }
                else
                {
                    swal("Error!!", response.error_description, "error");
                }

            });
        }

    );
    return false;
}

function edit_employee(id)
{
    var employee = id;
    $.doAJAX(base_url + '/ajax_edit_record',{'employee_id':employee},'GET',function(response){
        if (response.status == true)
        {
            $("#content-sector").empty().append(response.content);
        }
        else
        {
            swal("Error!!", response.error_description, "error");
        }

    });
}
function update_employee(id) {
    //validate input data
    let num_errors = 0;
    var data = {};
    var birth_date = $('input[name=date_of_birth]');
    var employee = id;


    $('form#employee_details .form-control').each(function(){
        $(this).closest('.col-md-3').removeClass('has-error');

        if(!this.value){
            if($(this).attr('mandatory')==='1')
            {
                $(this).closest('.col-md-3').addClass('has-error');
                num_errors++;
            }
        }

        data[this.name] = this.value;

    });

    if(!birth_date.val())
    {
        birth_date.closest('.input-group').addClass('has-error');
        num_errors++;
    }else
    {
        birth_date.closest('.input-group').removeClass('has-error');
    }

    if(num_errors > 0)
    {
        swal("","Please provide a value for the highlighted field(s).","warning");
        return false;
    }

    $.doAJAX(base_url + '/ajax_update_record',{'data':data,'employee_id':employee},'PUT',function(response){
        if(response.status = true){
            swal("","The record has been successfully updated!",'success');
            $("#content-sector").empty().append(response.content);
        }else
        {
            swal("Error!",response.error_description,"error");
        }
    })
}