@csrf
@include('dashboard.partials.validation-errors')

<div class="form-group">
    <input class="form-control" type="text" name="publication" id="publication" placeholder="Publicación" value="{{old("publication", $post-> publication)}}">    
</div>

<div class="form-group">
    <textarea  class="form-control" name="publication_content" id="publication_content" cols="30" rows="10">
        {{old("publication_content", $post-> publication_content)}}
    </textarea>
</div>

<div>
    <a href="{{ URL::previous() }}" class="btn btn-danger">Cancelar</a>
    <button type="submit" class="btn btn-success">Guardar</button>
</div>