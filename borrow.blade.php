@extends('library.home')
@section('contant')

    <div class="container">
        <div class="row">
            <div class="col-md-8 center">

                <form action="{{route('home')}}" method="POST" role="form" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <legend>Borrow A book</legend>

                    <div class="form-group">
                        <label for="Name of Students">Name of Students</label>
                       @foreach($students as $student)
                        <select>
                            <option>{{$student->name}}</option>
                        </select>
                           @endforeach
                    </div>


                    <div class="form-group">
                        <label for="Borrow Or Not">Borrow Or Not</label>
                        <select>
                            <option>Borrow</option>
                            <option>Not Borrow</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="Count Of Dayes Borrow A Book">Count Of Dayes Borrow A Book</label>
                        <select>
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



