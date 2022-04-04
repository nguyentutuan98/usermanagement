<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.css">
   <title>edit user</title>
   
</head>
<body>
   <div class="container">
      <div class="card-body">
         <h4 class="mb-2">
            Edit user
         </h4>
         <form method="post">
            {{ csrf_field() }}

             @foreach($data as $key=>$detail)
            <div class="form-row">
               <div class="form-group col-sm-6">
                  <label for="myEmail">Email</label>
                  <input type="email" value="{{$detail->email}}" name="email" class="form-control"
                     id="email_input" placeholder="Email">
               </div>
               <span class="text-danger " id="email_error"></span>
            </div>
            <div class="form-group  col-sm-6">
               <label for="inputAddress">Name</label>
               <input type="text" value="{{$detail->name}}" name="name"class="form-control"
                  id="name_input" placeholder="Name">
                  <span class="text-danger " id="name_error"></span>
            </div>
            <div class="form-group col-sm-6">
               <label>Gender</label>
                  <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="gender"  name="gender">
                  <option value="{{$detail->gender}}" selected> 
                     @if($detail->gender == 1)
                        Male
                     @else 
                        Female
                     @endif
                  </option>
                  @if($detail->gender == 2)
                  <option value="1">male</option>
                  @else
                  <option value="2">female</option>
                  @endif
                  </select>
                  <span class="text-danger " id="gender_error"></span>
            </div>
            <div class="form-group col-sm-6">
               <label >Note</label>
               <textarea  rows="9" cols="70" placeholder="info" id="textnote" name="textnote" 
               value="">{{$detail->note}}</textarea>
               
            </div>
            <span class="text-danger " id="name_error"></span>
            <button class="btn btn-primary float-right" value="{{$detail->id}}" type="button" id="btn_save" >Save</button>
         </form>
         @endforeach
          </div>
   </div>
   <script type="text/javascript" src="../../public/js/jquery-3.6.0.js"></script>
   <script type="text/javascript" src ="../../public/js/update-user.js"></script>
</body>
</html>