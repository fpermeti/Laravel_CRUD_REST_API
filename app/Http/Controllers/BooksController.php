<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Validator;

class BooksController extends Controller
{
    //

    public function fieldValidation(Request $request)
    {
        return Validator::make($request->all(),[
                
            'title'=>'required|string|min:5|max:50',
            'author'=>'required|string|min:5|max:50',
            'price'=>'required|numeric|min:0|max:1000000'

        ]);
    }


    public function getAllBooks()
    {
        //return Book::all();

        $books = Book::orderBy('id')->get();

        if($books->isEmpty())
        {
            return ['ERROR'=>'Database is empty'];
        }

        return $books;
    }


    public function getBook($id)
    {
        $book = Book::find($id);
        
        if($book == null)
        {
            return ['ERROR'=>'Book does not exist'];
        }

        return $book;
    }


    public function postBook(Request $request)
    {
        //field validation
        $response = $this->fieldValidation($request);
            
        if($response->fails())
        {
            return ['ERROR'=>['Validation Error',
            'title is required and should be from 5 to 50 characters',
            'author is required and should be from 5 to 50 characters',
            'price is required and should be from 0 to 1000000']
            ];
        }

        return Book::create([
            
            'title'=>request('title'),
            'author'=>request('author'),
            'price'=>request('price')

        ]);
    }


    public function updateBook(Request $request, $id)
    {
        
        $bookToBeUpdated = $this->getBook($id);

        if($bookToBeUpdated == ['ERROR'=>'Book does not exist'])
        {
            return ['ERROR'=>'Book does not exist'];
        }

        //field validation
        $response = $this->fieldValidation($request);

        if($response->fails())
        {
            return ['ERROR'=>['Validation Error',
            'title is required and should be from 5 to 50 characters',
            'author is required and should be from 5 to 50 characters',
            'price is required and should be from 0 to 1000000']
            ];
        }          

        $bookToBeUpdated->update([

            'title'=>request('title'),
            'author'=>request('author'),
            'price'=>request('price')

        ]);

        return $bookToBeUpdated;

    }


    public function deleteBook($id)
    {

        $bookToBeDeleted = $this->getBook($id);

        if($bookToBeDeleted == ['ERROR'=>'Book does not exist'])
        {
            return ['ERROR'=>'Book does not exist'];
        }
        
        $bookToBeDeleted->delete();

        return['SUCCESS'=>'Book was successfully deleted'];
    
    }

}
