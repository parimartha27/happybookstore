<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Pagination\Paginator;

class BooksController extends Controller
{
    public function viewBook(){
        $book = Book::join('details', 'books.category_id', '=', 'details.id')
            ->select('*')
            ->paginate(10); // Menggunakan metode paginate() untuk membagi data menjadi halaman-halaman

        Paginator::useBootstrap();
        return view('book', ['books' => $book]);
    }
}
