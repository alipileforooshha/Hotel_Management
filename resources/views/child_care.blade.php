@include('layout')
@include('layout')
<div class="section d-flex justify-content-between">
    @include('search_guest')
    <form action="">
        <div class="d-flex flex-column">
            <label for="">تحویل کودک</label>
            <hr>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">نام و نام خانوادگی کودک</label>
                <input class="form-control" type="text" name="" id="" placeholder="علی پیله فروشها">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">سن</label>
                <input class="form-control" type="text" name="" id="" placeholder="14">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">شماره شناسنامه</label>
                <input class="form-control" type="text" name="" id="" placeholder="4314215984">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">ایدی مهمان</label>
                <input class="form-control" type="text" name="" id="" placeholder="5">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">زمان پذیرش</label>
                <input class="form-control" type="datetime-local" name="" id="" placeholder="1400-2-6">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">زمان تحویل</label>
                <input class="form-control" type="datetime-local" name="" id="" placeholder="1400-2-10">
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