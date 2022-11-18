
<table>
    <thead>
        <th>#ID</th>
        <th>#UserID</th>
        <th>#TITLE</th>
        <th>#body</th>
        
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td name="id">{{$post->id}}</td>
            <td name="userid">{{$post->userId}}</td>
            <td name="title">{{$post->title}}</td>
            <td name="body">{{$post->body}}</td>

        @endforeach
    </tbody>
</table>
<a  href="/save">save</a> 
</form> 
