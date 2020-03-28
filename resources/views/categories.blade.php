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
<table class="table">
  <thead>
    <tr>
        <td>شناسه </td>
        <td>عنوان </td>
        <td>توضیحات</td>
        <td>وضعیت</td>
        <td>ویرایش</td>
        <td>حذف</td>
    </tr>
  </thead>
    <body>
    @foreach($cats as $cat)
    <tr>
        <td>{{$cat->id}}</td>
        <td><a href="{{route('show',$cat->id)}}">{{$cat->title}}</a> </td>
        <td>{{$cat->description}}</td>
        <td>{{$cat->active}}</td>
        <td><a href="{{route('edit',$cat->id)}}">ویرایش</a></td>
        <td><a href="{{route('destroy',$cat->id)}}"
        onclick="return confirm('آیتم حذف شود')">حذف</a></td>
    </tr>
    @endforeach
    </body>
</table>
</div>
</div>
</body>
</html>