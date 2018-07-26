@extends('backend.layout')
@section('content')


    <!-- Page Content -->
        <br>
       <h1>Kemaskini Sesi {{$sesi->name}}</h1><br>

       @include('common.alert')
       @include('common.form_error')

       <form method="POST" action="{{route('sesi.update',$sesi->id)}}">
        {{method_field('PUT')}}
        @include('backend.sesi_form')
         <div class="form-group row">
           <div class="col-sm-10">
             <button type="submit" class="btn btn-primary">Kemaskini</button>
             <a href="{{url()->previous()}}">Senarai Sesi</a>
           </div>
         </div>
       </form>
     
@endsection
