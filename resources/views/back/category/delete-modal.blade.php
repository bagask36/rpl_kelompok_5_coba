@foreach ($categories as $item)
    <div class="modal fade" id="modalDelete{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="modalDelete"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Categories</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="{{ url('admin/categories/' . $item->id) }}" method="post">
                        @method('DELETE')
                        @csrf

                        <div class="mb-3">
                            <p>Do you want to delete category "{{ $item->name }}"?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach

<!-- Modal -->
