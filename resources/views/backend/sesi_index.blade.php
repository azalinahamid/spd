@extends('backend.layout')
@section('content')


    <!-- Page Content -->
        <br>
       <h1>Senarai Sesi</h1><br>

       @include('common.alert')

       <table class="table">
         <thead>
           <tr>
             <th>Id</th>
             <th>Nama</th>
             <th>Status</th>
             <th>Pingat</th>
             <th>Tarikh Masuk</th>
             <th>Tarikh Kemaskini</th>
             <th>Tindakan</th>
           </tr>
         </thead>

         <tbody>
          @foreach($sesis as $sesi)
           <tr>
             <td>{{$sesi->id}}</td>
             <td>{{$sesi->name}}</td>
             <td>{{$sesi->status ? 'buka' : 'tutup'}}</td>
             <td>{{$sesi->pingat}}</td>
             <td>{{$sesi->created_at->format('d-M-Y')}}</td>
             <td>{{$sesi->updated_at->format('d-M-Y')}}</td>
             <td>
               <a href="{{route('sesi.edit',$sesi->id)}}">Kemaskini</a> | 
               <a href="{{route('sesi.destroy', $sesi->id)}}">Padam</a>
             </td>
           </tr>
          @endforeach
         </tbody>
       </table>
       
     
@endsection
