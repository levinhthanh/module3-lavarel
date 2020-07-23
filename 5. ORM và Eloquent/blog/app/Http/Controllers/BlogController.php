<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Category;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all()->where('deleted','=','0');
        $categories = Category::all()->where('deleted','=','0');
        return view('blog.list', compact(['blogs','categories']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    public function create()
    {
        return view('blog.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */

    public function store(Request $request)
    {
        $task = new Blog();
        $task->title = $request->input('title');
        $task->content = $request->input('content');
        $task->category_id = $request->input('category_id');

        //upload file
        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $path = $image1->store('images', 'public');
            $task->image1 = $path;
        }

        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $path = $image2->store('images', 'public');
            $task->image2 = $path;
        }

        $task->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Tạo mới thành công');
        //tao moi xong quay ve trang danh sach task
        return redirect()->route('blog.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.edit', compact('blog'));
    }

    /**
     * Show the form for reading the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function read($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.read', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');

        //cap nhat anh
        if ($request->hasFile('image1')) {

            //xoa anh cu neu co
            $currentImg = $blog->image1;
            if ($currentImg) {
                Storage::delete('/public/' . $currentImg);
            }
            // cap nhat anh moi
            $image1 = $request->file('image1');
            $path = $image1->store('images', 'public');
            $blog->image1 = $path;
        }

        if ($request->hasFile('image2')) {

            //xoa anh cu neu co
            $currentImg = $blog->image2;
            if ($currentImg) {
                Storage::delete('/public/' . $currentImg);
            }
            // cap nhat anh moi
            $image2 = $request->file('image2');
            $path = $image2->store('images', 'public');
            $blog->image2 = $path;
        }


        $blog->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Cập nhật thành công');
        //tao moi xong quay ve trang danh sach task
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {


        $task = Blog::findOrFail($id);
        $task->deleted = true;
        $task->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Cập nhật thành công');
        //tao moi xong quay ve trang danh sach task
        return redirect()->route('blog.index');
    }
}
