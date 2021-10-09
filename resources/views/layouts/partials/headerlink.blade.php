 <!--breadcrumb-->
 <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3 ">
     <div class="breadcrumb-title pr-3">{{ $title }}</div>
     <div class="pl-3">
         <nav aria-label="breadcrumb">
             <ol class="breadcrumb mb-0 p-0">
                 <li class="breadcrumb-item"><a href="/"><i class='bx bx-home-alt'></i></a>
                 </li>
                 @if (isset($headerlink))
                     @foreach ($headerlink as $a)
                         <li class="breadcrumb-item active" aria-current="page">{{ $a }}</li>
                     @endforeach
                 @else
                     <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                 @endif
             </ol>
         </nav>
     </div>
 </div>
 <!--end breadcrumb-->
