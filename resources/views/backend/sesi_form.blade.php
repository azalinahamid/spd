@csrf
        
         <div class="form-group row">
           <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
           <div class="col-sm-10">
             <input type="text" name="name" class="form-control" id="name" placeholder="Nama" value="{{old('name',$sesi->name)}}">
           </div>
         </div>
         <div class="form-group row">
           <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
           <div class="col-sm-10">
             <input type="checkbox" name="status" id="status" {{old('status',$sesi->status) ? "checked" : ""}}>
           </div>
         </div>
         <div class="form-group row">
           <label for="inputEmail3" class="col-sm-2 col-form-label">Pingat</label>
           <div class="col-sm-10">
             <input type="text" name="pingat" class="form-control" id="pingat" placeholder="Pingat" value="{{old('pingat',$sesi->pingat)}}">
           </div>
         </div>