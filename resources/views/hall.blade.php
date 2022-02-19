@include('layout')
<div class="section d-flex flex-column" id="guest_section">
    <label for="">اطلاعات مهمان</label>
    <hr>
    <form action="/create_user" class="mb-4 d-flex flex-wrap justify-content-between" method="POST">
        @csrf
        <div class="d-flex flex-column my-2">
            <label class="form-label text-danger" for="">نام و نام خانوادگی (الزامی)</label>
            <input class="form-control" type="text" name="fullname" id="" placeholder="علی پیله فروشها" value={{Session::get('fullname')}}>
        </div>
        <div class="d-flex flex-column my-2">
            <label class="form-label" for="">سن</label>
            <input class="form-control" type="text" name="age" id="" placeholder="25" value={{Session::get('age')}}>
        </div>
        <div class="d-flex flex-column my-2">
            <label class="form-label" for="">جنسیت</label>
            <input class="form-control" type="text" name="gender" id="" placeholder="مرد - زن">
        </div>
        <div class="d-flex flex-column my-2">
            <label class="form-label text-danger" for="">شماره ملی (الزامی)</label>
            <input class="form-control" type="text" name="ssn" id="" placeholder="4311279350" value={{Session::get('ssn')}}>
        </div>
        <div class="d-flex flex-column my-2">
            <label class="form-label text-danger" for="">شماره تماس (الزامی)</label>
            <input class="form-control" type="text" name="number" id="" placeholder="09124519258" value={{Session::get('number')}}>
        </div>
        <div class="d-flex flex-column my-2">
            <label class="form-label" for="">ایدی (در صورت نیاز به سرچ)</label>
            <input class="form-control" type="text" name="" id="" placeholder="1" value={{Session::get('id')}}>
        </div>
        <div class="d-flex justify-content-between">
            <button class="btn btn-success mt-3 " type="submit">ثبت اطلاعات</button>
            <button class="btn btn-primary mt-3 mx-3" type="submit">جستجو</button>
        </div>
    </form>
    <label for="" class="mt-4">اطلاعات تالار</label>
    <hr>
    <form action="/hall_search_submit" method="POST" class="d-flex flex-wrap justify-content-between mt-1">
        @csrf
        <div class="d-flex flex-column my-2">
            <label class="form-label" for="">شماره تالار</label>
            <input class="form-control" type="text" name="id" id="" placeholder="1" value=@if(isset($hall)){{$hall->id}}@endif>
        </div>
        <div class="d-flex flex-column my-2">
            <label class="form-label" for="">ظرفیت تالار</label>
            <input class="form-control" type="text" name="capacity" id="" placeholder="200" value=@if(isset($hall)){{$hall->capacity}}@endif>
        </div>
        <div class="d-flex flex-column my-2">
            <label class="form-label" for="">تاریخ شروع اقامت</label>
            <input class="form-control" type="date" name="startDate" id="" placeholder="1400-9-6"  value={{Session::get('hall_reserve_start')}}>
        </div>
        <div class="d-flex flex-column my-2">
            <label class="form-label" for="">تاریخ پایان اقامت</label>
            <input class="form-control" type="date" name="endDate" id="" placeholder="1400-10-2"  value={{Session::get('hall_reserve_end')}}>
        </div>
        <div class="d-flex flex-column my-2">
            <label class="form-label" for="">هزینه اقامت(هر شب)</label>
            <input class="form-control" type="text" name="cost" id="" placeholder="200,000 تومان" value=@if(isset($hall)){{$hall->cost}}@endif>
        </div>
        <div class="d-flex justify-content-between mt-3">
            <button type="submit" name="action" value="search" class="btn btn-success ">
                نمایش تالار های مجود
            </button>
            <button type="submit" name="action" value="reserve" class="btn btn-primary mx-1">
                ثبت رزرو
            </button>
            <button type="submit" name="action" value="cancel" class="btn btn-danger mx-1">
                لغو رزرو
            </button>
        </div>
    </form>
</div>

@if(isset($halls))
<div class="mymodal">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header d-flex justify-content-between">
            <h4 class="modal-title">تالار های موجود</h4>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th>شماره تالار</th>
                    <th>ظرفیت تالار</th>
                    <th>هزینه تالار</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($halls as $hall)
                        <form action="hall_select" method="POST">
                            @csrf
                            <tr class="">
                            <input type="text" name="id" style="display: none;" value={{$hall->id}}>
                            <input type="text" name="capacity" style="display: none;" value={{$hall->capacity}}>
                            <input type="text" name="cost" style="display: none;" value={{$hall->cost}}>
                            <td>{{$hall->id}}</td>
                            <td>{{$hall->capacity}}</td>
                            <td>{{$hall->cost}}</td>
                            <td>
                                <button class="btn btn-success" type="submit">
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
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">بستن</button>
        </div>
    </div>
</div>
@endif


@if(isset($reserves))
<div class="mymodal">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header d-flex justify-content-between">
            <h4 class="modal-title">تالار های رزرو شده</h4>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th>شماره رزرو</th>
                    <th>شماره تالار</th>
                    <th>ایدی مهمان</th>
                    <th>تاریخ شروع رزرو</th>
                    <th>تاریخ پایان رزرو</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reserves as $reserve)
                        <form action="delete_reserve" method="POST">
                            @csrf
                            <tr class="">
                            <input type="text" name="id" style="display: none;" value={{$reserve->id}}>
                            <td>{{$reserve->id}}</td>
                            <td>{{$reserve->hall_id}}</td>
                            <td>{{$reserve->guest_id}}</td>
                            <td>{{$reserve->reserve_start}}</td>
                            <td>{{$reserve->reserve_end}}</td>
                            <td>
                                <button class="btn btn-danger" type="submit">
                                    حذف
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
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">بستن</button>
        </div>
    </div>
</div>
@endif
