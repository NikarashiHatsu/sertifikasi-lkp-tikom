<div class="flex space-x-2 flex-shrink-0">
    <form
        action="{{ route('dashboard.transaction.participant.destroy', $id) }}"
        method="post"
        onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
    >
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-error btn-sm space-x-2 w-28">
            <x-phosphor-trash class="w-4 h-4" />
            <span>
                Hapus
            </span>
        </button>
    </form>
</div>
