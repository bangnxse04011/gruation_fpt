@extends('layouts.master')
@section('content')
    <section>
        <div class="container">
            <div class="title">
                <h2>Tin Tức</h2>
                <hr>
            </div>
            <div class="row">
                @foreach($news as $new)
                    <div class="col-xs-18 col-sm-6 col-md-3">
                        <a href=""><img src="{{url($new->avatar)}}" class="img-resposive"></a>
                        <div class="row">
                            <div class="col-sm-12" style="margin-top: 5px">
                            </div>
                        </div>
                        <div class="caption">
						<span class="stext-105 cl3">
							<strong><a href="">{{$new->title}}</a></strong>
						</span>
                            <p>{{$new->description}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            {{$news->links()}}
        </div>
    </section>
@endsection