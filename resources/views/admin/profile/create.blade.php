<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>create.blade.php</title>
    </head>
    <body>
        <!-- <h1>create.blade.php</h1> -->
        
        <!-- PHP_11 課題4 -->
        @extends('layouts.profile')
        @section('title', 'プロフィール')
        
        @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2>プロフィール</h2>
                </div>
            </div>
        </div>
        @endsection
    </body>
</html>