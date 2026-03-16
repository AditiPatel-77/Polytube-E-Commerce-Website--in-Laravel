<!-- Testimonial Start -->
<div class="container-fluid testimonial py-5 my-5">
    <div class="container py-5">

        <div class="text-center mx-auto pb-5" style="max-width: 600px;">
            <h5 class="text-primary">Our Testimonial</h5>
            <h1>Our Client Saying!</h1>
        </div>

        <div class="owl-carousel testimonial-carousel">

            @foreach($testimonials as $t)
            <div class="testimonial-item border p-4">

                <div class="d-flex align-items-center">
                    <div>
                        <img src="{{ asset('uploads/testimonials/'.$t->image) }}"
                             width="90"
                             height="90"
                             style="object-fit:cover;border-radius:50%;">
                    </div>

                    <div class="ms-4">
                        <h4 class="text-secondary">{{ $t->name }}</h4>
                        <p class="m-0 pb-3">{{ $t->profession }}</p>

                        <div class="d-flex pe-5">
                            @for($i=1; $i<=5; $i++)
                                <i class="fas fa-star me-1 {{ $i <= $t->rating ? 'text-primary' : 'text-muted' }}"></i>
                            @endfor
                        </div>
                    </div>
                </div>

                <div class="border-top mt-4 pt-3">
                    <p class="mb-0">{{ $t->message }}</p>
                </div>

            </div>
            @endforeach

        </div>

    </div>
</div>
<!-- Testimonial End -->
