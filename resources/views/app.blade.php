<!DOCTYPE html>
<html>
<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datetimepicker.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/sweetalert.css')}}"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Employee App</title>
</head>
<body>
<form id="form-data" method="post">
    @csrf
    <div>
        <div id="wrapper">

            <div id="navigation">
                <ul id="nav">
                    <li><a href="/" class="active" id="menu-home">Home</a></li>
                    <li>
                        <a href="javascript:void(0)" onclick="view_existing_employees();"
                           id="menu-emp">Employees</a></li>

                    <li><a href="javascript:void(0)" onclick="contact_company()"
                           id="menu-contact">Contact Us</a></li>
                    <li>
                        <a id="menu-team" href="javascript:void(0)"onclick="team_info()">
                            Team
                        </a>
                    </li>
                </ul>
            </div>

            <div id="topImage">
                <img src="{{ asset('images/pexels-photo-877695.jpeg')}}" style="width:100%;height:750px;">
            </div>

            <div id="content-sector">
                @yield('content')
            </div>

            <footer id="footer">
                <div class="row iso-row-inverse" id="footer-details">
                    <div class="container clearfix">
                        <div class="contact-info float-left">
                            <i class="fas fa-envelope"></i> <a href="#">techintelligence@gmail.com</a>
                            <i class="fas fa-phone"></i> 011 415 5214
                        </div>
                        <div class="social-links pull-right" style="position: relative;top: -20px;">
                            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fab fa-google-plus"></i></a>
                            <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </footer>
        </div>
    </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
{{-- <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>--}}
<script type="text/javascript"
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('js/moment.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
<script type="text/javascript" src="{{asset('js/sweetalert.min.js')}}"></script>
<script type="text/javascript">
    var base_url = "{{ url('') }}";
    var _token = "{{ csrf_token() }}";
</script>

</body>
</html>