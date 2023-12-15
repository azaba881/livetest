<div> 
    <div style="display: flex;justify-content:space-between;align-items:flex-start;">
        <div>
            <h1 style="font-size:50px;font-weight:800;">Product management App</h1><br>
            <select class="form-control" wire:model.lazy="perPage" id="">
                @for ($i = 5; $i < 30; $i+=5)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>
        <div>
            <form class="mt-4">
                <div class="input-group has-validation">
                    <div class="form-floating is-invalid">
                      <input type="search" class="form-control" wire:model.live="query" id="floatingInputGroup2" placeholder="Username" required>
                      <label for="floatingInputGroup2">Search</label>
                    </div>
                    <span class="input-group-text">&#128270;</span>
                  </div>
            </form>
        </div>
    </div>


    <div style="margin-top: 50px;">
        <table class="table">
            <thead class="table-dark">
                <th>Title</th>
                <th>prix</th>
                <th>categorie</th>
                <th>quantite</th>
            </thead>
            <tbody>
              @foreach ($produits as $produit)
              <tr>
                <td>{{ $produit['title'] }}</td>
                <td>{{ $produit['prix'] }}</td>
                <td>{{ $produit['categorie'] }}</td>
                <td>{{ $produit['quantite'] }}</td>
              </tr>              
              @endforeach
            </tbody>
        </table>

        {{ $produits->links() }}

        {{-- @empty($produit)
        <span class="text-danger">Aucun produit disponible</span> {{ $name }}
        @endempty --}}
    </div>
</div>