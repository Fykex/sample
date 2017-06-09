<form action="{{ route('statuses.store') }}" method="POST">
  @include('shared.errors')
  {{ csrf_field() }}
  <textarea class="form-control" name="content" rows="3" placeholder="讲野...">
    {{ old('content') }}
  </textarea>
  <button type="submit" class="btn btn-primary pull-right">发布</button>
</form>
