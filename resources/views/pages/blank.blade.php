@extends('layouts.pagesmain')

@section('content')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
        <div class="breadcrumb-title pr-3">Header</div>
        <div class="pl-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Header</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="card radius-15">
        <div class="card-header border-bottom-0">
            <div class="d-lg-flex align-items-center">
                <div>
                    <h5 class="mb-2 mb-lg-0">header</h5>
                </div>

            </div>
        </div>
        <div class="card-body">
            {{-- code hire!!! --}}
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde perferendis aspernatur dolorum, consequuntur
                pariatur non laboriosam quaerat ratione accusantium voluptate beatae alias temporibus, libero numquam
                dignissimos maxime adipisci id eaque, voluptatem exercitationem iure iusto soluta. Numquam, atque. Vitae,
                rem vel dolor accusamus cumque recusandae, voluptas odio ad nobis amet ea iste voluptates. Reprehenderit id
                asperiores ullam eum tempore expedita dolore porro nesciunt error eligendi ipsum, voluptatum cumque. A
                natus, aut nostrum necessitatibus rerum quibusdam distinctio asperiores, suscipit inventore aperiam
                repellendus veniam quod corporis quia! Laborum perferendis animi veniam minus repellendus, temporibus velit
                laboriosam neque, eum accusantium cumque et necessitatibus dignissimos!</p>
        </div>
    </div>
@endsection
