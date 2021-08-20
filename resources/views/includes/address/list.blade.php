<div class="uo_adr_list">
    @if (session('message'))
        <p class="success-message">{{ session('message') }}</p>
    @endif

    @foreach($addresses as $item)
        <div data-id="{{ $item->id }}">
            <a href="{{ route('addresses.edit', $item->id) }}" class="item block-link-edit
                {{ isset($address) && $address->id == $item->id ? ' active-item' : '' }}">

                <h3>{{ $item->name }}</h3>
                <p>
                    {{ $item->area->name }}
                    {{ ', ' . $item->city->name }}
                    {{ ', ' . $item->street }}
                    {{ ', ' . $item->house }}
                </p>

                @if($item->info) <hr class="info-hr"><p>{{ $item->info }}</p> @endif

                <form class="actbox" action="{{ route('addresses.destroy', $item->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <input class="bcross" type="submit" value="">
                </form>

            </a>
        </div>
    @endforeach
</div>
