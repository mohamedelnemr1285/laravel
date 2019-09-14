@extends('library.home')
{{--@extends('layouts.app')--}}
@section('contant')
  <!DOCTYPE html>
<head>
    <link href="{{ asset('css/library.css') }}" rel="stylesheet">
    <link rel = "stylesheet" href= "{{ url('css/font-awesome.min.css')}}">

    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}" defer></script>
</head>

<div class="container">
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img width=100% height="550" src="image\Bedtime Math.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img width=100% height="550" src="image\One Spooky Night.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img width=100% height="550" src="image\GREAT Science Books for Kids.jpg" class="d-block w-100" alt="...">
        </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</div>

@foreach($libraryes as $library)



    {{--{{$libraryes->links()}}--}}

    <div class="container">
        <div class="border border-success row">

          <div class="justify-content-center col-md-6">
           <img width="350" height="450" src="image/{{ $library->image}}">
           </div>

            <div class="info col-md-5 align-self-center">
             {{--<i class="fa fa-4x fa-home"></i>--}}
               <h5 class="title"><span>Title : </span>{{ ucwords($library->title)}} </h5>
                <h5 class="title"><span>Author : </span> {{ucwords($library->author) }} </h5>
                {{--@if(Auth::check())--}}
                    {{--@if(Auth::student()->role == 1)--}}
                <a  href="{{'borrow'}}" class=" btn btn-primary ">Borrow </a>
                {{--@foreach($book as $books)--}}
                <form method="post" action="/books/{{$library->id}}">
                    @method('DELETE')
                    @csrf
                <button type="submit" class="btn-danger">Delete</button>
                {{--<a  href="/book/{{$book->id}}" class=" btn btn-danger ">Delete </a>--}}
                {{--</form>--}}
                {{--@endforeach--}}
                    {{--@endif--}}
                    {{--@endif--}}
                <a  href="{{asset('/image/'.$library->image)}}" class=" btn btn-info">download</a>

            </div>

    </div>
    </div>

</form>
    @endforeach


@endsection