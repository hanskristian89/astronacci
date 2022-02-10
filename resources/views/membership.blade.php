@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Upgrade Membership</div>
                <div class="card-body">
                    <h5 style="color: red">Warning! Downgrade your membership will cause loss of access to previous articles and videos!</h5>
                    <form method="POST" action="{{ route('membership.upgrade', [Auth::user()->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="level" class="col-md-4 col-form-label text-md-end">{{ __('Membership') }}</label>
                            <div class="col-md-6">
                                <select class="form-select" id="level" name="level">
                                    <option value="A" {{ (Auth::user()->level == 'A')? 'selected' : ''}}>A</option>
                                    <option value="B" {{ (Auth::user()->level == 'B')? 'selected' : ''}}>B</option>
                                    <option value="C" {{ (Auth::user()->level == 'C')? 'selected' : ''}}>C</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
