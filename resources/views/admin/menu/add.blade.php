@extends('admin.main')

@section('head')
<script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
<form action="" method="POST">
    <div class="card-body">
      
    
     <div class="form-group">
        <label for="menu">Name</label>
        <input type="text" name = "name" class="form-control" id="menu" placeholder="Enter Name">
     </div>


     <div class="form-group">
        <label for="menu">List</label>
        <select class="form-control" id="parent_id" name="parent_id">
            <option value="1">New List</option>

            @foreach($menus as $menu)
            <option value="{{$menu->id}}">{{$menu->name}}</option>
            @endforeach
            
        </select>
     </div>


     <div class="form-group">
        <label for="menu">Short Describtion</label>
        <textarea name = "describtion" id ="describtion" class = "form-control", placeholder="Enter describtion"></textarea>
     </div>


     <div class="form-group">
        <label for="menu">Details</label>
        <textarea name = "content" id ="content"class = "form-control", placeholder="Enter describtion"></textarea>
     </div>
      
      <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>
          <div class="input-group-append">
            <span class="input-group-text">Upload</span>
          </div>
        </div>
      </div>


      <div class="form-group">
        <label>Active</label>
        <div class="custom-control custom-radio">
          <input class="custom-control-input" value ="1" type="radio" id="active" name="active" checked="">
          <label for="active" class="custom-control-label">Yes</label>
        </div>

        <div class="custom-control custom-radio">
          <input class="custom-control-input" value="0" type="radio" id="no_active" name="active">
          <label for="no_active" class="custom-control-label">No</label>
        </div>
      </div>



    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    @csrf
  </form>
@endsection

@section('footer')
<script>
    CKEDITOR.replace( 'content' );
</script>
@endsection