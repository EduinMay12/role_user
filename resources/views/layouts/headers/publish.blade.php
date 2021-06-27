<br>
<center>
    <form method="post" action="{{url('user/createcomment')}}">
        {{csrf_field()}}
        <div class="form-group">
                <div class="col-md-12">
                    <textarea name="comment" class="form-control" placeholder="Escribe tu comentario..."></textarea>
                    <br/>
                    <button type="submit" class="btn btn-primary">Publicar comentario</button>
                </div>
        </div>
    </form>
</center>
<br><br>
