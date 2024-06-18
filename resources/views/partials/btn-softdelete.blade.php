<form action="{{ route('dccomics.destroy', ['dccomic' => $curComic->id]) }}" method="POST"
    class="delete">
    @csrf
    @method('DELETE')
    <button type="button" data-comic-title="{{ $curComic->title }}" class="btn btn-danger">
        <i class="fa-solid fa-trash"></i>
    </button>
</form>
