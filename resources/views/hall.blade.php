@include('layout')
<div class="section" id="guest_section">
    <form action="./submit" class="mx-3">
        <div class="d-flex flex-row justify-content-between">
            <div class="d-flex flex-column">
                <label for="">اطلاعات مهمان</label>
                <hr>
                <div class="d-flex flex-column my-2">
                    <label class="form-label" for="">نام و نام خانوادگی</label>
                    <input class="form-control" type="text" name="" id="" placeholder="علی پیله فروشها">
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
                    <label class="form-label" for="">شماره ملی</label>
                    <input class="form-control" type="text" name="" id="" placeholder="4311279350">
                </div>
                <div class="d-flex flex-column my-2">
                    <label class="form-label" for="">شماره تماس</label>
                    <input class="form-control" type="text" name="" id="" placeholder="09124519258">
                </div>
                <div class="d-flex flex-column my-2">
                    <label class="form-label" for="">ایدی (در صورت نیاز به سرچ)</label>
                    <input class="form-control" type="text" name="" id="" placeholder="1">
                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-success mt-3" type="submit">ثبت اطلاعات</button>
                    <button class="btn btn-primary mt-3" type="submit">جستجو</button>
                </div>
            </div>
            <div class="d-flex flex-column">
                <label for="">اطلاعات تالار</label>
                <hr>
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
                    <input class="form-control" type="text" name="" id="" placeholder="1400-9-6">
                </div>
                <div class="d-flex flex-column my-2">
                    <label class="form-label" for="">تاریخ پایان اقامت</label>
                    <input class="form-control" type="text" name="" id="" placeholder="1400-10-2">
                </div>
                <div class="d-flex flex-column my-2">
                    <label class="form-label" for="">هزینه اقامت(هر شب)</label>
                    <input class="form-control" type="text" name="" id="" disabled placeholder="200,000 تومان">
                </div>
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-success mx-1" data-bs-toggle="modal" data-bs-target="#myModal">
                        نمایش تالار های مجود
                    </button>
                    <button type="button" class="btn btn-primary mx-1" data-bs-toggle="modal" data-bs-target="#myModal">
                        ثبت رزرو
                    </button>
                    <button type="button" class="btn btn-danger mx-1" data-bs-toggle="modal" data-bs-target="#myModal">
                        لغو رزرو
                    </button>
                </div>
            </div>
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
