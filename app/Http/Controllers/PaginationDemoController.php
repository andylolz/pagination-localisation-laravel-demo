<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;

class PaginationDemoController extends Controller
{
    public function index()
    {
        // Create sample data for pagination
        $items = collect(range(1, 100))->map(function ($number) {
            return [
                'id' => $number,
            ];
        });

        $perPage = 10;
        $currentPage = request()->get('page', 1);

        $paginatedItems = new LengthAwarePaginator(
            $items->forPage($currentPage, $perPage),
            $items->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url()]
        );

        return view('pagination-demo', compact('paginatedItems'));
    }
}
