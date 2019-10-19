<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;
//use App\Http\Requests;

use App\Http\Resources\CityResource as CityResource;
use Illuminate\Support\Facades\Validator;

class CityController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $cities = City::paginate(10);
      return CityResource::collection($cities);
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    //
  }



  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
      $city = $request->isMethod('put') ? City::findOrfail
      ($request->city_id) : new City;

      $city->id = $request->input('city_id');
      $city->name = $request->input('name');

      if ($city->save()) {
          return new CityResource($city);
      }

  }




  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
      $city = City::findOrfail($id);
      return new CityResource($city);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
      $city = City::findOrfail($id);
      if ($city->delete()) {
          return new CityResource($city);

      }
  }
}

?>