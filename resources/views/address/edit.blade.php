@extends('layouts.main')
@section('content')
    <div class="uo_body">
        <div class="wrapper">
            <div class="uofb cf">
                <div class="l_col adrs">
                    <h2>Add New Address</h2>

                    <form action="{{ route('addresses.update', $address->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="field">
                            <label>Name *</label>
                            <input class="vl_empty @error('area_id') input-danger @enderror"
                                   type="text" placeholder="Home address" name="name"
                                   value="{{ $address->name }}"/>
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="field">
                            <label>Your area *</label>
                            <select class="@error('area_id') input-danger @enderror" name="area_id">
                                <option class="plh"></option>
                                @foreach($areas as $area)
                                    <option value="{{ $area->id }}"
                                        {{ $area->id == $address->area_id ? " selected" : "" }}>{{ $area->name }}
                                    </option>
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
                                    <option value="{{ $city->id }}" data-area="{{ $city->area_id }}"
                                        {{ $city->id == $address->city_id ? " selected" : "" }}>{{ $city->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('city_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="field">
                            <label>Street</label>
                            <input class="vl_empty @error('street') input-danger @enderror" type="text"
                                   placeholder="Ushakova Ave" name="street" value="{{ $address->street }}"/>
                            @error('street')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="field">
                            <label>House # </label>
                            <input class="@error('house') input-danger @enderror" type="text" placeholder="37a"
                                   name="house" value="{{ $address->house }}"/>
                            @error('house')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="field">
                            <label class="pos_top">Additional information</label>
                            <textarea class="@error('info') input-danger @enderror" name="info">
                                {{ $address->info }}
                            </textarea>
                            @error('info')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="field">
                            <input type="submit" class="green_btn" value="Update"/>
                        </div>
                    </form>
                </div>

                <div class="r_col">
                    <h2><a href="{{ route('addresses.index') }}" class="heading-link">My Addresses</a></h2>
                    @include('includes.address.list')
                </div>
            </div>
        </div>
    </div>
@endsection
