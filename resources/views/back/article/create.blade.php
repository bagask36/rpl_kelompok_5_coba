@extends('back.layout.template')

@section('title', 'Create Articles | Solusi Pajak Online')

@section('content')
    <!-- Create -->
    <div id="content-wrapper">
        <!-- Topbar -->
        @include('back.layout.topbar')
        <!-- End of Topbar -->
        <!-- Main Content -->
        <div id="content">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="mt-3">
                    @if ($errors->any())
                        <div class="my-3">
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>
        
                
                <form action="{{ url('/admin/articles') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control"
                                    value="{{ old('title') }}">
                            </div>
                        </div>
        
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="categories_id">Category</label>
                                <select name="categories_id" id="categories_id" class="form-control">
                                    <option value="" hidden>-- Choose --</option>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
        
                    <div class="mb-3">
                        <label for="desc">Description</label>
                        <textarea name="desc" id="myeditor" cols="30" rows="10" class="form-control"></textarea>
                    </div>
        
                    <div class="mb3">
                        <label for="img">Image (Maximum 2 MB)</label>
                        <input type="file" name="img" id="img" class="form-control">
                    </div>
        
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="" hidden>-- Choose --</option>
                                    <option value="1">Publish</option>
                                    <option value="0">Private</option>
        
                                </select>
                            </div>
                        </div>
        
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="publish_date">Publish Date</label>
                                <input type="date" name="publish_date" id="publish_date" class="form-control">
                            </div>
                        </div>
        
                        <div class="float-end">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
            </main>
        </div>
        <!-- End of Main Content -->
        <!-- Footer -->
        @include('back.layout.footer')
        <!-- End of Footer -->
    </div>
    <!-- End of Create -->
    
@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
            clipboard_handleImages: false,
            extraAllowedContent: 'iframe[*]',
            allowedContent: true
        }
    </script>


    <script>
        CKEDITOR.replace('myeditor', options);
    </script>
@endpush
