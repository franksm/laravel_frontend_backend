@extends('layouts.app')

@section('title', 'Website Edit') 

@section('content')

<div class="container">
            
    <section class="page-section my-5 p-5">
        
        <form method="POST" action="{{ route('admin.website.update') }}">

            {{ csrf_field() }}

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="title">網站標題</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="title" value="@isset($website) {{$website->title}} @endisset">
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="subtitle">網站子標題</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="subtitle" value="@isset($website) {{$website->subtitle}} @endisset">
                    <span class="text-danger">{{ $errors->first('subtitle') }}</span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="footer">網站頁尾文字</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="footer" value="@isset($website) {{$website->footer}} @endisset">
                    <span class="text-danger">{{ $errors->first('footer') }}</span>
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary">更新</button>
                </div>
            </div>
            
        </form>

    </section>
    
</div>


@endsection
