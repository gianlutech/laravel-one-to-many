@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li> 
            @endforeach
        </ul>
    </div>
    @endif
    @if($post)
    <form action="{{route('admin.posts.update', $post->id)}}" method="POST" novalid>
    @else
    <form action="{{route('admin.posts.store')}}" method="POST" novalid>
    @endif
        @csrf
<div class="row">
    <div class="col-12">
     <div class="form-group">
       <label for="title">Titolo Post</label>
       <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Titolo" required value="{{old('title', $post->title)}}">
     </div>

    <div class="col-12">
     <div class="form-group">
       <label for="title">Titolo Post</label>
       <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="10" >{{old('content', $post->content)}}</textarea>
     </div>

    <div class="col-11">
     <div class="form-group">
       <label for="image"></label>
       <input type="url" class="form-control @error('image') is-invalid @enderror" id="image" name="image" placeholder="Url dell' immagine" value="{{old('image', $post->image)}}"/>
     </div>
    </div>
    <div class="col-1">
        <img src="https://socialistmodernism.com/wp-content/uploads/2017/07/placeholder-image.png" alt="placeholder" class="img-fluid" id="preview">
    </div>
</div>
<hr>
<div class="d-flex justify-content-end">
    <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"> Salva</i></button>
</div>
</form>