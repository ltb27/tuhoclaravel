<?php

namespace App\Http\Controllers\Ajax;

use App\Repositories\Interfaces\IDistrictRepository;
use App\Repositories\Interfaces\IWardRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LocationController extends Controller
{
    private IDistrictRepository $districtRepository;
    private IWardRepository $wardRepository;

    public function __construct(IDistrictRepository $districtRepository, IWardRepository $wardRepository)
    {
        $this->districtRepository = $districtRepository;
        $this->wardRepository = $wardRepository;
    }

    public function getLocation(Request $request)
    {
        $requestData = $request->only(["parentId", "target"]);
        $responseData = [];

        $parentId = $requestData["parentId"];
        $target = $requestData["target"];

        if (!isset($target) || !isset($parentId)) {
            return response()->json($responseData);
        }

        switch ($target) {
            case "district":
                $responseData = $this->districtRepository->getByCondition($parentId);
                break;
            case "ward":
                $responseData = $this->wardRepository->getByCondition($parentId);
                break;
        }

        return response()->json($responseData);
    }
}
