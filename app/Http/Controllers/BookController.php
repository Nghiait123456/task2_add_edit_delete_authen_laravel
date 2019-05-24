<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BookController extends Controller
{




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // Lấy hết dữ liệu từ bảng book, sử dụng hàm paginate phân trang
        $books = Book::orderBy('id', 'desc')->paginate(10);
        // trả về view biến books
        return view('book.list', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('book.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // thêm mới bảng book và thêm thời gian khởi tạo
        Book::insert([
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);

        // quay trở lại trang danh mục sách
        return redirect(route('book.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
        return view('book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
        // Cập nhật thông tin sách
        $book->update([
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'updated_at' => new \DateTime()
        ]);

        return redirect(route('book.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
        // xóa sách
        $book->delete();

        // trở lại trang danh sách
        return redirect(route('book.index'));
    }



    public function  testLogin()
    {
        if (Auth::check()) {
           echo "da login thanh cong";
        }
        else{
            echo " chua login thanh cong";
        }
    }
}
