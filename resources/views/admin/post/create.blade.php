<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor5/41.4.2/ckeditor.min.js"
    integrity="sha512-z5R1qDiHpqoswJJOldglYtCSpaDg3JUEoZL/M/4LDCL6XUwB2cHmCtzCXWcCbA3CCuGxTCxdKA9ybTJu2zqTng=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<x-admin.layout>
    <div class="card">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
        @endif

        <h1 class="h3 mb-4 text-gray-800">Tạo bài viết</h1>
        <form action="" id="editor">
            @csrf
            <div>
                <label>Title</label>
                <input type="text" name="title">
            </div>
            <div>
                <label>Description</label>
                <textareat class="form-control" id="editor" name="description"></textareat>
            </div>
            <div>
                <input type="submit" value="Submit">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>


</x-admin.layout>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
