@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Agregar Categoría
                        <a href="{{ url('admin/category') }}" class="btn btn-primary btn-sm text-white float-end">Regresar</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/category') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" class="form-control">
                                @error('name') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="slug">Slug</label>
                                <input type="text" name="slug" class="form-control">
                                @error('slug') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="descripction">Descripción</label>
                                <textarea type="text" name="descripction" class="form-control" rows="3"></textarea>
                                @error('descripction') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="image">Imagen</label>
                                <input type="file" name="image" class="form-control">
                                @error('image') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="mb-3">
                                <h4>CEO Tags</h4>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="status">Status</label><br/>
                                <input type="checkbox" name="status">
                            </div>
                            <div class="mb-3">
                                <label for="meta_title">Meta Description</label>
                                <textarea type="text" name="meta_title" class="form-control" rows="3"></textarea>
                                @error('meta_title') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="meta_keyword">Meta Keyword</label>
                                <textarea type="text" name="meta_keyword" class="form-control" rows="3"></textarea>
                                @error('meta_keyword') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="meta_description">Meta Description</label>
                                <textarea type="text" name="meta_description" class="form-control" rows="3"></textarea>
                                @error('meta_description') <small class="text-danger">{{$message}}</small> @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary float-end">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
