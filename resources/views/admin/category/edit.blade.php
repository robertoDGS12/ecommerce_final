@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Editar Categoría
                        <a href="{{ url('admin/category') }}" class="btn btn-primary btn-sm text-white float-end">Regresar</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/category/'.$category->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                                @error('name') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="slug">Slug</label>
                                <input type="text" name="slug" value="{{ $category->slug }}" class="form-control">
                                @error('slug') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="descripction">Descripción</label>
                                <textarea type="text" name="descripction" class="form-control" rows="3">{{ $category->descripction }}</textarea>
                                @error('descripction') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="image">Imagen</label>
                                <input type="file" name="image" class="form-control">
                                <img src="{{ asset('/uploads/category/'.$category->image) }}" width="60px" height="60px">
                                @error('image') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="mb-3">
                                <h4>CEO Tags</h4>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="status">Status</label><br/>
                                <input type="checkbox" name="status" {{ $category->status == '1' ? 'checked':'' }}>
                            </div>
                            <div class="mb-3">
                                <label for="meta_title">Meta Description</label>
                                <textarea type="text" name="meta_title" class="form-control" rows="3">{{ $category->meta_title }}</textarea>
                                @error('meta_title') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="meta_keyword">Meta Keyword</label>
                                <textarea type="text" name="meta_keyword" class="form-control" rows="3">{{ $category->meta_keyword }}</textarea>
                                @error('meta_keyword') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="meta_description">Meta Description</label>
                                <textarea type="text" name="meta_description" class="form-control" rows="3">{{ $category->meta_description }}</textarea>
                                @error('meta_description') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary float-end">Actualizar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
