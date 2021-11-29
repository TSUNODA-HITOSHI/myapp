@extends('layouts.admin')

@section('title','出退勤')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>出退勤</h2>
                <form action="{{ action('Admin\AttendController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <div class="col-md-10">
                            <button type="submit" class="form-control" name="attend_id" value="attend">出勤</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <button type="submit" class="form-control" name="attend_id" value="leave">退勤</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <button type="submit" class="form-control" name="attend_id" value="rest">外出</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <button type="submit" class="form-control" name="attend_id" value="back">戻り</button>
                        </div>
                    </div>
                    <!--<div class="form-group row">-->
                    <!--    <div class="col-md-10">-->
                    <!--        <button type="submit" class="form-control" name="attend_id" value="cancel">取消</button>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--{{ csrf_field() }}-->
                    <!--<input type="submit" class="btn btn-primary" value="更新">-->
                </form>
            </div>
        </div>
    </div>
@endsection
