<div wire:poll>
    <h1 class="m-4 mt-0 mb-0" style="font-size:120px;font-weight:800;text-align:center;color:rgb(36, 138, 248)">&#8474;</h1><br>
    <h1 class="m-4 mt-2" style="font-size:40px;font-weight:800;">Connexion system App</h1><br>
    <div class="m-4" wire:poll> 
        <form  method="post" wire:submit="save">
            @csrf
            <label for="name" class="mb-2">Name</label>
            <input class="form-control mb-0" type="text" wire:model.lazy="name" id="name" autocomplete="off">  <br>  
                @error('name')
                    <span class="error text-danger pt-0 mt-0">{{ $message }}</span>
                @enderror <br>
            <label for="name" class="mb-2">Password</label>
            <input class="form-control mb-0" type="text" wire:model.blur="password" id="password" autocomplete="off">  <br>  
                @error('password')
                    <span class="error text-danger pt-0 mb-2">{{ $message }}</span>
                @enderror <br>
            <div class="progress mt-2" role="progressbar" aria-label="Animated striped example" aria-valuenow="{{ $level }}" aria-valuemin="0" aria-valuemax="100" style="height: 10px;">
                <div class="progress-bar progress-bar-striped progress-bar-animated @if($level<20) bg-danger @elseif($level<100) bg-primary @elseif($level==100) bg-success @endif" style="width: {{ $level }}%;"></div>
            </div><br>
            @if ($level==100)
            <span class="text-success">Password High</span>
            @elseif($level>50)
            <span class="text-info">Password Middle</span>
            @endif
            <input type="submit" class="btn btn-large bg-primary" style="width:100%;color:white;" value="soumettre">
        </form>
    </div> 
</div>