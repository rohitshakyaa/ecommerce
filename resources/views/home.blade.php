<x-layout>
    @include('partials.categories')
    @include('partials.deal')
    @include('partials.brands')
    @include('partials.banner')
    @include('partials.products')
    @include('partials.smartphone-and-tablet')
    @include('partials.computer-and-laptop')
    @include('partials.speaker')

    <div class="py-4 bg-gray">
        <div class="container">
            <div class="row text-center text-md-start g-4">
    
                <!-- Free Delivery -->
                <div class="col-12 col-md-3">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-3">
                        <i class="bi bi-truck feature-bar__icon text-primary"></i>
                        <div>
                            <div class="fw-bold text-uppercase">Free Delivery</div>
                            <div class="text-muted small">Free shipping on all order</div>
                        </div>
                    </div>
                </div>
    
                <!-- Returns -->
                <div class="col-12 col-md-3">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-3">
                        <i class="bi bi-cash-coin feature-bar__icon text-primary"></i>
                        <div>
                            <div class="fw-bold text-uppercase">Returns</div>
                            <div class="text-muted small">Back guarantee under 7 days</div>
                        </div>
                    </div>
                </div>
    
                <!-- Support -->
                <div class="col-12 col-md-3">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-3">
                        <i class="bi bi-headset feature-bar__icon text-primary"></i>
                        <div>
                            <div class="fw-bold text-uppercase">Support 24/7</div>
                            <div class="text-muted small">Support online 24 hours a day</div>
                        </div>
                    </div>
                </div>
    
                <!-- Payments -->
                <div class="col-12 col-md-3">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start gap-3">
                        <i class="bi bi-credit-card feature-bar__icon text-primary"></i>
                        <div>
                            <div class="fw-bold text-uppercase">Payments</div>
                            <div class="text-muted small">100% payment security</div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>

</x-layout>
