@extends('layouts.main')

@section('container')
<div class="container text-center">
    <h4>Membership: {{ Auth::user()->level }}, Sisa Kuota: {{ (is_infinite($remainingQuota))? '∞' : $remainingQuota}} dari {{ (is_infinite($articleQuota))? '∞' : $articleQuota}}</h4>
</div>
<div class="container">
    <table class="table">
        <thead>
            <th>Judul</th>
            <th>Preview</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr class="{{ (in_array($article->id, $articleList))? 'unlocked' : ''}}">
                <td>{{ $article->title }}</td>
                <td>{{ $article->excerpt }}</td>
                @if (!in_array($article->id, $articleList) && $remainingQuota == 0)
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                            Baca
                        </button>
                    </td>
                @else
                    <td>
                        <a href="/articles/{{$article->slug}}"
                            class="btn btn-primary">Baca</a>
                    </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="formModalLabel" style="color: red">Warning</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <h5>Your quota limit has been reached, please only read the articles you have selected (green highlight).</h5>
          </div>
      </div>
    </div>
  </div>
@endsection
