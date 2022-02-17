@include('layout')
<div class="section d-flex flex-column" id="guest_section">
    <label for="">اطلاعات مهمان</label>
    <hr>
    <form action="/create_user" class="mb-4 d-flex flex-wrap justify-content-between">
        <div class="d-flex flex-column my-2">
            <label class="form-label text-danger" for="">نام و نام خانوادگی (الزامی)</label>
            <input class="form-control" type="text" name="fullname" id="" placeholder="علی پیله فروشها">
        </div>
        <div class="d-flex flex-column my-2">
            <label class="form-label" for="">سن</label>
            <input class="form-control" type="text" name="" id="" placeholder="25">
        </div>
        <div class="d-flex flex-column my-2">
            <label class="form-label" for="">جنسیت</label>
            <input class="form-control" type="text" name="" id="" placeholder="مرد - زن">
        </div>
        <div class="d-flex flex-column my-2">
            <label class="form-label text-danger" for="">شماره ملی (الزامی)</label>
            <input class="form-control" type="text" name="ssn" id="" placeholder="4311279350">
        </div>
        <div class="d-flex flex-column my-2">
            <label class="form-label text-danger" for="">شماره تماس (الزامی)</label>
            <input class="form-control" type="text" name="number" id="" placeholder="09124519258">
        </div>
        <div class="d-flex flex-column my-2">
            <label class="form-label" for="">ایدی (در صورت نیاز به سرچ)</label>
            <input class="form-control" type="text" name="" id="" placeholder="1">
        </div>
        <div class="d-flex justify-content-between">
            <button class="btn btn-success mt-3 " type="submit">ثبت اطلاعات</button>
            <button class="btn btn-primary mt-3 mx-3" type="submit">جستجو</button>
        </div>
    </form>
    <label for="" class="mt-4">اطلاعات تالار</label>
    <hr>
    <form action="" method="POST" class="d-flex flex-wrap justify-content-between mt-1">
        <div class="d-flex flex-column my-2">
            <label class="form-label" for="">شماره تالار</label>
            <input class="form-control" type="text" name="" id="" placeholder="1">
        </div>
        <div class="d-flex flex-column my-2">
            <label class="form-label" for="">ظرفیت تالار</label>
            <input class="form-control" type="text" name="" id="" placeholder="200">
        </div>
        <div class="d-flex flex-column my-2">
            <label class="form-label" for="">پذیرایی مد نظر</label>
            <input class="form-control" type="text" name="" id="" placeholder="میوه - بستنی - چای">
        </div>
        <div class="d-flex flex-column my-2">
            <label class="form-label" for="">تاریخ شروع اقامت</label>
            <input class="form-control" type="date" name="" id="" placeholder="1400-9-6">
        </div>
        <div class="d-flex flex-column my-2">
            <label class="form-label" for="">تاریخ پایان اقامت</label>
            <input class="form-control" type="date" name="" id="" placeholder="1400-10-2">
        </div>
        <div class="d-flex flex-column my-2">
            <label class="form-label" for="">هزینه اقامت(هر شب)</label>
            <input class="form-control" type="text" name="" id="" placeholder="200,000 تومان">
        </div>
        <div class="d-flex justify-content-between mt-3">
            <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#myModal">
                نمایش تالار های مجود
            </button>
            <button type="button" class="btn btn-primary mx-1" data-bs-toggle="modal" data-bs-target="#myModal">
                ثبت رزرو
            </button>
            <button type="button" class="btn btn-danger mx-1" data-bs-toggle="modal" data-bs-target="#myModal">
                لغو رزرو
            </button>
        </div>
    </form>
</div>

<div class="modal" id="myModal">
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
                    <tr class="">
                    <td>1</td>
                    <td>300</td>
                    <td>300,000 تومان</td>
                    <td>
                        <button class="btn btn-success">
                            انتخاب
                        </button>
                    </td>
                    </tr>
                    <tr class="">
                        <td>1</td>
                        <td>300</td>
                        <td>250,000 تومان</td>
                        <td>
                            <button class="btn btn-success">
                                انتخاب
                            </button>
                        </td>
                    </tr>
                    <tr class="">
                        <td>1</td>
                        <td>300</td>
                        <td>170,000 تومان</td>
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
