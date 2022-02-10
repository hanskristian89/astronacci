@extends('layouts.main')

@section('container')
<div class="container text-center">
    <h4>Membership: {{ Auth::user()->level }}, Sisa Kuota: {{ (is_infinite($remainingQuota))? '∞' : $remainingQuota}} dari {{ (is_infinite($videoQuota))? '∞' : $videoQuota}}</h4>
</div>
<div class="container">
    <table class="table">
        <thead>
            <th>Judul</th>
            <th>Preview</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach ($videos as $video)
            <tr class="{{ (in_array($video->id, $videoList))? 'unlocked' : ''}}">
                <td>{{ $video->title }}</td>
                <td><img src="{{ asset('img/'. $video->title .'.jpg') }}" alt="{{ $video->title }}" width="150"></td>
                <td>
                    @if (!in_array($video->id, $videoList) && $remainingQuota == 0)
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                                Tonton
                            </button>
                        </td>
                    @else
                        <td>
                            <a href="/videos/{{ $video->slug }}"
                                class="btn btn-primary">Tonton</a>
                        </td>
                    @endif
                </td>
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
              <h5>Your quota limit has been reached, please only watch the video you have selected (green highlight).</h5>
          </div>
      </div>
    </div>
  </div>
@endsection
