<h1>member list<h1>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>userID</td>
            <td>title</td>
        </tr>
    @foreach($xyz as $abc)
    <tr>
        <td>{{$abc['id']}}</td>
        <td>{{$abc['userid']}}</td>
        <td>{{$abc['title']}}</td>
    </tr>
    @endforeach
</table>
<div>
    {{$xyz->links()}}
</div>
<style>
    .w-5{
        display:none;
    }
    </style>