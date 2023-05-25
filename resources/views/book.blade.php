@extends('layout\body')

@section('title', 'book')

@section('content')
<div class="container-fluid py-3" style="width:80vw">
    <table class="table">
        <thead>
          <tr>
            <th scope="col fs-4">Title</th>
            <th scope="col fs-4">Author</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($books as $listBuku )
            <tr>
                <th scope="row">{{$listBuku->title}}</th>
                <td>{{$listBuku->author}}</td>
              </tr>
            @endforeach   
          </tbody>
      </table>
      <nav aria-label="..." class="d-flex align-items-center">
        {{$books->links()}}
    </nav>
</div>


    
@endsection