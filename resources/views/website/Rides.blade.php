
@extends('website.website_layout.master')

@section('riders')
    {{$riders_count}}
@endsection
@section('country')
    {{$country_count}}
@endsection
@section('city')
    {{$city_count}}
@endsection

@section('content')
    <section id="speakers" class="bg-color-light pt-4">
        <div class="container mt-4 pt-4 pb-4">
            <div class="row pt-2 ">
                <div class="col" style="text-align:center">
                    <h2 class="text-color-dark text-uppercase font-weight-bold text-center mb-1">Countries Taking Part This Year</h2>
                    <p class="custom-font-size-1 text-center mb-2">Find your country on the map or choose from the list below</p>
                    <form>
                        <select  id="country" style="width:50%; padding: 15px;margin-bottom: 20px" name="country">
							<option>Select Country</option>
                            @foreach($country as $country_data)
                                {
                                <option value="{{$country_data->id}}">{{$country_data->name}}</option>
                                }
                            @endforeach
                       </select>
					   <select id="country" style="width:50%;padding: 15px;margin-bottom: 20px" name="country">
							<option>Select City</option>
                           @foreach($city as $city_data)
{{--                               @if($city_data->country_id== 1)--}}
                                   <option value="{{$city_data->id}}">{{$city_data->name}}</option>
{{--                               @endif--}}
                           @endforeach
						</select>

                       <button style="background-color:black;color:white;width:50%;padding: 15px;margin-bottom: 20px"> SEARCH RIDE </button>
                  </form>
              </div>
            </div>
        </div>
    </section>

</main>

@endsection


