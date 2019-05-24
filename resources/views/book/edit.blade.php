
<html>
<head>
    <title>
        Chỉnh sửa thông tin sách sách
    </title>
</head>
<body>
<div>
    <h1>Chỉnh sửa sách {{ $book->title }}</h1>
    <form role="form" action="{{ route('book.update', ['id' => $book->id]) }}" method="POST">
        {!! csrf_field() !!}
        {{ method_field('PUT') }}
        <div>
            <label>Tên Sách: </label>
            <input type="text" value="{{ $book->title }}" name="title" placeholder="Tên sách"/>
        </div>
        <div>
            <label>Tên tác giả: </label>
            <input type="text" value="{{ $book->author }}" name="author" placeholder="Tên tác giả"/>
        </div>
        <div>
            <input type="submit" value="cập nhật" />
        </div>
    </form>
</div>
</body>
</html>
