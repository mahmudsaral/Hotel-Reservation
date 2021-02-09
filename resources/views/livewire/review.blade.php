<div>
    {{-- Be like water. --}}
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message')}}
        </div>
    @endif

    <div class="comment-respond" id="respond">
        <h4 class="text-custom-black fw-600">Leave Comment</h4>
        <form wire:submit.prevent="store">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" wire:model="subject" class="form-control form-control-custom" placeholder="Subject">
                        @error('subject')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-rating">
                            @error('rate')<span class="text-danger">{{$message}}</span>@enderror
                            <strong class="text-uppercase">Your Rating:</strong>
                            <div class="stars">

                                <input type="radio" class="text-yellow fs-12" id="star5" wire:model="rate" value="5"/><label for="star5"></label>
                                <input type="radio" class="text-yellow fs-12" id="star4" wire:model="rate" value="4"/><label for="star4"></label>
                                <input type="radio" class="text-yellow fs-12" id="star3" wire:model="rate" value="3"/><label for="star3"></label>
                                <input type="radio" class="text-yellow fs-12" id="star2" wire:model="rate" value="2"/><label for="star2"></label>
                                <input type="radio" class="text-yellow fs-12" id="star1" wire:model="rate" value="1"/><label for="star1"></label>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <textarea rows="4" wire:model="review"class="form-control form-control-custom" placeholder="Your review"></textarea>
                        @error('review')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                    @auth
                        <button type="submit" class="btn-first btn-submit">Leave Comment</button>

                    @else
                        <a href="/login" class="btn-first btn-submit">For Submit Your Review, Please Login</a>
                    @endauth
                </div>
            </div>
        </form>
    </div>


</div>
