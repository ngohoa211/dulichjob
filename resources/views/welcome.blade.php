
@extends('layouts.app')

@section('content')
<img src="{{ asset('img/bigpicture.png')}}" alt="" width="892" height="303" />

        <div class="search">
        @if (!Auth::check())
            </br>
            <span> sign in to search </span>
            @else
                <form action="#">
                        <img src="{{ asset('img/title.gif') }}" alt="" width="90" height="30" />
                        @if(Auth::user()->type == "cty")
                        <a href="{{url('ctySearchTour')}}" class="btn btn-default">Search tour</a>
                        <a href="{{url('ctySearchHDV')}}" class="btn btn-default">Search huong dan vien</a>
                        @elseif(Auth::user()->type == "hdv")
                        <a href="{{url('hdvSearchTour')}}" class="btn btn-default">Search tour</a>
                        <a href="{{url('hdvSearchCty')}}" class="btn btn-default">Search cong ty</a>
                        @endif
                        <div class="line">
                        </div>
                    </form>
                </div>
        @endif

        <div id="newest_tour" style="border-style: ridge;height: 333px;margin-top: 80px;overflow: auto;">
            @foreach ($newTours as $n)
            <p style="margin:15px 0 20px 25px;">
                <b>Tour đi:</b>  {{$n->dia_diem}} <br/>
                <b>Lịch trình:</b> {{$n->lich_trinh}}<br/>
                <b>Lượng Khách:</b> {{number_format($n->so_luong_khach)}} <br/>
                <b>Thời gian tạo:</b> {{$n->created_at}} <br/>
                @if (Auth::check())
                <a href="{{url('viewInforTour',$n->id)}}">Xem chi tiết</a>
                @endif
                <hr/>
            </p>
            @endforeach

        </div>

@endsection