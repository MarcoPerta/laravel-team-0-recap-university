{{-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Enable both scrolling & backdrop</button> --}}

<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
    aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Impostazioni</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        <hr>

        <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="">
                    <h6 class="fw-bold mb-3">Tabelle</h6>

                    <div class="my-2">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <a class="ms-3 link-secondary" href="{{route('admin.courses.index')}}">Courses</a>
                    </div>


                    <div class="my-2">
                        <i class="fa-solid fa-chalkboard-user"></i>
                        <a class="ms-3 link-secondary" href="{{route('admin.teachers.index')}}">Teachers</a>
                    </div>


                    <div class="my-2">
                        <i class="fa-solid fa-rectangle-list"></i>
                        <a class="ms-3 link-secondary" href="{{route('admin.exams.index')}}">Exams</a>
                    </div>

                </div>
            </li>
        </ul>
    </div>
</div>
