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
    <div class="container">
    @include('layouts.messages')
    <div class="d-flex justify-content-center">
        <form action="{{route('store')}}"method="post">
        @csrf
        <div class="form-group">
            <label for="title">عنوان دسته بندی  </lable>
            <input type="text" class="form-control @error('title') is-invalid  @enderror " name="title">
            @error('title')
             <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group ">
            <label for="description">شرح دسته بندی </lable>
            <textarea class="form-control @error('description') is-invalid  @enderror " name="description"></textarea>
            @error('description')
             <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="title">وضعیت دسته بندی  </lable>
            <select name="active" class="form-control">
              <option value="1">منتشر شده</option>
              <option value="0">  منتشر نشده </option>
            </select>
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label for="title">  ثبت </lable>
            <button type="submit" class="btn btn-success">ذخیره</button>
        </div>
        </form>
     </div>
</div>
</body>
</html>