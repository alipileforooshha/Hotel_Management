@include('layout')
<div class="section d-flex justify-content-between">
    <form action="">
        @include('search_guest')
        <div class="d-flex flex-column">
            <label for="">اطلاعات اتاق</label>
            <hr>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">شماره اتاق</label>
                <input class="form-control" type="text" name="" id="" placeholder="1">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">طبقه اتاق</label>
                <input class="form-control" type="text" name="" id="" placeholder="طبقه 4">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">ظرفیت اتاق</label>
                <input class="form-control" type="text" name="" id="" placeholder="2">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">تاریخ شروع اقامت</label>
                <input class="form-control" type="text" name="" id="" placeholder="1400-2-4">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">تاریخ پایان اقامت</label>
                <input class="form-control" type="text" name="" id="" placeholder="1400-2-9">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">هزینه اقامت(هر شب)</label>
                <input class="form-control" type="text" name="" id="" disabled placeholder="200,000 تومان">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">هزینه کل</label>
                <input class="form-control" type="text" name="" id="" disabled placeholder="1,000,000 تومان">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">امکانات ویژه</label>
                <div class="form-check">
                    <label class="form-check-label">ویو ابدی</label>
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
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                    جستجوی اتاق ها
                </button>
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-success">
                    تسویه
                </button>
            </div>
        </div>
        <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">لیست اتاق ها</h4>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th>شماره اتاق</th>
                    <th>ظرفیت اتاق</th>
                    <th>امکانات ویژه</th>
                    <th>هزینه اقامت هر شب</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                    <td>1</td>
                    <td>4 نفر</td>
                    <td>ویو ابدی</td>
                    <td>100,000 تومان</td>
                    <td>
                        <button class="btn btn-success">
                            انتخاب
                        </button>
                    </td>
                    </tr>
                    <tr class="">
                    <td>2</td>
                    <td>3 نفر</td>
                    <td>-</td>
                    <td>70,000 تومان</td>
                    <td>
                        <button class="btn btn-success">
                            انتخاب
                        </button>
                    </td>
                    </tr>
                    <tr class="">
                    <td>3</td>
                    <td>2 نفر</td>
                    <td>ویو ابدی - حمام ویژه</td>
                    <td>150,000 تومان</td>
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
  </div>
    </form>
  
  
</div>