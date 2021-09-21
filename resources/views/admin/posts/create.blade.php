
@extends('layouts.app')

@section('content')
    <div class="container">

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li> 
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{route('admin.posts.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="titolo" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="titolo" name="title">
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Categoria</label>
                <select name="category_id" id="category" class="form-control">   
                    <option value="">
                        - - Seleziona una categoria - - 
                    </option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" 
                        @if($category->id == old('category_id'))
                        selected
                        @endif>
                        {{$category->name}}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <h3>Tags</h3>
                @foreach($tags as $tag)
                    <input type="checkbox" value="{{$tag->id}}" id="tag{{$loop->iteration}}" name="tag[]"
                    @if(in_array($tag->id, old('tags', [])))
                    checked
                    @endif>
                    <label for="tag{{$loop->iteration}}" class="mr-3">{{$tag->name}}</label>
                @endforeach
            </div>

            <div class="mb-3">
                <label for="desc" class="form-label">Descrizione</label>
                <textarea class="form-control" name="content" id="desc" cols="30" rows="10"></textarea>            
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection