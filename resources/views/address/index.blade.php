@extends('layouts.main')
@section('content')
    <div class="uo_body">
        <div class="wrapper">
            <div class="uofb cf">
                <div class="l_col adrs">
                    <h2>Add New Address</h2>

                    <form action="{{ route('addresses.store') }}" method="POST">
                        @csrf
                        <div class="field">
                            <label>Name *</label>
                            <input class="vl_empty @error('area_id') input-danger @enderror"
                                    type="text" placeholder="Home address" name="name"/>
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="field">
                            <label>Your area *</label>
                            <select class="@error('area_id') input-danger @enderror" name="area_id">
                                <option class="plh"></option>
                                @foreach($areas as $area)
                                    <option value="{{ $area->id }}">{{ $area->name }}</option>
                                @endforeach
                            </select>
                            @error('area_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="field">
                            <label>Your city *</label>
                            <select class="vl_empty @error('city_id') input-danger @enderror" name="city_id">
                                <option class="plh"></option>
                                @foreach($cities as $city)
                                    <option value="{{ $city->id }}" data-area="{{ $city->area_id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                            @error('city_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="field">
                            <label>Street</label>
                            <input class="vl_empty @error('street') input-danger @enderror" type="text" placeholder="Ushakova Ave" name="street"/>
                            @error('street')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="field">
                            <label>House # </label>
                            <input class="@error('house') input-danger @enderror" type="text" placeholder="37a" name="house"/>
                            @error('house')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="field">
                            <label class="pos_top">Additional information</label>
                            <textarea class="@error('info') input-danger @enderror" name="info"></textarea>
                            @error('info')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="field">
                            <input type="submit" class="green_btn" value="Create"/>
                        </div>
                    </form>
                </div>

                <div class="r_col">
                    <h2>My Addresses</h2>
                    @include('includes.address.list')
                </div>
            </div>
        </div>
    </div>
@endsection
