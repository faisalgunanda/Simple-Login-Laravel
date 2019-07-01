<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use Illuminate\Support\Facades\Storage;
use Mail;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
      $files = File::orderBy('created_at', 'DESC')->paginate(30);
      return view('file.index', ['files' => $files]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('file.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'file' => 'mimes:jpeg,jpg,png,gif|required|file|max:20000'
        ]);
        $files = $request->file('file');
        // dd($files);
        // foreach ($files as $file) {
          File::create([
            'title' => $files->getClientOriginalName(),
            'description' => '',
            'path' => $files->store('public/storage')
          ]);
        // }
        return redirect('/file')->with('success', 'File Berhasil Diupload');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $download = File::find($id);
        return Storage::download($download->path, $download->title);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fl = File::find($id);
        $data = Array(
          'title' => $fl->title,
          'path' => $fl->path
        );
        Mail::send('emails.attachment', $data, function($message){
          // dd($message);
          $message->to('isall.cok48@gmail.com','Muhammad Faisal Gunanda')->subject('Laravel File Attachment and Embed');
          $message->from('faisalgunanda16@gmail.com', 'Ical');
        });
        return redirect('/file')->with('success','File attachment has been sent to your email');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // dd($id);
        $del = File::find($id);
        Storage::delete($del->path);
        $del->delete();

        return redirect('/file')->with('success', 'Foto Berhasil Dihapus');
    }
}
