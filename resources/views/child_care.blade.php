@include('layout')
@include('layout')
<div class="section d-flex justify-content-between">
    @include('search_guest')
    <form action="">
        <div class="d-flex flex-column">
            <label for="">تحویل کودک</label>
            <hr>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">نام کودک</label>
                <input class="form-control" type="text" name="" id="">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">سن</label>
                <input class="form-control" type="text" name="" id="">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">شماره شناسنامه</label>
                <input class="form-control" type="text" name="" id="">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">ایدی مهمان</label>
                <input class="form-control" type="text" name="" id="">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">زمان پذیرش</label>
                <input class="form-control" type="datetime-local" name="" id="">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">زمان تحویل</label>
                <input class="form-control" type="datetime-local" name="" id="">
            </div>
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                    پذیرش کودک
                </button>
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal1">
                    تحویل کودک
                </button>
            </div>
        </div>
    </form>    
</div>