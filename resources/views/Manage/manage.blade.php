@extends('layouts.main')
   
   <section class="py-4 osahan-main-body">
      <div class="container">
         <div class="users-list-filter">
            @if(session()->has('error') && !session()->get('error'))
            <div class="alert alert-success alert-dismissible mb-2" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">×</span>
                  </button>
                  <div class="d-flex align-items-center">
                     <i class="bx bx-like"></i>
                     <span>
                        {{ session()->get('message') }}
                     </span>
                  </div>
            </div>
            @endif
            @if(session()->has('error') && session()->get('error'))
            <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">×</span>
                  </button>
                  <div class="d-flex align-items-center">
                     <i class="bx bx-error"></i>
                     <span>
                        {{ session()->get('message') }}
                     </span>
                  </div>
            </div>
            @endif
         </div>
      </div>
   </section>

   <!-- create new slider -->
   <section class="py-4 osahan-main-body">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="card">
                     <div class="card-header">
                        <h4 class="card-title">Create New Slider</h4>
                     </div>
                     <div class="card-body">
                        <form action="{{ url('/manage/slide/create') }}" method="post">
                           @csrf
                           <div class="form-group">
                                 <label for="link">Link</label>
                                 <input type="text" class="form-control" id="link" name="link" placeholder="Enter Link" required>
                           </div>
                           <div class="form-group">
                                 <label for="background">Background</label>
                                 <input type="text" class="form-control" id="background" name="background" value="transparent" placeholder="Enter Background (color code or type transparent)">
                           </div>
                           <div class="form-group">
                                 <label for="speed">Speed</label>
                                 <input type="number" class="form-control" id="speed" name="speed" value="1" placeholder="Enter Speed (1 2 3 ...)">
                           </div>
                           <div class="form-group">
                                 <label for="loop">Loop</label>
                                 <input type="number" class="form-control" id="loop" name="loop" value="1" placeholder="Enter Loop (1 or 0)">
                           </div>
                           <div class="form-group">
                                 <label for="autoplay">Autoplay</label>
                                 <input type="text" class="form-control" id="autoplay" name="autoplay" value="1" placeholder="Enter Autoplay (1 or 0)">
                           </div>
                           <div class="form-group">
                                 <label for="controls">Controls</label>
                                 <input type="number" class="form-control" id="controls" name="controls" value="0" placeholder="Enter Controls (1 or 0)">
                           </div>
                           <div class="form-group">
                                 <label for="hover">Hover</label>
                                 <input type="number" class="form-control" id="hover" name="hover" value="0" placeholder="Enter hover (1 or 0)">
                           </div>
                           <button type="submit" class="btn btn-primary btn-lg btn-block">Create</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end create new slider -->

   <!-- manage slider -->
   <section class="py-4 osahan-main-body">
      <div class="container">
         <div class="card-header">
            <h4 class="card-title">Manage Slider</h4>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="card">
                  <div class="card-body">
                     @foreach($sliders as $key=> $slider)
                     <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="completed" role="tabpanel" aria-labelledby="completed-tab">
                           <div class="order-body">
                              <div class="pb-3">
                                    <div class="p-3 rounded shadow-sm bg-white">
                                       <div class="d-flex align-items-center mb-3">
                                          <p class="bg-success text-white py-1 px-2 mb-0 rounded small">{{++$key}}</p>
                                          <!-- delete icon at right of each slider -->
                                          <div class="ml-auto">
                                             <a href="{{ url('/manage/slide/delete/'.$slider->id) }}" class="text-danger" onclick="return confirm('Are you sure you want to delete this slider?')">
                                                <i class="fa fa-trash"></i>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="d-flex">
                                          <p class="text-muted m-0">Link: <span class="text-dark font-weight-bold">{{$slider->link}}</span> </p>
                                       </div>
                                       <div class="d-flex">
                                          <p class="text-muted m-0">Speed<br>
                                             <span class="text-dark font-weight-bold">{{$slider->speed}}</span>
                                          </p>
                                          <p class="text-muted m-0 ml-auto">loop<br>
                                             <span class="text-dark font-weight-bold">{{$slider->loop}}</span>
                                          </p>
                                          <p class="text-muted m-0 ml-auto">autoplay<br>
                                             <span class="text-dark font-weight-bold">{{$slider->autoplay}}</span>
                                          </p>
                                          <p class="text-muted m-0 ml-auto">controls<br>
                                             <span class="text-dark font-weight-bold">{{$slider->controls}}</span>
                                          </p>
                                          <p class="text-muted m-0 ml-auto">hover<br>
                                             <span class="text-dark font-weight-bold">{{$slider->hover}}</span>
                                          </p>
                                          <p class="text-muted m-0 ml-auto">status<br>
                                             <span class="text-dark font-weight-bold">{{$slider->status}}</span>
                                          </p>
                                       </div>
                                    </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end manage slider -->
      
