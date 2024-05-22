<header>
    <div class="ms_bg-blu p-2"></div>
    <div class="container">
        <div class="row justify-content-between align-items-center py-2">
            <div class="col">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            </div>
            <div class="col">
                <ul class="d-flex justify-content-around">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('comics') }}">Comics</a></li>
                 </ul> 
            </div>
            <div class="col">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="search">
                    <button class="btn btn-outline-secondary" type="button" id="search">&downarrow;</button>
                  </div>
            </div>
        </div>
       
    
    </div>
</header>