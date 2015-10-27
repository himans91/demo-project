<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="{{ URL::asset('user/css/style.css') }}"/>
        <title>Atom End user package</title>
    </head>
    <body>
        <div id="page">
            <div id="page_content">
                <div id="main">
                    <div id="main_content">
                        @yield("content")
                    </div>
                </div>
            </div><!-- page_content close. -->
        </div><!-- page close. -->
    </body>
</html>