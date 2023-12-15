<div> 
    <div style="display: flex;justify-content:space-between;align-items:flex-start;">
        <div>
            <h1 style="font-size:50px;font-weight:800;">Research App</h1><br>
            <h1 style="font-size:20px;">Find a student in the below liste</h1><br>
        </div>
        <div>
            <form class="mt-4">
                <div class="input-group has-validation">
                    <div class="form-floating is-invalid">
                      <input type="search" class="form-control" wire:model.live="name" id="floatingInputGroup2" placeholder="Username" required>
                      <label for="floatingInputGroup2">Search</label>
                    </div>
                    <span class="input-group-text">&#128270;</span>
                  </div>
            </form>
           
            {{-- @if (count($contacts)>0)
            @foreach ($contacts as $contact)
            <div class="list-group mt-1 z-10">
                <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $contact['nom'] }}</h5>
                    <small>{{ $contact['phone'] }}</small>
                  </div>
                  <p class="mb-1">{{ $contact['adresse'] }}</p>
                  <p class="mb-1">{{ $contact['ville'] }}</p>
                </a>
            </div>
            @endforeach
            @endif --}}
        </div>
    </div>


    <div style="margin-top: 50px;">
        <table class="table">
            <thead class="table-dark">
                <th>Nom prénoms</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Téléphone</th>
                <th>Adult</th>
            </thead>
            <tbody>
              @foreach ($mescontacts as $mescontacts)
              <tr>
                <td>{{ $mescontacts['nom'] }}</td>
                <td>{{ $mescontacts['adresse'] }}</td>
                <td>{{ $mescontacts['ville'] }}</td>
                <td>{{ $mescontacts['phone'] }}</td>
                <td>
                    @if ($mescontacts['age']>18)
                        <span class="text-success">&#9989;</span>
                    @else
                    <span class="text-danger">&#10060;</span>
                    @endif                
                </td>
              </tr>              
              @endforeach
            </tbody>
        </table>

        @if(session()->has('message'))
        <span class="text-danger">{{ session('message') }}</span> {{ $name }}
        @endif
    </div>
</div>