@include('layout')
<div class="section d-flex flex-column" id="guest_section">
    <label class="mt-4" for="">اطلاعات اتاق</label>
    <hr>
    <form class="" action="/room_select" method="POST">
        @csrf
        <div class="d-flex justify-content-between flex-wrap">
            <div class="d-flex flex-column my-2">
            <label class="form-label" for="">شماره اتاق</label>
                <input class="form-control" type="text" name="id" id="" placeholder="3">
            </div>
            <div class="d-flex flex-column my-2">
            <label class="form-label" for="">شماره ملی مشتری</label>
                <input class="form-control" type="ssn" name="ssn" id="" placeholder="3">
            </div>
            {{-- <div class="d-flex flex-column my-2">
            <label class="form-label" for="">طبقه اتاق</label>
                <input class="form-control" type="text" name="" id="" placeholder="3">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">ظرفیت اتاق</label>
                <input class="form-control" type="text" name="" id="" placeholder="4">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">تاریخ شروع اقامت</label>
                <input class="form-control" type="datetime" name="" id="" placeholder="1378-3-3">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">تاریخ پایان اقامت</label>
                <input class="form-control" type="datetime" name="" id="" placeholder="1378-3-7">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">هزینه اقامت(هر شب)</label>
                <input class="form-control" type="text" name="" id="" disabled placeholder="100,000 تومان(حداکثر)">
            </div> --}}
        </div>
        <div class="d-flex">
            <button type="submit" class="btn btn-success mx-1" name="action" value="renewal">
                نمایش اتاق های موجود
            </button>
        </div>
    </form>

    <label class="mt-4" for="">تمدید رزرو اتاق</label>
    <hr>
    <form class="" action="/room_renewal" method="POST">
        @csrf
        <div class="d-flex justify-content-between flex-wrap">
            <div class="d-flex flex-column my-2">
            <label class="form-label" for="">شماره اتاق</label>
                <input class="form-control" type="text" name="id" id="" placeholder="3" value=@if(isset($room)){{$room->id}}@endif>
            </div>
            <div class="d-flex flex-column my-2">
            <label class="form-label" for="">شماره مهمان</label>
                <input class="form-control" type="text" name="guest_id" id="" placeholder="3" value=@if(isset($guest)){{$guest->id}}@endif>
            </div>
            <div class="d-flex flex-column my-2">
            <label class="form-label" for="">طبقه اتاق</label>
                <input class="form-control" type="text" name="" id="" placeholder="3" value=@if(isset($room)){{$room->floor}}@endif>
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">ظرفیت اتاق</label>
                <input class="form-control" type="text" name="" id="" placeholder="4" value=@if(isset($room)){{$room->capacity}}@endif>
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">تاریخ شروع اقامت</label>
                <input class="form-control" type="date" name="" id="" placeholder="1378-3-3" value="@if(isset($reserve)){{$reserve->reserve_start}}@endif">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">تاریخ پایان اقامت</label>
                <input class="form-control" type="date" name="reserve_end" id="" placeholder="1378-3-7" value="@if(isset($reserve)){{$reserve->reserve_end}}@endif">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">هزینه اقامت(هر شب)</label>
                <input class="form-control" type="text" name="" id="" disabled placeholder="100,000 تومان(حداکثر)">
            </div>
        </div>
        <div class="d-flex">
            <button type="submit" class="btn btn-primary" >
                تمدید رزرو
            </button>
        </div>
    </form>
        </div>
</div>

<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header d-flex justify-content-between">
            <h4 class="modal-title">اتاق های موجود</h4>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th>شماره اتاق</th>
                    <th>طبقه</th>
                    <th>ظرفیت</th>
                    <th>امکانات ویژه</th>
                    <th>امکانات ویژه</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                    <td>1</td>
                    <td>3</td>
                    <td>4 نفر</td>
                    <td>ویو - حمام ویژه</td>
                    <td>
                        <button class="btn btn-success">
                            انتخاب
                        </button>
                    </td>
                    </tr>
                    <tr class="">
                        <td>1</td>
                        <td>3</td>
                        <td>4 نفر</td>
                        <td>ویو - حمام ویژه</td>
                        <td>
                            <button class="btn btn-success">
                                انتخاب
                            </button>
                        </td>
                    </tr>
                    <tr class="">
                        <td>1</td>
                        <td>3</td>
                        <td>4 نفر</td>
                        <td>ویو - حمام ویژه</td>
                        <td>
                            <button class="btn btn-success">
                                انتخاب
                            </button>
                        </td>
                    </tr>
                </tbody>
                </table>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">بستن</button>
        </div>
    </div>
</div>
