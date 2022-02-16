@include('layout')
<div class="section" id="guest_section">
    <form action="/create_user" class="mx-3" method="POST">
        @csrf
        <div class="d-flex flex-row justify-content-between">
            <div class="d-flex flex-column">
                <label for="">اطلاعات مهمان</label>
                <hr>
                <div class="d-flex flex-column my-2">
                    <label class="form-label" for="">ایدی مهمان</label>
                    <input class="form-control" type="text" name="" id="" placeholder="علی پیله فروشها">
                </div>
                <div class="d-flex flex-column my-2">
                    <label class="form-label" for="">نام  و نام خانوادگی</label>
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
                    <label class="form-label" for="">شماره ملی</label>
                    <input class="form-control" type="text" name="ssn" id="" placeholder="4313345821">
                </div>
                <div class="d-flex flex-column my-2">
                    <label class="form-label" for="">شماره تماس</label>
                    <input class="form-control" type="text" name="number" id="" placeholder="09128221412">
                </div>
                <button class="btn btn-primary mt-3" type="submit">ثبت اطلاعات</button>
            </div>
        </form>
            <form class="d-flex flex-column">
                <label for="">اطلاعات اتاق</label>
                <hr>
                <div class="d-flex flex-column my-2">
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
                </div>
                <div class="d-flex flex-column my-2">
                    <label class="form-label" for="">امکانات ویژه</label>
                    <div class="form-check">
                        <label class="form-check-label">ویو ابدی</label>
                        <input class="form-check-input" type="checkbox" name="" id="">  
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">کارت ویژه</label>
                        <input class="form-check-input" type="checkbox" name="" id="">  
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">آیتم اول</label>
                        <input class="form-check-input" type="checkbox" name="" id="">  
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">آیتم اول</label>
                        <input class="form-check-input" type="checkbox" name="" id="">  
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-success mx-1" data-bs-toggle="modal" data-bs-target="#myModal">
                        نمایش اتاق های موجود
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        رزرو اتاق
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
                        <button class="btn btn-primary">
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
                            <button class="btn btn-primary">
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
                            <button class="btn btn-primary">
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
