<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class BookController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $page = $request->get('page', 1);
        $cacheKey = "books.page.{$page}";

        // get all books and return response json
        $books = Cache::remember($cacheKey, 60 * 60, function () {
            return Book::paginate(100);
        });
        return response()->json($books);
    }
}
