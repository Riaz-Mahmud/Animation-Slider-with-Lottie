<!-- special offer -->
<div class="py-3 osahan-promos">
   <div class="d-flex align-items-center mb-3">
      <h5 class="m-0">Lottie Animation Slider</h5>
      <div class="ml-auto">
         <a href="{{ url('/manage') }}" class="btn btn-primary">Admin Panel</a>
      </div>
   </div>
   <div class="recommend-sli pb-0 mb-0 slick-slider">
      <!-- <div class="special-offer-slider"> -->
      @foreach($sliders as $slider)
        <div class="osahan-slider-item mx-2">
            @if($slider->type == 1)
            <lottie-player src="{{$slider->link}}"  background="{{$slider->background}}"  speed="{{$slider->speed}}" class="img-fluid mx-auto rounded special_offer_slider"  style="width: 100%;" alt="Responsive image" @if($slider->hover == 1) hover @endif @if($slider->loop == 1) loop @endif @if($slider->controls == 1) controls @endif @if($slider->autoplay == 1) autoplay @endif></lottie-player>
            @else
            <dotlottie-player src="{{$slider->link}}"  background="{{$slider->background}}"  speed="{{$slider->speed}}" class="img-fluid mx-auto rounded special_offer_slider"  style="width: 100%;" alt="Responsive image" @if($slider->hover == 1) hover @endif @if($slider->loop == 1) loop @endif @if($slider->controls == 1) controls @endif @if($slider->autoplay == 1) autoplay @endif></dotlottie-player>
            @endif
         </div>
      @endforeach
      <!-- </div> -->
   </div>
</div>
