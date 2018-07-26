@extends('backend.layout')
@section('content')


    <!-- Page Content -->
        <br>
       <h1>Papar {{$sesi->name}}</h1><br>

       @include('common.alert')

         <div class="form-group row">
           <label class="col-sm-2 col-form-label">Id</label>
           <div class="col-sm-10">
             {{$sesi->id}}
           </div>
         </div>
         <div class="form-group row">
           <label class="col-sm-2 col-form-label">Nama</label>
           <div class="col-sm-10">
             {{$sesi->name}}
           </div>
         </div>
         <div class="form-group row">
           <label class="col-sm-2 col-form-label">Status</label>
           <div class="col-sm-10">
             {{$sesi->status ? 'buka' : 'tutup'}}
           </div>
         </div>
         <div class="form-group row">
           <label class="col-sm-2 col-form-label">Pingat</label>
           <div class="col-sm-10">
             {{$sesi->pingat}}
           </div>
         </div>
         <div class="form-group row">
           <div class="col-sm-10">
             <a href="{{url()->previous()}}">Senarai Sesi</a>
           </div>
         </div>
     
@endsection
