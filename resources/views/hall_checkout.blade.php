@include('layout')
<div class="section d-flex justify-content-between">
    @include('search_guest')
    <form action="">
        <div class="d-flex flex-column">
            <label for="">اطلاعات تالار</label>
            <hr>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">شماره تالار</label>
                <input class="form-control" type="text" name="" id="" placeholder="1">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">ظرفیت تالار</label>
                <input class="form-control" type="text" name="" id="" placeholder="300 نفر">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">پذیرایی مد نظر</label>
                <input class="form-control" type="text" name="" id="" placeholder="چای - شیرینی - میوه">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">تاریخ شروع اقامت</label>
                <input class="form-control" type="text" name="" id="" placeholder="1400-9-2">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">تاریخ پایان اقامت</label>
                <input class="form-control" type="text" name="" id="" placeholder="1400-5-7">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">هزینه اقامت(هر شب)</label>
                <input class="form-control" type="text" name="" id="" disabled placeholder="1400-5-8">
            </div>
            <div class="d-flex flex-column my-2">
                <label class="form-label" for="">هزینه کل</label>
                <input class="form-control" type="text" name="" id="" disabled placeholder="10,000,000 تومان">
            </div>
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                    جستجوی تالار ها
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
          <h4 class="modal-title">لیست تالار ها</h4>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th>شماره تالار</th>
                    <th>ظرفیت تالار</th>
                    <th>هزینه رزرو هر شب</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                    <td>1</td>
                    <td>400 نفر</td>
                    <td>1,000,000 تومان</td>
                    <td>
                        <button class="btn btn-success">
                            انتخاب
                        </button>
                    </td>
                    </tr>
                    <tr class="">
                    <td>2</td>
                    <td>750 نفر</td>
                    <td>1,700,000 تومان</td>
                    <td>
                        <button class="btn btn-success">
                            انتخاب
                        </button>
                    </td>
                    </tr>
                    <tr class="">
                    <td>3</td>
                    <td>200 نفر</td>
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