<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Exports\AllCommentsExport;
use Maatwebsite\Excel\Facades\Excel;

class CommentController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->name = $request->get('name');
        $comment->lastName = $request->get('lastName');
        $comment->email = $request->get('email');
        $comment->comment = $request->get('comment');

        $comment->save();
        return response()->json(['success' => true]);
    }

    public function exportPDF(){
        $data = Comment::all();
        $pdf = PDF::loadView('comments', array('data' => $data))->setPaper('a4', 'portrait');

        return $pdf->download('comments.pdf');

    }

    public function exportAllCommentsToExcel()
    {
        // dd($request->get('email'));
        $filename = 'result-all-comments-test.xlsx';
        return Excel::download(new AllCommentsExport, $filename);
    }

    public function show(Comment $comment)
    {
    }

    public function edit(Comment $comment)
    {
    }

    public function update(Request $request, Comment $comment)
    {
    }

    public function destroy(Comment $comment)
    {
    }
}
