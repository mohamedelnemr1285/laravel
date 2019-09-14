@extends('library.home')
@section('contant')



    <div class="container">
        <div class="row">
            <div class="col-md-8 center">

                {{--{!! form::model($update,array('method' =>'PATCH', 'action'=>['updatecontroller@update',$update->id],'files=>true')) !!}--}}
                @foreach ($students as  $student)

                <form action="/borrow/{{$student->id}}" method="POST" role="form" >

                {{method_field('PATCH')}}
                {{csrf_field()}}
                    @endforeach
                    <legend>Borrow A book</legend>

                    <div class="form-group">
                        <label for="Name of Students">Name of Students</label>

                        <select name="username">
                            @foreach ($students as  $student)

                            <option value="{{$student->id}}">{{ucwords( $student->name)}}</option>
                            @endforeach

                        </select>

                    </div>


                    <div class="form-group">
                        <label for="Borrow Or Not">Borrow Or Not</label>
                        <select name="borrow">
                            <option>Borrow</option>
                            <option>Not Borrow</option>
                        </select>
                        {{--<br> <input type="checkbox" name="borrow">--}}
                        {{--Borroed<br>--}}
                        Not Borroed
                    </div>

                    <div class="form-group">
                        <label for="Count Of Dayes Borrow A Book">Count Of Dayes Borrow A Book</label>
                        <select name="dayes">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Send</button>

                </form>
            </div>
        </div>
    </div>

@endsection