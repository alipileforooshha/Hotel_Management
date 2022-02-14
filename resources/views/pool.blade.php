@include('layout')
<div class="section d-flex justify-content-between">
    @include('search_guest')
    <form action="">
        <div class="d-flex flex-column">
            <label for="">استخر</label>
            <hr>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">ایدی مهمان</label>
                <input class="form-control" type="text" name="" id="" placeholder="3">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">هزینه سانس</label>
                <input class="form-control" type="number" name="" id="" placeholder="50,000" disabled>
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">زمان پذیرش</label>
                <input class="form-control" type="datetime-local" name="" id="">
            </div>
            <div class="d-flex justify-content-between">
                <!-- Button to Open the Modal -->
                <button type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal1">
                    ثبت سفارش
                </button>
            </div>
        </div>
    </form>    
</div>