<?php

namespace App\Http\Controllers\Backend;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Services\DailyRecord\DailyRecordServiceInterface;
use App\Http\Resources\Backend\DailyRecord\DailyRecordListResource;

class DailyRecordController extends Controller
{
    protected $service;

    public function __construct(DailyRecordServiceInterface $service)
    {
        $this->service    = $service;
    }

    public function index(): View
    {
        $data = $this->service->getAll();
        $data = DailyRecordListResource::collection($data);
        return view('DailyRecords.listing')->with(['data' => $data]);

    }
}
