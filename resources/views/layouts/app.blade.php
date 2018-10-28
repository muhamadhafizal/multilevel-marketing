<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <meta charset="utf-8" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

 <style type="text/css">

    .jobtitlemain {
     position:relative;
     width:100px;
     height:50px;
     line-height:40px;
     border:2px solid #000;
     margin-bottom:50px;
     text-align:center;
     margin-left:auto;
     margin-right:auto;
    }
    .jobtitle {
     position:absolute;
     width:100px;
     height:40px;
     line-height:40px;
     border:2px solid #000;
     margin-bottom:50px;
     text-align:center;
    }
    .toplevel {
     position:relative;
     width:300px;
     height:20px;
     border:2px solid #000;
     border-bottom:none;
     margin-left:auto;
     margin-right:auto;
    }

    .secondlevel {
     position:absolute;
     top:114px;
     margin-left:-150px;
    }

    .connector {
     bottom:-52px;
     height:50px;
     border-left:2px solid #000;
    }
    .connectorlong {
     bottom:-72px;
     height:70px;
     border-left:2px solid #000;
    }

    #treePane ul {
     list-style: none;
    }

    #treePane .node {
     color: red;
     background-image: url("plus.gif");
     background-position: left center;
     background-repeat: no-repeat;
     padding-left: 12px;
     cursor: pointer;
    }

    #treePane .open {
     background-image: url("minus.gif");
    }

    #treePane ul li {
     background-image: url("treeview-default-line.gif");
     background-repeat: no-repeat;
     padding-left: 20px;
     margin-left: -42px;
    }
    

    .centre {position:absolute;left:50px;}
    .centre1 {position:absolute;left:100px;top:20px;}
    .left {position:absolute;left:-50px;top:20px;}
    .right {position:absolute;left:250px;top:20px;}
    .right2 {position:absolute;left:100px;top:20px;}
    .offset {margin-top:90px;margin-left:50px;}
 </style>


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     <script type="text/javascript">
     
     (function() {
      var treePaneNodes = $('#treePane').find(".node");
      treePaneNodes.next("ul").hide();
      $('#treePane').find(".open").next("ul").show();;
      treePaneNodes.on('click', function() {
       $(this).next("ul").first().toggle();
       $(this).toggleClass("open");
      })
     })();
     </script>

     <script>
          $( function() {
            var availableTags = [
              "ActionScript",
              "AppleScript",
              "Asp",
              "BASIC",
              "C",
              "C++",
              "Clojure",
              "COBOL",
              "ColdFusion",
              "Erlang",
              "Fortran",
              "Groovy",
              "Haskell",
              "Java",
              "JavaScript",
              "Lisp",
              "Perl",
              "PHP",
              "Python",
              "Ruby",
              "Scala",
              "Scheme"
            ];
            $( "#searchItem" ).autocomplete({
              source: '{!!URL::route('autocomplete')!!}'
            });
          } );
  </script>
</body>
</html>
