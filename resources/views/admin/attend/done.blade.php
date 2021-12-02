@extends('layouts.admin')
@section('title', '勤務状況')

@section('content')
    <div class="container">
        <div class="row">
            <h2>確認しました</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\AttendController@create') }}" role="button" class="btn btn-primary">戻る</a>
            </div>
        </div>
    </div>
@endsection