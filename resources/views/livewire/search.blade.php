<div>
    <input wire:model="search" type="text" class="form-control form-control-custom" placeholder="Your Destination and Hotel Name" list="mylist" />
    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif
</div>
