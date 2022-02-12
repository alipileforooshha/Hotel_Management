@include('layout')
<div class="section" id="guest_section">
    <form action="./submit" class="mx-3">
        <div class="d-flex flex-row justify-content-between">
            <div class="d-flex flex-column">
                <label for="">اطلاعات مهمان</label>
                <hr>
                <div class="d-flex flex-column my-2">
                    <label class="form-label" for="">نام</label>
                    <input class="form-control" type="text" name="" id="">
                </div>
                <div class="d-flex flex-column my-2">
                    <label class="form-label" for="">سن</label>
                    <input class="form-control" type="text" name="" id="">
                </div>
                <div class="d-flex flex-column my-2">
                    <label class="form-label" for="">جنسیت</label>
                    <input class="form-control" type="text" name="" id="">
                </div>
                <div class="d-flex flex-column my-2">
                    <label class="form-label" for="">شماره ملی</label>
                    <input class="form-control" type="text" name="" id="">
                </div>
                <div class="d-flex flex-column my-2">
                    <label class="form-label" for="">شماره تماس</label>
                    <input class="form-control" type="text" name="" id="">
                </div>
                <button class="btn btn-primary mt-3" type="submit">ثبت اطلاعات</button>
            </div>
            <div class="d-flex flex-column">
                <label for="">اطلاعات تالار</label>
                <hr>
                <div class="d-flex flex-column my-2">
                    <label class="form-label" for="">شماره تالار</label>
                    <input class="form-control" type="text" name="" id="">
                </div>
                <div class="d-flex flex-column my-2">
                    <label class="form-label" for="">ظرفیت تالار</label>
                    <input class="form-control" type="text" name="" id="">
                </div>
                <div class="d-flex flex-column my-2">
                    <label class="form-label" for="">پذیرایی مد نظر</label>
                    <input class="form-control" type="text" name="" id="">
                </div>
                <div class="d-flex flex-column my-2">
                    <label class="form-label" for="">تاریخ شروع اقامت</label>
                    <input class="form-control" type="text" name="" id="">
                </div>
                <div class="d-flex flex-column my-2">
                    <label class="form-label" for="">تاریخ پایان اقامت</label>
                    <input class="form-control" type="text" name="" id="">
                </div>
                <div class="d-flex flex-column my-2">
                    <label class="form-label" for="">هزینه اقامت(هر شب)</label>
                    <input class="form-control" type="text" name="" id="" disabled>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">
                        نمایش تالار های مجود
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
            <h4 class="modal-title">اتاق های موجود</h4>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th>شماره اتاق</th>
                    <th>ظرفیت اتاق</th>
                    <th>امکانات ویژه</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                    <td>John</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                    <td>
                        <button class="btn btn-success">
                            انتخاب
                        </button>
                    </td>
                    </tr>
                    <tr class="">
                    <td>John</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                    <td>
                        <button class="btn btn-success">
                            انتخاب
                        </button>
                    </td>
                    </tr>
                    <tr class="">
                    <td>John</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
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
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
    </div>
</div>
