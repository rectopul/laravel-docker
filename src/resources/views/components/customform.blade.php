<form>
    <div class="form-row">
      <div class="form-group col-md-12">
        <input type="text" class="form-control" placeholder="Nome da customização" name="name" id="name">
      </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="description">Descrição da customização</label>
            <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Descrição da customização" name="description" id="description"></textarea>
        </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#types">Tipos de customização</button>
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <select id="inputState" class="form-control">
          <option selected>Choose...</option>
          <option>...</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip">
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
</form>