<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BookController extends Controller
{

    /**
     * Returns all books
     * @return JsonResponse
     * @author Ali Shaikh <me@alishaikh.net>
     */
    public function getAllBooks()
    {
        return response()->json(Book::all());
    }

    /**
     * Returns a single book by ID
     *
     * @param $id
     *
     * @return JsonResponse
     * @author Ali Shaikh <me@alishaikh.net>
     */
    public function getBookByID($id)
    {
        return response()->json(Book::find($id));
    }

    /**
     * Add a new book
     *
     * @param Request $request
     *
     * @return JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     * @author Ali Shaikh <me@alishaikh.net>
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'title'          => 'required|unique:books|max:255',
            'genre'          => 'required',
            'author_name'    => 'required',
            'date_published' => 'required|date_format:Y-m-d'
        ]);

        $book = Book::create($request->all());

        return response()->json($book, 201);
    }

    /**
     * Update a book
     *
     * @param $id
     * @param Request $request
     *
     * @return JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     * @author Ali Shaikh <me@alishaikh.net>
     */
    public function update($id, Request $request)
    {
        try {

            $this->validate($request, [
                Rule::unique('books')->ignore($id),
                'date_published' => 'date_format:Y-m-d'
            ]);

            $book = Book::findOrFail($id);
            $book->update($request->all());

            return response()->json($book, 200);

        } catch (ModelNotFoundException $exception) {

            return response("Error: Book with ID {$id} not found.", 404);
        }

    }

    /**
     * Delete a book by ID
     *
     * @param $id
     *
     * @return \Illuminate\Http\Response|\Laravel\Lumen\Http\ResponseFactory
     * @author Ali Shaikh <me@alishaikh.net>
     */
    public function delete($id)
    {
        try {
            $book = Book::findOrFail($id)->delete();

            return response('Deleted Successfully', 200);

        } catch (ModelNotFoundException $exception) {

            return response("Error: Book with ID {$id} not found.", 404);
        }

    }
}

