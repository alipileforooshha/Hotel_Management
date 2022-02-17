@include('layout')
<div class="section d-flex flex-column" id="guest_section">
    <label for="">اطلاعات مهمان</label>
    <hr>
    <form action="/create_user" class="mx-3 mb-3" method="POST">
        @csrf
        <div class="d-flex justify-content-between flex-wrap">
            <div class="d-flex flex-column my-2">
                <label class="form-label text-danger" for="">نام  و نام خانوادگی (الزامی)</label>
                <input class="form-control" type="text" name="fullname" id="" placeholder="علی پیله فروشها" value={{Session::get('fullname')}}>
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">سن</label>
                <input class="form-control" type="text" name="age" id="" placeholder="35" value={{Session::get('age')}}>
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">جنسیت</label>
                <input class="form-control" type="text" name="gender" id="" placeholder="مرد - زن" value={{Session::get('age')}}>
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label text-danger" for="">شماره ملی (الزامی)</label>
                <input class="form-control" type="text" name="ssn" id="" placeholder="4313345821" value={{Session::get('ssn')}}>
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label text-danger" for="">شماره تماس (الزامی)</label>
                <input class="form-control" type="text" name="number" id="" placeholder="09128221412" value={{Session::get('number')}}>
            </div>
        </div>
                <button class="btn btn-primary mt-3" type="submit">ثبت اطلاعات</button>
    </form>
    <label class="mt-4" for="">اطلاعات اتاق</label>
    <hr>
    <form class="d-flex justify-content-between flex-wrap" action="/room_search_submit" method="POST">
        @csrf
        <div class="d-flex flex-column my-2">
            <label class="form-label" for="">ایدی اتاق</label>
            <input class="form-control" type="text" name="id" id="" placeholder="3" value=@if(isset($room)){{$room->id}}@endif>
        </div>
        <div class="d-flex flex-column my-2">
            <label class="form-label" for="">طبقه اتاق</label>
            <input class="form-control" type="text" name="floor" id="" placeholder="3" value=@if(isset($room)){{$room->floor}}@endif>
        </div>
        <div class="d-flex flex-column my-2">
            <label class="form-label" for="">ظرفیت اتاق</label>
            <input class="form-control" type="text" name="capacity" id="" placeholder="4" value=@if(isset($room)){{$room->capacity}}@endif>
        </div>
        <div class="d-flex flex-column my-2">
            <label class="form-label text-danger" for="">تاریخ شروع اقامت (الزامی)</label>
            <input class="form-control" type="date" name="startDate" id="" placeholder="1378-3-3" value="@if(isset($room)){{Session('reserve_start')}}@endif">
        </div>
        <div class="d-flex flex-column my-2">
            <label class="form-label text-danger" for="">تاریخ پایان اقامت (الزامی)</label>
            <input class="form-control" type="date" name="endDate" id="" placeholder="1378-3-7" value="@if(isset($room)){{Session('reserve_end')}}@endif">
        </div>
        <div class="d-flex flex-column my-2">
            <label class="form-label text-danger" for="">هزینه اقامت(هر شب) (الزامی)</label>
            <input class="form-control" type="text" name="cost" id="" placeholder="100,000 تومان(حداکثر)" value=@if(isset($room)){{$room->cost}}@endif>
        </div>
        <div class="d-flex my-3">
            <label class="form-label" for="">امکانات ویژه : </label>
            <div class="form-check mx-3">
                <label class="form-check-label">ویو ابدی</label>
                <input class="form-check-input" type="checkbox" name="view" id="">  
            </div>
            <div class="form-check mx-3">
                <label class="form-check-label">کارت ویژه</label>
                <input class="form-check-input" type="checkbox" name="specialCard" id="">  
            </div>
            <div class="form-check mx-3">
                <label class="form-check-label">پذیرایی در اتاق</label>
                <input class="form-check-input" type="checkbox" name="meal" id="">  
            </div>
            <div class="form-check mx-3">
                <label class="form-check-label">حمام ویژه</label>
                <input class="form-check-input" type="checkbox" name="bath" id="">  
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" name="action" value="search" class="btn btn-success mx-1" data-bs-toggle="modal" data-bs-target="#myModal">
                نمایش اتاق های موجود
            </button>
            <button type="submit" name="action" value="reserve" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                رزرو اتاق
            </button>
        </div>
    </form>
</div>
@if(isset($rooms))
<div class="mymodal" id="">
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
                            <th>هزینه اقامت</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rooms as $room)
                        <form action="room_select" method="POST">
                            @csrf
                        <tr class="">
                            <input type="text" name="id" id="" style="display: none" value={{$room->id}}>
                            <input type="text" name="floor" id="" style="display: none" value={{$room->floor}}>
                            <input type="text" name="capacity" id="" style="display: none" value={{$room->capacity}}>
                            <td>{{$room->id}}</td>
                            <td>{{$room->floor}}</td>
                            <td>{{$room->capacity . 'نفر'}}</td>
                            <td>{{$room->specialServices}}</td>
                            <td>{{$room->price}}</td>
                            <td>
                                <button class="btn btn-primary" type="submit">
                                    انتخاب
                                </button>
                            </td>
                        </tr>
                        </form>
                        @endforeach
                </tbody>
                </table>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger modal-close">بستن</button>
        </div>
    </div>
</div>
</div>
@endif
@if(isset($room))
<div class="section">
    <label class="mt-4" for="">اطلاعات همراهان</label>
    <hr>
    @for($i = 1; $i < $room->capacity; $i++)
        <form action="/create_user" class="mx-3 mb-3" method="POST">
            @csrf
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex flex-column my-2">
                    <label class="form-label" for="">نام  و نام خانوادگی </label>
                    <input class="form-control" type="text" name="fullname" id="" placeholder="علی پیله فروشها">
                </div>
                <div class="d-flex flex-column my-2">
                    <label class="form-label" for="">سن</label>
                    <input class="form-control" type="text" name="age" id="" placeholder="35">
                </div>
                <div class="d-flex flex-column my-2">
                    <label class="form-label" for="">جنسیت</label>
                    <input class="form-control" type="text" name="gender" id="" placeholder="مرد - زن">
                </div>
                <div class="d-flex flex-column my-2">
                    <label class="form-label" for="">شماره ملی </label>
                    <input class="form-control" type="text" name="ssn" id="" placeholder="4313345821">
                </div>
                <div class="d-flex flex-column my-2">
                    <label class="form-label" for="">شماره تماس </label>
                    <input class="form-control" type="text" name="number" id="" placeholder="09128221412">
                </div>
            </div>
            <button class="btn btn-primary mt-3" type="submit">ثبت اطلاعات</button>
        </form>
    @endfor
</div>
@endif
<script src="./code.js"></script>