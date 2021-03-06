@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($attends as $attend)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $attend->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="title">
                                    {{ $attend->user_id}}
                                </div>
                                <div class="body mt-3">
                                    {{ $attend->attend_id}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection