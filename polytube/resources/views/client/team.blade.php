<!-- Team Start -->
<div class="container-fluid py-5 my-5 team">
    <div class="container py-5">

        <div class="text-center mx-auto pb-5" style="max-width: 600px;">
            <h5 class="text-primary">Our Team</h5>
            <h1>Meet our expert Team</h1>
        </div>

        <div class="owl-carousel team-carousel">

            @foreach($teams as $team)
            <div class="rounded team-item">
                <div class="team-content">
                    <div class="team-img-icon">

                        <div class="team-img rounded-circle">
                            <img src="{{ asset('uploads/teams/'.$team->image) }}"
                                 class="img-fluid w-100 rounded-circle">
                        </div>

                        <div class="team-name text-center py-3">
                            <h4>{{ $team->name }}</h4>
                            <p class="m-0">{{ $team->designation }}</p>
                        </div>

                        <div class="team-icon d-flex justify-content-center pb-4">

                            @if($team->facebook)
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1"
                               href="{{ $team->facebook }}"><i class="fab fa-facebook-f"></i></a>
                            @endif

                            @if($team->twitter)
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1"
                               href="{{ $team->twitter }}"><i class="fab fa-twitter"></i></a>
                            @endif

                            @if($team->instagram)
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1"
                               href="{{ $team->instagram }}"><i class="fab fa-instagram"></i></a>
                            @endif

                            @if($team->linkedin)
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1"
                               href="{{ $team->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                            @endif

                        </div>

                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</div>
<!-- Team End -->
