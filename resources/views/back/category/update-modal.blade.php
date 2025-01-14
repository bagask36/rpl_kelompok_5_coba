@foreach ($categories as $item)
    <div class="modal fade" id="modalUpdate{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Categories</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/categories/'.$item->id) }}" method="post">
                        @method('PUT')
                        @csrf

                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $item->name) }}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-secondary">Save Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach