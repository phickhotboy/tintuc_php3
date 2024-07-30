<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tintuc;
use Illuminate\Support\Facades\File;

class TinController extends Controller
{
    public function listTintuc(){
        $listTintuc = Tintuc::paginate(10);

        return view('admin.tintucs.list-Tintuc')
        ->with([
            'listTintuc'=> $listTintuc
        ]);
    }

    public function addTintuc(){
        return view('admin.tintucs.add-tintuc');
    }
    public function addPostTintuc(Request $req){
        $linkImage = null;
        if($req->hasFile('imageSP')){
            $image = $req->file('imageSP');
            $newName = time().'.'. $image->getClientOriginalExtension();
            $image->move(public_path('imageSP/'), $newName);

            $linkImage = 'imageSP/' .$newName;
        }
        $data = [
            'name'=> $req->nameTintuc,
            'anh' => $linkImage,
            'motangan' => $req->motangan,
            'noidung' => $req->noidung,
            'luotxem' => $req->luotxem
        ];
        Tintuc::create($data);
        return redirect()->route('admin.tintucs.listTintuc')->with(['message' => 'Them moi thanh cong']);
    }
    // public function deleteTintuc($idTintuc){
    //     $tintuc = Tintuc::find($idTintuc);
    //     if($tintuc->image != null){
    //         File::delete(public_path($tintuc->image)); //Xoa anh

    //         $tintuc->delete();
            
    //     }
    //     return redirect()->route('admin.tintucs.listTintuc')->with(['message'=> 'Xoa thanh cong']);
    // }
}