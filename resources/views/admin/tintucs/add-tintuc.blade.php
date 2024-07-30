@extends('admin/layout/default')
@section('title')
@parent
Thêm bản tin
    
@endsection

@section('content')
<div class="p-4" style="min-height: 800px;">
    <form action="{{route('admin.tintucs.addPostTintuc')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control" name="nameTintuc" id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Anh</label>
            <input type="file" class="form-control" name="imageSP" id="imageSP">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Mo ta ngan</label>
            <input type="text" class="form-control" name="motangan" id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Noi dung</label>
            <input type="text" class="form-control" name="noidung" id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Luot xem</label>
            <input type="text" class="form-control" name="luotxem" id="">
        </div>
        
        <button type="submit" class="btn btn-primary mt-3">Them moi</button>
    </form>
</div>
    
@endsection