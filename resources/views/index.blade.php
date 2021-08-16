@extends ('layouts.master')

@section ('content')

<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">RSS Parser</h1>
        <div class="lead text-muted">Choose your RSS below</div>

        @include('layouts.form')

    </div>
  </div>
</section>

@endsection
