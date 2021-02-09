<div>
    <input wire:model="search" name="search" type="text" class="form-control form-control-custom" list="mylist" placeholder="Search"/>
    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif
</div>
