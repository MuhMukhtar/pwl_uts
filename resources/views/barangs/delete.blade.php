{{-- !-- Delete Warning Modal --> --}}
<form action="{{ route('barang.destroy', $Barang->id_barang) }}" method="post">
    <div class="modal-body">
        @csrf
        @method('DELETE')
        <h5 class="text-center">Are you sure you want to delete {{ $Barang->nama_barang }} ?</h5>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger">Yes, Delete Barang</button>
    </div>
</form>
