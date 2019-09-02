<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\VisitorsRepository;

class StatisticsController extends Controller
{
    protected $visitors;

    public function __construct(VisitorsRepository $visitors)
    {
        $this->middleware('auth');

        $this->visitors = $visitors;
    }

    public function index()
    {
        $result = $this->visitors->all();

        return view('dashboard.visitors.list', [
            'result' => $result
        ]);
    }

    public function delete($id)
    {
        $this->visitors->destroy($id);

        return redirect()->route('dashboard.visitors.list');
    }
}
