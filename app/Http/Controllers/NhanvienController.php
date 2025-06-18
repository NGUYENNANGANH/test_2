<?php

namespace App\Http\Controllers;

use App\Models\nhanvien;
use App\Models\phong;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;
class NhanvienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('nhanviens.index', ['nhanviens' => nhanvien::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $phongs = DB::table('phongs')->get();
        return view('nhanviens.create',compact('phongs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // kiem tra du lieu dau vao required bat buoc co và email dung dinh dang email
            $request->validate([
                'name_nv' => 'required',
                'birthday' => 'required|date',
            ]);

            //Lấy dữ liệu từ form
            $name_nv = $request->input('name_nv');
            $mota = $request->input('mota');
            $birthday = $request->input('birthday');
            $id_phong = $request->input('id_phong');


            // $validatedData = $request->validate([
            //     'StudentName' => 'required',
            //     'StudentEmail' => 'required',
            // ]);

            // Thêm dữ liệu vào database
            DB::table('nhanviens')->insert([
                'name_nv' => $name_nv,
                'mota' => $mota,
                'birthday' => $birthday,
                'id_phong' => $id_phong,
            ]);
            return redirect()->route('nhanviens.index')->with('success', 'Nhan vien added succsesfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(nhanvien $nhanvien)
    {
         return view('nhanviens.show',compact('nhanvien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(nhanvien $nhanvien)
    {
        $phongs = phong::all();
        return view('nhanviens.edit',[
            'phongs' => $phongs,
            'nhanvien' =>$nhanvien
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, nhanvien $nhanvien)
    {
            $name_nv = $request->input('name_nv');
            $mota = $request->input('mota');
            $birthday = $request->input('birthday');
            $id_phong = $request->input('id_phong');

            $validatedData = $request->validate([
                'name_nv' => 'required',
                'birthday' => 'required',
            ]);
            $nhanvien->update([
                'name_nv' => $name_nv,
                'mota' => $mota,
                'birthday' => $birthday,
                'id_phong' => $id_phong,
               
            ]);
            return redirect()->route('nhanviens.index')->with('success', 'Student Data has been updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */




    public function destroy(nhanvien $nhanvien)
    {



        $nhanvien->delete();
        return redirect()->route('nhanviens.index')->with('success','Nhan vien Data deleted successfull');
    }


    // them thoi

// Trong app/Http/Controllers/NhanvienController.php

/**
 * Hiển thị form xác nhận xóa nhân viên
 */
public function confirmDelete($id)
{
    $nhanvien = nhanvien::findOrFail($id);
    return view('nhanviens.confirm-delete', compact('nhanvien'));
}


}
