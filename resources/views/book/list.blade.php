<html>
<head>
    <title>
        Danh sách sách
    </title>
</head>
<body>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<div>
    <h1>Danh sách sách</h1>
    <a href="{{ route('book.create') }}">Thêm mới sách</a>
    <table>
        <thead>
        <th width="5%">id</th>
        <th>Tên sách</th>
        <th>Tên tác giả</th>
        <th>Ngày khởi tạo</th>
        <th>Ngày sửa</th>
        <th>Thao tác</th>
        </thead>
        @foreach ($books as $book)
            <tbody>
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->created_at }}</td>
                <td>{{ $book->updated_at }}</td>
                <td>
                    <a href="{{ route('book.edit', ['id' => $book->id]) }}">Sửa </a>
                    <form action="{{ route('book.destroy', ['id' => $book->id]) }}" class="submitDelete" method="post" >
                        {!! csrf_field() !!}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-primary">Xóa</button>
                    </form>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
    {{ $books->links() }}
</div>
</body>
</html>
