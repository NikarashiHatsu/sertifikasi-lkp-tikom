<div class="flex space-x-2 flex-shrink-0">
    <a href="{{ route('dashboard.master.user.edit', $id) }}" class="btn btn-info btn-sm space-x-2 w-20">
        <x-phosphor-pen class="w-4 h-4" />
        <span>
            Edit
        </span>
    </a>

    <form
        action="{{ route('dashboard.master.user.destroy', $id) }}"
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
