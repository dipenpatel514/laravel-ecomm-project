<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Ecommerce Project</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>


    {{View::make('header')}}

    @yield('content')

    {{View::make('footer')}}



</body>

<style>
.custom-login{
    min-height: 500px;
    padding: 100px 0;
}
.custom-slider{
    min-height: 500px;
}
.slider-image{
    height: 400px !important;
}
.slider-text{
    background-color: #00000061;
}
.slider-arrow:hover{
    background-color: #0000000d;
}
.trending-wrapper{
    padding: 0 5%;
}
.trending-item{
    float: left;
    width: 20%;
}
.trending-image{
    height: 100px;
}
.detail-wrap{
    min-height: 500px;
    padding: 50px 0
}
.detail-image{
    height: 300px;
}
.cart_product_body{
    padding: 50px 0;
    border-bottom: 1px solid #4d4949;
}
.title-page{
    background-color: #575252;
}

</style>

<script>
    // $(document).ready(function(){
    //     $('button').click(function(){
    //         alert('All Set');
    //     })

    // })
</script>
</html>