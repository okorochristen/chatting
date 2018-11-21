
@extends('layouts.app')
@section('title', 'profile')

@section('content')





<div class="container">
    <div class="row">

        <div class="col-md-12">
            <h3>bio </h3>



            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </th>
                </thead>
               <tbody>



                   @foreach($profiles as $profile)
               </tbody>
               <tr>
                 <td>{{$profile->name}}</td>
                 <td>{{$profile->email}}</td>
               </tr>
               {!!$profiles->render() !!}
            @endforeach

            </tbody>

















            </table>


        </div>


    </div>

</div>
@endsection
