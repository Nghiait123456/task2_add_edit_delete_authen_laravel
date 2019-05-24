<html>
<head>
    <title>
        Thêm mới sách
    </title>
</head>
<body>
<div>
    <h1>Thêm mới sách</h1>
    <form action="{{ route('book.store') }}" method="post">
        {!! csrf_field() !!}
        {{ method_field('POST') }}
        <div>
            <label>Tên Sách: </label>
            <input type="text" value="" name="title" placeholder="Tên sách"/>
        </div>
        <div>
            <label>Tên tác giả: </label>
            <input type="text" value="" name="author" placeholder="Tên tác giả"/>
        </div>
        <div>
            <input type="submit" value="thêm mới" />
        </div>
    </form>
</div>
</body>
</html>
