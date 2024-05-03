<a href="{{ route('items.show', $item->id) }}" class="btn2"><i class="bi-person-lines-fill"></i></a>
<a href="{{ route('items.edit', $item->id) }}" class="btn2"><i class="bi-pencil-square"></i></a>
<form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display: inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn2" onclick="return confirm('Anda yakin ingin menghapus barang ini?')"><i class="bi bi-trash"></i></button>
</form>
