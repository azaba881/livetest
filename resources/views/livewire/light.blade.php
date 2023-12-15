<div>
    <h1 style="font-size:50px;font-weight:800;">Light App</h1><br>
    <h1 style="font-size:50px;font-weight:800;text-align:center;"><span style="font-size: 60px;">&#128161</span> {{ $brightness }} %</h1>
    <div class="progress mt-4" role="progressbar" aria-label="Animated striped example" aria-valuenow="{{ $brightness }}" aria-valuemin="0" aria-valuemax="100" style="height: 50px;">
        <div wire:poll.1s class="progress-bar progress-bar-striped progress-bar-animated @if($brightness<20) bg-danger @elseif($brightness<100) bg-primary @elseif($brightness==100) bg-success @endif" style="width: {{ $brightness }}%;"></div>
    </div>    
    <div class="m-4">
        <button wire:click='startAction' class="btn btn-success">On</button>
        <button wire:click='increment' class="btn btn-primary" @if ($brightness>=100) disabled @endif>+</button>
        <button wire:click='decrement' class="btn btn-info" @if ($brightness==0) disabled @endif>-</button>
        <button class="btn btn-danger"  wire:click="endAction">Off</button>
    </div>
</div>