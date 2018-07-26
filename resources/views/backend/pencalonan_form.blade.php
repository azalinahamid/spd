@csrf
        
         <div class="form-group row">
           <label for="inputEmail3" class="col-sm-2 col-form-label">Sesi</label>
           <div class="col-sm-10">
             <select name="sesi_id" class="form-control">
               @foreach($sesis as $sesi)
                <option value="{{$sesi->id}}">{{$sesi->name}}</option>
               @endforeach
             </select>
           </div>
         </div>
         <fieldset>
          <legend>Calon</legend>
         <div class="form-group row">
           <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Calon</label>
           <div class="col-sm-10">
             <input type="text" name="name" id="name" value="{{old('name',$calon->name)}}" class="form-control">
           </div>
         </div>
         
         <div class="form-group row">
           <label for="inputEmail3" class="col-sm-2 col-form-label">IC</label>
           <div class="col-sm-10">
             <input type="text" name="ic" id="ic" value="{{old('ic',$calon->ic)}}" class="form-control">
           </div>
         </div>
         <div class="form-group row">
           <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
           <div class="col-sm-10">
             <input type="text" name="email" id="email" value="{{old('email',$calon->email)}}" class="form-control">
           </div>
         </div> 
       </fieldset>
         <div class="form-group row">
           <label for="inputEmail3" class="col-sm-2 col-form-label">Asas</label>
           <div class="col-sm-10">
             <textarea name="asas" class="form-control">{{old('asas',$pencalonan->asas)}}</textarea>
           </div>
         </div>

         
        