<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>{{$pagetitle1}}</title>
</head>
<body dir="rtl" style="text-align:right">
@include('layouts.topmenu')
@include('layouts.messages')
    <div class="container">
        <div class="d-flex justify-content-center">
        عنوان دسته بندی :{{$category->title}}</br>
        توضیحات         :{{$category->description}}</br>
        تاریخ ایجاد      :{{$category->created_at}}</br>
        تاریخ آپدیت     :{{$category->updated_at}}</br>
        </div>
    </div>
</body>
</html>