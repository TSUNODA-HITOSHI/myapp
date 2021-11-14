@extends('layouts.admin')

@section('title','出退勤')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>出退勤</h2>
                <form action="{{ action('Admin\NewsController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">出勤</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="attend" value="{{ old('attend') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">退勤</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="leave" value="{{ old('leave') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">外出</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="rest" value="{{ old('rest') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">戻り</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="back" value="{{ old('back') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">取消</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="cancel" value="{{ old('cancel') }}">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection
