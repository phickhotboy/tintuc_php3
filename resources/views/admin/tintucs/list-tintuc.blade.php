@extends('admin/layout/default')
@section('title')
@parent
Danh sách tin tuc
    
@endsection
@section('content')
<div class="p-4" style="min-height: 800px;">
    <h4 class="text-primary mb-4">Danh sách tin tuc</h4>
    <a href="{{route('admin.tintucs.addTintuc')}}"><button class="btn btn-info">Thêm mới</button></a>
    
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                {{-- <th scope="col">STT</th> --}}
                <th scope="col">STT</th>
                <th scope="col">Tên tin tuc</th>
                <th scope="col">Anh</th>
                <th scope="col">Noi dung</th>
                <th scope="col">Luot xem</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($listTintuc as $key => $value)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$value->name}}</td>
                <td>
                    <img class="img-anh" width="100px" src="{{asset($value->anh)}}">
                    
                </td>
                <td>{{$value->noidung}}</td>
                <td>{{$value->luotxem}}</td>
                
                <td>
                    <a href="#" class='btn btn-warning'>Sua</a>
                    <form action="#" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" onclick=" return confirm('Ban co muon xoa khong ?')" class="btn btn-danger">Xoa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$listTintuc->links('pagination::bootstrap-5')}}
</div>
@endsection