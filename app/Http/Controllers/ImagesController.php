<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;

class ImagesController extends Controller
{
    public function upload(Request $request)
    {
        $file = request()->file('file_name');
        $fileName =  $file->getClientOriginalName();

        $image = Storage::put('public/' . $request->input('category'), $file);


        Image::create([
            'file_name' => request()->file('file_name')->hashName(),
            'file_path' => 'public/' . $request->input('category'),
            'file_extension' => 'test',
            'file_type' => 'test',
            'category' => $request->input('category')
        ]);
    }

    public function delete($id)
    {
        $file = Image::find($id);
        try {
            unlink('storage/' . $file->category . '/' . $file->file_name);    
        } catch (\Throwable $th) {
            return $th;
        }
        
        $file->delete();

        return redirect()->back();
    }
}
