@extends('layouts.admin')
@section('title', '勤務状況')

@section('content')
    <div class="container">
        <div class="row">
            <h2>勤務状況</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\AttendController@add') }}" role="button" class="btn btn-primary">出勤</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\AttendController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">出勤状況</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-attend col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">出勤状況</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $attend)
                                <tr>
                                    <th>{{ $attend->id }}</th>
                                    <td>{{ $attend->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        {{ csrf_field() }}
                    </table>
                </div>
            </div>
        </div>
    </div>s
@endsection